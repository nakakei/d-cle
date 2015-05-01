<?php
App::uses('AppController', 'Controller');
/**
 * Foodplaces Controller
 *
 * @property Foodplace $Foodplace
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FoodplacesController extends AppController {

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
		$img = 'd-cle.com/app/webroot/img/food.jpg';
		$this->set('img',$img);
		$description = '同志社周辺の店舗を食べ歩いてます。週1回ごとに更新！！';
		$this->set('description',$description);
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Foodplace->recursive = 0;
		$this->set('foodplaces', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Foodplace->recursive = 2;
		if (!$this->Foodplace->exists($id)) {
			throw new NotFoundException(__('Invalid foodplace'));
		}
		$options = array('conditions' => array('Foodplace.' . $this->Foodplace->primaryKey => $id));
		$this->set('foodplace', $this->Foodplace->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Foodplace->create();
			if ($this->Foodplace->save($this->request->data)) {
				$this->Session->setFlash(__('The foodplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foodplace could not be saved. Please, try again.'));
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
		if (!$this->Foodplace->exists($id)) {
			throw new NotFoundException(__('Invalid foodplace'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Foodplace->save($this->request->data)) {
				$this->Session->setFlash(__('The foodplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foodplace could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Foodplace.' . $this->Foodplace->primaryKey => $id));
			$this->request->data = $this->Foodplace->find('first', $options);
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
		$this->Foodplace->id = $id;
		if (!$this->Foodplace->exists()) {
			throw new NotFoundException(__('Invalid foodplace'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Foodplace->delete()) {
			$this->Session->setFlash(__('The foodplace has been deleted.'));
		} else {
			$this->Session->setFlash(__('The foodplace could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Foodplace->recursive = 0;
		$this->set('foodplaces', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Foodplace->exists($id)) {
			throw new NotFoundException(__('Invalid foodplace'));
		}
		$options = array('conditions' => array('Foodplace.' . $this->Foodplace->primaryKey => $id));
		$this->set('foodplace', $this->Foodplace->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Foodplace->create();
			if ($this->Foodplace->save($this->request->data)) {
				$this->Session->setFlash(__('The foodplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foodplace could not be saved. Please, try again.'));
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
		if (!$this->Foodplace->exists($id)) {
			throw new NotFoundException(__('Invalid foodplace'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Foodplace->save($this->request->data)) {
				$this->Session->setFlash(__('The foodplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foodplace could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Foodplace.' . $this->Foodplace->primaryKey => $id));
			$this->request->data = $this->Foodplace->find('first', $options);
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
		$this->Foodplace->id = $id;
		if (!$this->Foodplace->exists()) {
			throw new NotFoundException(__('Invalid foodplace'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Foodplace->delete()) {
			$this->Session->setFlash(__('The foodplace has been deleted.'));
		} else {
			$this->Session->setFlash(__('The foodplace could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
