<?php
App::uses('AppController', 'Controller');
/**
 * Events Controller
 *
 * @property Event $Event
 * @property PaginatorComponent $Paginator
 */
class EventsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Auth');
	
	//モデルの設定
	public $uses =array('Event','User','Club','Attachment','Clubcategory','Post','Category','Eventcategory');
	
	
	//ビューの設定
	public $layout='event';
	
	//ヘルパー
	/*
	public $helpers = array(
		'Session',
		'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
		'Form' => array('className' => 'BoostCake.BoostCakeForm'),
		'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
	);
	*/
	
	
	public $paginate = array(
		'Event'=>array(
			'limit' => 30,
			//'prameType'=>'named',
			//'type'=>'first',
			'order' => array(
				'Event.start' => 'asc'
        	),
			/*
			'conditions'=>array(
				'Event.start >='=> '2014-04-01'
			),
			*/
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
			$this->layout = 'admin';
		}
		$this->Auth->allow('index','view','search');
		$twitter = 'summary';
		$this->set('twitter',$twitter);
		$img = 'd-cle.com/app/webroot/img/karender.jpg';
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
		$this->Event->recursive = 0;
		$this->set('events', $this->paginate('Event',
			array(array(
				'Event.start >='=> date('y-m-d')
			))));
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
				'url' =>'/events/view/'.$events[$a]['Event']['id'],
				'color'=>'#'.$events[$a]['Event']['coloer']//coloer 378006
			);
		}
		// JSONへ変換
		//echo json_encode($rows);
		$this->set('rows',json_encode($rows));
		
		
		$eventcategories = $this->Event->Eventcategory->find('list');
		$this->set(compact('eventcategories'));
	}
	
	//検索の設定
	public function search(){
		$body = null;
		if(isset($this->request->query['eventcategory_id'])){
			$data = $this->paginate('Event',array(
			array(
				'Event.eventcategory_id like' => "{$this->request->query['eventcategory_id']}"
				//'Post.body like' => "%{$this->data['Post']['body']}%"
				)
			)
		);
		}
		$events = $this->Event->find( 'all', array( 'conditions' => array('Event.eventcategory_id'=>$this->request->query['eventcategory_id'])));
	
		// SQLのレスポンスをもとにデータ作成
		$rows = array();
		for ( $a=0; count( $events) > $a; $a++) {
			$rows[] = array(
				'id' => $events[$a]['Event']['id'],
				'title' => $events[$a]['Event']['title'],
				'start' => date( 'Y-m-d H:i', strtotime($events[$a]['Event']['start'])),
				'end' => date( 'Y-m-d H:i', strtotime($events[$a]['Event']['end'])),
				'allDay' => $events[$a]['Event']['allday'],
				'url' =>'/events/view/'.$events[$a]['Event']['id'],
				'color'=>'#'.$events[$a]['Event']['coloer']//coloer 378006
			);
		}
		// JSONへ変換
		//echo json_encode($rows);
		$this->set('rows',json_encode($rows));
		
		$this->set('events',$data);
		$this->set('name',$this->request->query['eventcategory_id']);
		$title_for_layout = 'サーチ';
		$this->set('title_for_layout',$title_for_layout);
		
		$eventcategories = $this->Event->Eventcategory->find('list');
		$this->set(compact('eventcategories'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
		$this->set('event', $this->Event->find('first', $options));
		
		$title_for_layout = $this->Event->find('first', $options);
		$this->set('title_for_layout',$title_for_layout['Event']['title']);
            	$str = $title_for_layout['Event']['body'];
            	$str = strip_tags($str);
            	mb_strimwidth($str, 0, 400, "…",'utf8');
		$this->set('description',mb_strimwidth($str, 0, 400, "…",'utf8'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is(array('post', 'put'))) {
				
				$form = $this->request->data;
				$form['Event']['user_id'] = $this->Auth->user('id');
				$form['Event']['start'] = $form['Event']['day'].' '.$form['Event']['time'];
				$form['Event']['end'] = $form['Event']['endday'].' '.$form['Event']['endtime'];
				$form['Event']['url'] = '/events/view';				
				
				if ($this->Event->save($form)) {
					$this->Session->setFlash(__('保存できました'));
					return $this->redirect(array('action' => 'add'));
				} else {
					$this->Session->setFlash(__('The club could not be saved. Please, try again.'));
				}
			} else {
				/*
				$options = array('conditions' => array('Club.' . $this->Club->primaryKey => $id));
				$this->request->data = $this->Club->find('first', $options);
				*/
			}
			$users = $this->Event->User->find('list');
			$clubs = $this->Event->Club->find('list');
			$eventcategories = $this->Event->Eventcategory->find('list');
			$this->set(compact('users', 'clubs', 'eventcategories'));

	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		$data = $this->Event->find('first', array('fields'=> 'user_id', 'conditions' => array('Event.' . $this->Event->primaryKey => $id)));
		$test = $data['Event']['user_id'];
		
		$eventcategories = $this->Event->Eventcategory->find('list');
		$this->set(compact('eventcategories'));
		
		if($this->Auth->user('id') == $test){
		
			if ($this->request->is(array('post', 'put'))) {
				$a = $this->request->data;
				$a['Event']['start'] = $a['Event']['day'].' '.$a['Event']['time'];
				$a['Event']['end'] = $a['Event']['endday'].' '.$a['Event']['endtime'];
				$a['Event']['url'] = '/events/view/'.$a['Event']['id'];
				if ($this->Event->save($a)) {
					$this->Session->setFlash(__('The event has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The event could not be saved. Please, try again.'));
				}
			} else {
				$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
				$this->request->data = $this->Event->find('first', $options);
				$day = $this->request->data;
				$day['Event']['day'] =  date('Y-m-d',strtotime($day['Event']['start']));
				$day['Event']['time'] =  date('H:i',strtotime($day['Event']['start']));

				$day['Event']['endday'] =  date('Y-m-d',strtotime($day['Event']['end']));
				$day['Event']['endtime'] =  date('H:i',strtotime($day['Event']['end']));
				$this->request->data = $day;
				$this->set('day',$day);
			}
			$users = $this->Event->User->find('list');
			$clubs = $this->Event->Club->find('list');
			$eventcategories = $this->Event->Eventcategory->find('list');
			$this->set(compact('users', 'clubs', 'eventcategories'));
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
		$this->Event->id = $id;
		if (!$this->Event->exists()) {
			throw new NotFoundException(__('Invalid event'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Event->delete()) {
			$this->Session->setFlash(__('The event has been deleted.'));
		} else {
			$this->Session->setFlash(__('The event could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Event->recursive = 0;
		$this->set('events', $this->paginate('Event'/*,array('Event.eventcategory_id'=>5)*/));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
		$this->set('event', $this->Event->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is(array('post', 'put'))) {
				
				$form = $this->request->data;
				$form['Event']['user_id'] = $this->Auth->user('id');
				$form['Event']['coloer'] = 378006;
				$form['Event']['eventcategory_id'] = 5;
				$form['Event']['start'] = $form['Event']['day'].' '.$form['Event']['time'];
				$form['Event']['end'] = $form['Event']['endday'].' '.$form['Event']['endtime'];

				
				if ($this->Event->save($form)) {
					$this->Session->setFlash(__('保存できました'));
					return $this->redirect(array('action' => 'add'));
				} else {
					$this->Session->setFlash(__('The club could not be saved. Please, try again.'));
				}
			} else {
				/*
				$options = array('conditions' => array('Club.' . $this->Club->primaryKey => $id));
				$this->request->data = $this->Club->find('first', $options);
				*/
			}
			$users = $this->Event->User->find('list');
			$eventcategories = $this->Event->Eventcategory->find('list');
			$this->set(compact('users','eventcategories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
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

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Event->id = $id;
		if (!$this->Event->exists()) {
			throw new NotFoundException(__('Invalid event'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Event->delete()) {
			$this->Session->setFlash(__('The event has been deleted.'));
		} else {
			$this->Session->setFlash(__('The event could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
