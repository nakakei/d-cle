<?php
App::uses('AppController', 'Controller');
/**
 * Shopplaces Controller
 *
 * @property Shopplace $Shopplace
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ShopplacesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session','Auth');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Shopplace->recursive = 0;
		$this->set('shopplaces', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Shopplace->exists($id)) {
			throw new NotFoundException(__('Invalid shopplace'));
		}
		$options = array('conditions' => array('Shopplace.' . $this->Shopplace->primaryKey => $id));
		$this->set('shopplace', $this->Shopplace->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Shopplace->create();
			if ($this->Shopplace->save($this->request->data)) {
				$this->Session->setFlash(__('The shopplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shopplace could not be saved. Please, try again.'));
			}
		}
		$shops = $this->Shopplace->Shop->find('list');
		$this->set(compact('shops'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Shopplace->exists($id)) {
			throw new NotFoundException(__('Invalid shopplace'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Shopplace->save($this->request->data)) {
				$this->Session->setFlash(__('The shopplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shopplace could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shopplace.' . $this->Shopplace->primaryKey => $id));
			$this->request->data = $this->Shopplace->find('first', $options);
		}
		$shops = $this->Shopplace->Shop->find('list');
		$this->set(compact('shops'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Shopplace->id = $id;
		if (!$this->Shopplace->exists()) {
			throw new NotFoundException(__('Invalid shopplace'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Shopplace->delete()) {
			$this->Session->setFlash(__('The shopplace has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shopplace could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Shopplace->recursive = 0;
		$this->set('shopplaces', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Shopplace->exists($id)) {
			throw new NotFoundException(__('Invalid shopplace'));
		}
		$options = array('conditions' => array('Shopplace.' . $this->Shopplace->primaryKey => $id));
		$this->set('shopplace', $this->Shopplace->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Shopplace->create();
			if ($this->Shopplace->save($this->request->data)) {
				$this->Session->setFlash(__('The shopplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shopplace could not be saved. Please, try again.'));
			}
		}
		$shops = $this->Shopplace->Shop->find('list');
		$this->set(compact('shops'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Shopplace->exists($id)) {
			throw new NotFoundException(__('Invalid shopplace'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Shopplace->save($this->request->data)) {
				$this->Session->setFlash(__('The shopplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shopplace could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shopplace.' . $this->Shopplace->primaryKey => $id));
			$this->request->data = $this->Shopplace->find('first', $options);
		}
		$shops = $this->Shopplace->Shop->find('list');
		$this->set(compact('shops'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Shopplace->id = $id;
		if (!$this->Shopplace->exists()) {
			throw new NotFoundException(__('Invalid shopplace'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Shopplace->delete()) {
			$this->Session->setFlash(__('The shopplace has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shopplace could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
