<?php
App::uses('AppController', 'Controller');
/**
 * Clubs Controller
 *
 * @property Club $Club
 * @property PaginatorComponent $Paginator
 */
class ClubsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Auth');

	public $uses = array('Club','Event','User','Attachment','Clubcategory');
	

	//ビューの設定
	public $layout='event';

	//ヘルパー
	//public $helpers =array('Html','Form','Session','Tree','Time');
	/*
	public $helpers = array(
		'Session',
		'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
		'Form' => array('className' => 'BoostCake.BoostCakeForm'),
		'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
	);
	*/


	public $paginate = array(
		'Club'=>array(
			'limit' => 10,
			//'prameType'=>'named',
			//'type'=>'first',
			//'order' => array(
				//'Post.id' => 'desc'
        	//)
    	),
		/*
		'Category'=>array(
			'limit'=>1,
			'type'=>'threaded'
		)
		*/
		
	);


	//認証の設定
	public function beforeFilter(){
		if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
			$this->layout = 'default';
		}
		$this->Auth->allow('index','view','search');
		$twitter = 'summary';
		$this->set('twitter',$twitter);
		$img = 'd-cle.com/app/webroot/img/hpicon.jpg';
		$this->set('img',$img);
		$description = 'でぃーくるとは、同志社大学のいろいろな情報を発信しています。同志社大学、同志社スナップ、コラム、食レポ、新歓、イベント、団体、サークル紹介など色々なコンテンツがあります！';
		$this->set('description',$description);
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Club->recursive = 1;
		$this->set('clubs', $this->paginate('Club'));
		$clubcategories = $this->Clubcategory->generateTreeList();
		$this->set(compact('clubcategories'));
	}
	//検索の設定
	public function search(){
		$body = null;
		if(isset($this->request->query['clubcategory_id'])){
			$data = $this->paginate('Club',array(
			array(
				'Club.clubcategory_id like' => "{$this->request->query['clubcategory_id']}"
				//'Post.body like' => "%{$this->data['Post']['body']}%"
				)
			)
		);
		}
		$this->set('clubs',$data);
		$this->set('name',$this->request->query['clubcategory_id']);
		$title_for_layout = 'サーチ';
		$this->set('title_for_layout',$title_for_layout);
		
		$clubcategories = $this->Clubcategory->generateTreeList();
		$this->set(compact('clubcategories'));
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		//再帰値
		$this->layout = 'event';
		$this->Club->recursive = 1;
		if (!$this->Club->exists($id)) {
			throw new NotFoundException(__('Invalid club'));
		}
		$options = array('conditions' => array('Club.' . $this->Club->primaryKey => $id));
		$this->set('club', $this->Club->find('first', $options));
		
		$club = $this->Event->find('all',array('conditions' => array('Event.club_id'=> $id)));
		
		// SQLのレスポンスをもとにデータ作成
		$rows = array();
		for ( $a=0; count($club) > $a; $a++) {
			$rows[] = array(
				'id' => $club[$a]['Event']['id'],
				'title' => $club[$a]['Event']['title'],
				'start' => date( 'Y-m-d H:i', strtotime($club[$a]['Event']['start'])),
				'end' => date( 'Y-m-d H:i', strtotime($club[$a]['Event']['end'])),
				'allDay' => $club[$a]['Event']['allday'],
				'url' =>'/events/view/'.$club[$a]['Event']['id'],
			);
		}
		// JSONへ変換
		//echo json_encode($rows);
		$this->set('rows',json_encode($rows));
		
		$data = $this->Club->find('first', $options);
		
		$title_for_layout = $data['Club']['name'];
		$this->set('title_for_layout',$title_for_layout);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Club->create();
			$data = $this->request->data;
			$data['Club']['user_id'] = $this->Auth->user('id');
			if ($this->Club->saveAll($data)) {
				$this->Session->setFlash(__('保存が完了しました'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The club could not be saved. Please, try again.'));
			}
		}
		$users = $this->Club->User->find('list');
		$clubcategories = $this->Clubcategory->generateTreeList();
		$this->set(compact('users', 'clubcategories'));
	}
	
	
	public function upload(){
		if($this->request->is('post')){
			$this->set('data',$this->request->data);
			if($this->Club->saveAll($this->request->data)){
				$this->Session->setFlash('成功しました');
				return $this->redirect(array('action' => 'index'));
			}else{
				$this->Session->setFlash('保存に失敗しました');
			}
		
		}
	}
	
	public function clubsevent($id){
		$data = $this->Club->find('first', array(/*'fields'=> 'user_id', */'conditions' => array('Club.' . $this->Club->primaryKey => $id)));
		$test = $data['Club']['user_id'];
		$name = $data['Club']['name'];
		
		$eventcategories = $this->Event->Eventcategory->find('list');
		$this->set(compact('eventcategories'));
		
		
		if($this->Auth->user('id') == $test){
			$this->set('name',$name);
			
		
			if ($this->request->is(array('post', 'put'))) {
				
				$form = $this->request->data;
				$form['Event']['user_id'] = $this->Auth->user('id');
				$form['Event']['club_id'] =	$id;
				$form['Event']['eventcategory_id'] = '1';
				$form['Event']['start'] = $form['Event']['day'].' '.$form['Event']['time'];
				$form['Event']['end'] = $form['Event']['endday'].' '.$form['Event']['endtime'];
				$eventcategories = $this->Event->Eventcategory->find('list');
				$this->set(compact('eventcategories'));
				
				if ($this->Event->save($form)) {
					$this->Session->setFlash(__('保存できました'));
					return $this->redirect(array('action' => 'edit',$id));
				} else {
					$this->Session->setFlash(__('The club could not be saved. Please, try again.'));
				}
			} else {
				/*
				$options = array('conditions' => array('Club.' . $this->Club->primaryKey => $id));
				$this->request->data = $this->Club->find('first', $options);
				*/
			}
			
		}else {
			$this->Session->setFlash('このユーザーに管理権限はありません');
			return $this->redirect(array('action'=>'index'));
		}
	}
	
	public function event($id){
		$data = $this->Club->find('first', array(/*'fields'=> 'user_id', */'conditions' => array('Club.' . $this->Club->primaryKey => $id)));
		$test = $data['Club']['user_id'];
		$name = $data['Club']['name'];
		
		
		if($this->Auth->user('id') == $test){
			$this->set('name',$name);
			$eventtags = $this->Event->Eventtag->find('list');
			$this->set(compact('eventtags'));
		
			if ($this->request->is(array('post', 'put'))) {
				
				$form = $this->request->data;
				$form['Event']['user_id'] = $this->Auth->user('id');
				$form['Event']['club_id'] =	$id;
				$form['Event']['eventcategory_id'] = '2';
				$form['Event']['start'] = $form['Event']['day'].' '.$form['Event']['time'];
				$form['Event']['end'] = $form['Event']['endday'].' '.$form['Event']['endtime'];
				
				
				if ($this->Event->save($form)) {
					$this->Session->setFlash(__('保存できました'));
					return $this->redirect(array('action' => 'edit',$id));
				} else {
					$this->Session->setFlash(__('The club could not be saved. Please, try again.'));
				}
			} else {
				/*
				$options = array('conditions' => array('Club.' . $this->Club->primaryKey => $id));
				$this->request->data = $this->Club->find('first', $options);
				*/
			}
			
		}else {
			$this->Session->setFlash('このユーザーに管理権限はありません');
			return $this->redirect(array('action'=>'index'));
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Club->exists($id)) {
			throw new NotFoundException(__('Invalid club'));
		}
		$data = $this->Club->find('first', array('fields'=> 'user_id', 'conditions' => array('Club.' . $this->Club->primaryKey => $id)));
		$test = $data['Club']['user_id'];
		
		if($this->Auth->user('id') == $test){
			//club以下のイベントを取得
			$news = $this->Event->find('all',array('conditions' => array('Event.club_id'=>$id ,'Event.eventcategory_id'=>'1'),'recursive'=>-1));
			$this->set('news',$news);
			
			$events = $this->Event->find('all',array('conditions' => array('Event.club_id'=>$id ,'Event.eventcategory_id'=>'2'),'recursive'=>-1));
			$this->set('events',$events);
			
			//
			if ($this->request->is(array('post', 'put'))) {
				if ($this->Club->saveAll($this->request->data)) {
					$this->Session->setFlash('編集完了しました');
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The club could not be saved. Please, try again.'));
				}
			} else {
				$options = array('conditions' => array('Club.' . $this->Club->primaryKey => $id));
				$this->request->data = $this->Club->find('first', $options);
				$users = $this->Club->User->find('list');
				$clubcategories = $this->Clubcategory->generateTreeList();
				$this->set(compact('users', 'clubcategories'));
				//写真のリクエスト
				$this->set('photo',$this->request->data);
				//
				$this->set('id',$id);
			}
			
		}else {
			$this->Session->setFlash('このユーザーに管理権限はありません');
			return $this->redirect(array('action'=>'index'));
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Club->id = $id;
		if (!$this->Club->exists()) {
			throw new NotFoundException(__('Invalid club'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Club->delete()) {
			$this->Session->setFlash(__('The club has been deleted.'));
		} else {
			$this->Session->setFlash(__('The club could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
