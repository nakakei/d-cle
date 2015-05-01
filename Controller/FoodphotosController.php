<?php
App::uses('AppController', 'Controller');
/**
 * Foodphotos Controller
 *
 * @property Foodphoto $Foodphoto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FoodphotosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Foodphoto->recursive = 0;
		$this->set('foodphotos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Foodphoto->exists($id)) {
			throw new NotFoundException(__('Invalid foodphoto'));
		}
		$options = array('conditions' => array('Foodphoto.' . $this->Foodphoto->primaryKey => $id));
		$this->set('foodphoto', $this->Foodphoto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Foodphoto->create();
			if ($this->Foodphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The foodphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foodphoto could not be saved. Please, try again.'));
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
		if (!$this->Foodphoto->exists($id)) {
			throw new NotFoundException(__('Invalid foodphoto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Foodphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The foodphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foodphoto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Foodphoto.' . $this->Foodphoto->primaryKey => $id));
			$this->request->data = $this->Foodphoto->find('first', $options);
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
		$this->Foodphoto->id = $id;
		if (!$this->Foodphoto->exists()) {
			throw new NotFoundException(__('Invalid foodphoto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Foodphoto->delete()) {
			$this->Session->setFlash(__('The foodphoto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The foodphoto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Foodphoto->recursive = 0;
		$this->set('foodphotos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Foodphoto->exists($id)) {
			throw new NotFoundException(__('Invalid foodphoto'));
		}
		$options = array('conditions' => array('Foodphoto.' . $this->Foodphoto->primaryKey => $id));
		$this->set('foodphoto', $this->Foodphoto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Foodphoto->create();
			if ($this->Foodphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The foodphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foodphoto could not be saved. Please, try again.'));
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
		if (!$this->Foodphoto->exists($id)) {
			throw new NotFoundException(__('Invalid foodphoto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Foodphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The foodphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foodphoto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Foodphoto.' . $this->Foodphoto->primaryKey => $id));
			$this->request->data = $this->Foodphoto->find('first', $options);
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
		$this->Foodphoto->id = $id;
		if (!$this->Foodphoto->exists()) {
			throw new NotFoundException(__('Invalid foodphoto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Foodphoto->delete()) {
			$this->Session->setFlash(__('The foodphoto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The foodphoto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
