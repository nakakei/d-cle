<?php
App::uses('AppController', 'Controller');
/**
 * ShopsShopplaces Controller
 *
 * @property ShopsShopplace $ShopsShopplace
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ShopsShopplacesController extends AppController {

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
		$this->ShopsShopplace->recursive = 0;
		$this->set('shopsShopplaces', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ShopsShopplace->exists($id)) {
			throw new NotFoundException(__('Invalid shops shopplace'));
		}
		$options = array('conditions' => array('ShopsShopplace.' . $this->ShopsShopplace->primaryKey => $id));
		$this->set('shopsShopplace', $this->ShopsShopplace->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ShopsShopplace->create();
			if ($this->ShopsShopplace->save($this->request->data)) {
				$this->Session->setFlash(__('The shops shopplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shops shopplace could not be saved. Please, try again.'));
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
		if (!$this->ShopsShopplace->exists($id)) {
			throw new NotFoundException(__('Invalid shops shopplace'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ShopsShopplace->save($this->request->data)) {
				$this->Session->setFlash(__('The shops shopplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shops shopplace could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ShopsShopplace.' . $this->ShopsShopplace->primaryKey => $id));
			$this->request->data = $this->ShopsShopplace->find('first', $options);
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
		$this->ShopsShopplace->id = $id;
		if (!$this->ShopsShopplace->exists()) {
			throw new NotFoundException(__('Invalid shops shopplace'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ShopsShopplace->delete()) {
			$this->Session->setFlash(__('The shops shopplace has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shops shopplace could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ShopsShopplace->recursive = 0;
		$this->set('shopsShopplaces', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ShopsShopplace->exists($id)) {
			throw new NotFoundException(__('Invalid shops shopplace'));
		}
		$options = array('conditions' => array('ShopsShopplace.' . $this->ShopsShopplace->primaryKey => $id));
		$this->set('shopsShopplace', $this->ShopsShopplace->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ShopsShopplace->create();
			if ($this->ShopsShopplace->save($this->request->data)) {
				$this->Session->setFlash(__('The shops shopplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shops shopplace could not be saved. Please, try again.'));
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
		if (!$this->ShopsShopplace->exists($id)) {
			throw new NotFoundException(__('Invalid shops shopplace'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ShopsShopplace->save($this->request->data)) {
				$this->Session->setFlash(__('The shops shopplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shops shopplace could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ShopsShopplace.' . $this->ShopsShopplace->primaryKey => $id));
			$this->request->data = $this->ShopsShopplace->find('first', $options);
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
		$this->ShopsShopplace->id = $id;
		if (!$this->ShopsShopplace->exists()) {
			throw new NotFoundException(__('Invalid shops shopplace'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ShopsShopplace->delete()) {
			$this->Session->setFlash(__('The shops shopplace has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shops shopplace could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
