<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class AdminsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session');

	//ビューの設定
	//public $layout='test';
	
	//モデルの設定
	public $uses =array('Post','Category','Event','User','Club','Attachment','Clubcategory','Event');
	
	//
	public $actsAs = array('Tree','GroupTree');
	
	//ヘルパー
	public $helpers =array('Html','Form','Session','Tree','Time');
	
	/*
	public $helpers = array(
		'Session',
		'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
		'Form' => array('className' => 'BoostCake.BoostCakeForm'),
		'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
	);
	*/
	
	public $paginate = array(
		'Post'=>array(
			'limit' => 5,
			//'prameType'=>'named',
			//'type'=>'first',
			'order' => array(
				'Post.id' => 'desc'
        	)
    	),
		'Club'=>array(
			'limit' => 20,
			//'prameType'=>'named',
			//'type'=>'first',
			//'order' => array(
				//'Post.id' => 'desc'
        	//)
    	),
		'Event'=>array(
			'limit' => 20,
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
		if($this->Auth->user('group_id') == 1){
		$this->Auth->allow();
		}else{
			return $this->redirect(array('controller'=>'home','action' => 'index'));
		}
	}


	//メインページ
	public function index() {
		$this->Post->recursive = 0;
		
		$this->set('posts',
			$this->paginate('Post'));
		
	}
	
	
	
	//クラブ一覧
	public function clubindex(){
		$this->Club->recursive = 0;
		
		$this->set('clubs',
			$this->paginate('Club'));
		
	}
	//追加
	public function clubadd(){
		if ($this->request->is('post')) {
			$this->Club->create();
			if ($this->Club->save($this->request->data)) {
				$this->Session->setFlash(__('The club has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The club could not be saved. Please, try again.'));
			}
		}
		$users = $this->Club->User->find('list');
		$clubcategories = $this->Clubcategory->generateTreeList();
		$this->set(compact('users', 'clubcategories'));
	}
	//views
	public function clubview($id){
		if (!$this->Club->exists($id)) {
			throw new NotFoundException(__('Invalid club'));
		}
		$options = array('conditions' => array('Club.' . $this->Club->primaryKey => $id));
		$this->set('club', $this->Club->find('first', $options));
	}
	//編集
	public function clubedit($id = null){
		if (!$this->Club->exists($id)) {
			throw new NotFoundException(__('Invalid club'));
		}
		
			if ($this->request->is(array('post', 'put'))) {
				if ($this->Club->saveAll($this->request->data)) {
					$this->Session->setFlash(__('The club has been saved.'));
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
				$events = $this->Event->find('all',array('conditions' => array('Event.club_id'=>$id),'recursive'=>-1));
				$this->set('events',$events);
			}

	}
	
	
	//イベント管理
	public function eventindex(){
		$this->Event->recursive = 0;
		$this->set('events', $this->paginate('Event'));
		$events = $this->Event->find( 'all'/*, array( 'conditions' => $conditions)*/);
	
		// SQLのレスポンスをもとにデータ作成
		$rows = array();
		for ( $a=0; count( $events) > $a; $a++) {
			$rows[] = array(
				'id' => $events[$a]['Event']['id'],
				'title' => $events[$a]['Event']['title'],
				'start' => date( 'Y-m-d H:i', strtotime($events[$a]['Event']['start'])),
				'end' => date( 'Y-m-d H:i', strtotime($events[$a]['Event']['end'])),
				'allDay' => $events[$a]['Event']['allday'],
				'url' =>$events[$a]['Event']['url'],
			);
		}
		// JSONへ変換
		//echo json_encode($rows);
		$this->set('rows',json_encode($rows));
		
	}
	//イベント追加
	public function eventadd(){
		if ($this->request->is('post')) {
			$this->Event->create();
			$data = $this->request->data;
			$data['Event']['user_id'] = $this->Auth->user('id');
			if ($this->Event->save($data)) {
				$this->Session->setFlash(__('The event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.'));
			}
		}
		$users = $this->Event->User->find('list');
		$clubs = $this->Event->Club->find('list');
		$eventcategories = $this->Event->Eventcategory->find('list');
		$this->set(compact('users', 'clubs', 'eventcategories'));
	}
	//イベント編集
	public function eventedit($id){
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		
			if ($this->request->is(array('post', 'put'))) {
				if ($this->Event->save($this->request->data)) {
					$this->Session->setFlash(__('The event has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The event could not be saved. Please, try again.'));
				}
			} else {
				$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
				$this->request->data = $this->Event->find('first', $options);
			}
			$users = $this->Event->User->find('list');
			$clubs = $this->Event->Club->find('list');
			$eventcategories = $this->Event->Eventcategory->find('list');
			$this->set(compact('users', 'clubs', 'eventcategories'));
		
	}
	//イベントview
	public function eventview($id = null){
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
		$this->set('event', $this->Event->find('first', $options));
	}

	
	


	//ビュー
	public function view($id = null){
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('Post.' . $this->Post->primaryKey => $id);
		$this->set('posts', $this->paginate('Post',
			array('Post.' . $this->Post->primaryKey => $id)
		));
		$title_for_layout = $this->Post->field('title',array('Post.' . $this->Post->primaryKey => $id));
		$this->set('title_for_layout',$title_for_layout);
	}
	
	//カテゴリー
	public function category($id){
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
		
		//$this->set('category',$this->paginate('Category',array('Category.id' => 3)));
		//$this->set('cate', $this->Category->primaryKey =>$id);
		//$this->set('data',$this->Post->find('frist',array('condtions'=>array('Post.id'=>3))));
		
		$this->set('posts',
			$this->paginate('Post',array('Post.category_id'=>$id)));
			
		$title_for_layout = $this->Category->field('name',array('Category.' . $this->Category->primaryKey => $id));
		$this->set('title_for_layout',$title_for_layout);
	
	}
	
	//メール設定お問い合わせ
	public function form(){
			if ($this->request->is('post')) {
				$this->set('a',$this->request->data);
				
				
				$email = new CakeEmail('contact');
				
				$email->to($this->request->data['email'])
					//->bcc('web@keisuke23.com')
					->subject('お問い合わせが完了しました')
					->viewVars($this->request->data);
					
				
				
				$frommail = new CakeEmail('frommail');
				$frommail->to('web@keisuke23.com')
					->viewVars($this->request->data);
				
				$frommail->send();
				
				if($email->send()){
						//メール送信が成功した場合ここで処理
						$this->Session->setFlash('送信を完了しました');
				}
				//$this->set('a',$this->request->data());
			}
		$this->render();
	}


}
