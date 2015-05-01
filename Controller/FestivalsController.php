<?php
App::uses('AppController', 'Controller');
/**
 * Festivals Controller
 *
 * @property Festival $Festival
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FestivalsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');


	public $layout = 'home';
	
	
	//認証の設定
	public function beforeFilter(){
		if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
			$this->layout = 'default';
		}
		$this->Auth->allow('index','stage','search');
		
		$twitter = 'summary';
		$this->set('twitter',$twitter);
		$img = 'd-cle.com/app/webroot/img/photo33.jpg';
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
		$this->Festival->recursive = 0;
		$this->set('festivals', $this->Paginator->paginate());

	}

	//検索の設定
	public function search(){
		$title = null;
		$content = null;
		$place = null;
		if(!empty($this->request->query)){
			$data = $this->paginate('Festival',array(
				array(
					'Festival.title like' => "%{$this->request->query['title']}%",'Festival.content like' => "%{$this->request->query['content']}%",'Festival.place like' => "%{$this->request->query['place']}%"
					)
				)
			);
			$name = count($data);
			$this->set('name',$name);
		} else {
			//$paginate = array('direction'=>'desc');
			$data = $this->Paginator->paginate('Festival');
		}
		/*
		if(isset($this->request->query['title'])){
			$data = $this->paginate('Festival',array(
				array(
					'Festival.title like' => "%{$this->request->query['title']}%"
					)
				)
			);
			$this->set('name',$this->request->query['title']);
		}
		if(!'' == $this->request->query['content']){
			$data = $this->paginate('Festival',array(
				array(
					'Festival.content like' => "%{$this->request->query['content']}%"
					)
				)
			);
			$this->set('name',$this->request->query['content']);
		}
		if(!'' == $this->request->query['place']){
			$data = $this->paginate('Festival',array(
				array(
					'Festival.place like' => "%{$this->request->query['place']}%"
					)
				)
			);
			$this->set('name',$this->request->query['place']);
		}
		*/
		$this->set('festivals',$data);
		$title_for_layout = 'サーチ';
		$this->set('title_for_layout',$title_for_layout);
	}
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Festival->exists($id)) {
			throw new NotFoundException(__('Invalid festival'));
		}
		$options = array('conditions' => array('Festival.' . $this->Festival->primaryKey => $id));
		$this->set('festival', $this->Festival->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Festival->create();
			if ($this->Festival->save($this->request->data)) {
				$this->Session->setFlash(__('The festival has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The festival could not be saved. Please, try again.'));
			}
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
		if (!$this->Festival->exists($id)) {
			throw new NotFoundException(__('Invalid festival'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Festival->save($this->request->data)) {
				$this->Session->setFlash(__('The festival has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The festival could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Festival.' . $this->Festival->primaryKey => $id));
			$this->request->data = $this->Festival->find('first', $options);
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
		$this->Festival->id = $id;
		if (!$this->Festival->exists()) {
			throw new NotFoundException(__('Invalid festival'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Festival->delete()) {
			$this->Session->setFlash(__('The festival has been deleted.'));
		} else {
			$this->Session->setFlash(__('The festival could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Festival->recursive = 0;
		$this->set('festivals', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Festival->exists($id)) {
			throw new NotFoundException(__('Invalid festival'));
		}
		$options = array('conditions' => array('Festival.' . $this->Festival->primaryKey => $id));
		$this->set('festival', $this->Festival->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Festival->create();
			if ($this->Festival->save($this->request->data)) {
				$this->Session->setFlash(__('The festival has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The festival could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Festival->exists($id)) {
			throw new NotFoundException(__('Invalid festival'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Festival->save($this->request->data)) {
				$this->Session->setFlash(__('The festival has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The festival could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Festival.' . $this->Festival->primaryKey => $id));
			$this->request->data = $this->Festival->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Festival->id = $id;
		if (!$this->Festival->exists()) {
			throw new NotFoundException(__('Invalid festival'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Festival->delete()) {
			$this->Session->setFlash(__('The festival has been deleted.'));
		} else {
			$this->Session->setFlash(__('The festival could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function stage(){
		$title_for_layout = 'EVE祭ステージ一覧';
		$this->set('title_for_layout',$title_for_layout);
	}
	
	
}
