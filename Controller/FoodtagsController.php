<?php
App::uses('AppController', 'Controller');
/**
 * Foodtags Controller
 *
 * @property Foodtag $Foodtag
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FoodtagsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	
	//認証の設定
	public function beforeFilter(){
		$this->Auth->allow('view');
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
		$this->Foodtag->recursive = 1;
		$this->set('foodtags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Foodtag->recursive = 2;
		if (!$this->Foodtag->exists($id)) {
			throw new NotFoundException(__('Invalid foodtag'));
		}
		$options = array('conditions' => array('Foodtag.' . $this->Foodtag->primaryKey => $id));
		$this->set('foodtag', $this->Foodtag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Foodtag->create();
			if ($this->Foodtag->save($this->request->data)) {
				$this->Session->setFlash(__('The foodtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foodtag could not be saved. Please, try again.'));
			}
		}
		$foods = $this->Foodtag->Food->find('list');
		$this->set(compact('foods'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Foodtag->exists($id)) {
			throw new NotFoundException(__('Invalid foodtag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Foodtag->save($this->request->data)) {
				$this->Session->setFlash(__('The foodtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foodtag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Foodtag.' . $this->Foodtag->primaryKey => $id));
			$this->request->data = $this->Foodtag->find('first', $options);
		}
		$foods = $this->Foodtag->Food->find('list');
		$this->set(compact('foods'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Foodtag->id = $id;
		if (!$this->Foodtag->exists()) {
			throw new NotFoundException(__('Invalid foodtag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Foodtag->delete()) {
			$this->Session->setFlash(__('The foodtag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The foodtag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Foodtag->recursive = 0;
		$this->set('foodtags', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Foodtag->exists($id)) {
			throw new NotFoundException(__('Invalid foodtag'));
		}
		$options = array('conditions' => array('Foodtag.' . $this->Foodtag->primaryKey => $id));
		$this->set('foodtag', $this->Foodtag->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Foodtag->create();
			if ($this->Foodtag->save($this->request->data)) {
				$this->Session->setFlash(__('The foodtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foodtag could not be saved. Please, try again.'));
			}
		}
		$foods = $this->Foodtag->Food->find('list');
		$this->set(compact('foods'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Foodtag->exists($id)) {
			throw new NotFoundException(__('Invalid foodtag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Foodtag->save($this->request->data)) {
				$this->Session->setFlash(__('The foodtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foodtag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Foodtag.' . $this->Foodtag->primaryKey => $id));
			$this->request->data = $this->Foodtag->find('first', $options);
		}
		$foods = $this->Foodtag->Food->find('list');
		$this->set(compact('foods'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Foodtag->id = $id;
		if (!$this->Foodtag->exists()) {
			throw new NotFoundException(__('Invalid foodtag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Foodtag->delete()) {
			$this->Session->setFlash(__('The foodtag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The foodtag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
