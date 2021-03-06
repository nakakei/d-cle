<?php
App::uses('AppController', 'Controller');
/**
 * Memberphotos Controller
 *
 * @property Memberphoto $Memberphoto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MemberphotosController extends AppController {

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
		$this->Memberphoto->recursive = 0;
		$this->set('memberphotos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Memberphoto->exists($id)) {
			throw new NotFoundException(__('Invalid memberphoto'));
		}
		$options = array('conditions' => array('Memberphoto.' . $this->Memberphoto->primaryKey => $id));
		$this->set('memberphoto', $this->Memberphoto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Memberphoto->create();
			if ($this->Memberphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The memberphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The memberphoto could not be saved. Please, try again.'));
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
		if (!$this->Memberphoto->exists($id)) {
			throw new NotFoundException(__('Invalid memberphoto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Memberphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The memberphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The memberphoto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Memberphoto.' . $this->Memberphoto->primaryKey => $id));
			$this->request->data = $this->Memberphoto->find('first', $options);
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
		$this->Memberphoto->id = $id;
		if (!$this->Memberphoto->exists()) {
			throw new NotFoundException(__('Invalid memberphoto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Memberphoto->delete()) {
			$this->Session->setFlash(__('The memberphoto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The memberphoto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Memberphoto->recursive = 0;
		$this->set('memberphotos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Memberphoto->exists($id)) {
			throw new NotFoundException(__('Invalid memberphoto'));
		}
		$options = array('conditions' => array('Memberphoto.' . $this->Memberphoto->primaryKey => $id));
		$this->set('memberphoto', $this->Memberphoto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Memberphoto->create();
			if ($this->Memberphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The memberphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The memberphoto could not be saved. Please, try again.'));
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
		if (!$this->Memberphoto->exists($id)) {
			throw new NotFoundException(__('Invalid memberphoto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Memberphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The memberphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The memberphoto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Memberphoto.' . $this->Memberphoto->primaryKey => $id));
			$this->request->data = $this->Memberphoto->find('first', $options);
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
		$this->Memberphoto->id = $id;
		if (!$this->Memberphoto->exists()) {
			throw new NotFoundException(__('Invalid memberphoto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Memberphoto->delete()) {
			$this->Session->setFlash(__('The memberphoto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The memberphoto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
