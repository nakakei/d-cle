<?php
App::uses('AppController', 'Controller');
/**
 * Shopphotos Controller
 *
 * @property Shopphoto $Shopphoto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ShopphotosController extends AppController {

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
		$this->Shopphoto->recursive = 0;
		$this->set('shopphotos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Shopphoto->exists($id)) {
			throw new NotFoundException(__('Invalid shopphoto'));
		}
		$options = array('conditions' => array('Shopphoto.' . $this->Shopphoto->primaryKey => $id));
		$this->set('shopphoto', $this->Shopphoto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Shopphoto->create();
			if ($this->Shopphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The shopphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shopphoto could not be saved. Please, try again.'));
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
		if (!$this->Shopphoto->exists($id)) {
			throw new NotFoundException(__('Invalid shopphoto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Shopphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The shopphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shopphoto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shopphoto.' . $this->Shopphoto->primaryKey => $id));
			$this->request->data = $this->Shopphoto->find('first', $options);
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
		$this->Shopphoto->id = $id;
		if (!$this->Shopphoto->exists()) {
			throw new NotFoundException(__('Invalid shopphoto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Shopphoto->delete()) {
			$this->Session->setFlash(__('The shopphoto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shopphoto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Shopphoto->recursive = 0;
		$this->set('shopphotos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Shopphoto->exists($id)) {
			throw new NotFoundException(__('Invalid shopphoto'));
		}
		$options = array('conditions' => array('Shopphoto.' . $this->Shopphoto->primaryKey => $id));
		$this->set('shopphoto', $this->Shopphoto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add($id = null) {
		if ($this->request->is('post')) {
			$this->Shopphoto->create();
			$data = $this->request->data;
			$data['Shopphoto']['foreign_key'] = $id;
			$data['Shopphoto']['model'] = 'shop';
			if ($this->Shopphoto->saveAll($data)) {
				$this->Session->setFlash(__('The shopphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shopphoto could not be saved. Please, try again.'));
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
		if (!$this->Shopphoto->exists($id)) {
			throw new NotFoundException(__('Invalid shopphoto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Shopphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The shopphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shopphoto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shopphoto.' . $this->Shopphoto->primaryKey => $id));
			$this->request->data = $this->Shopphoto->find('first', $options);
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
		$this->Shopphoto->id = $id;
		if (!$this->Shopphoto->exists()) {
			throw new NotFoundException(__('Invalid shopphoto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Shopphoto->delete()) {
			$this->Session->setFlash(__('The shopphoto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shopphoto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
