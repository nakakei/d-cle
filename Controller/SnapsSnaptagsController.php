<?php
App::uses('AppController', 'Controller');
/**
 * SnapsSnaptags Controller
 *
 * @property SnapsSnaptag $SnapsSnaptag
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SnapsSnaptagsController extends AppController {

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
		$this->SnapsSnaptag->recursive = 0;
		$this->set('snapsSnaptags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SnapsSnaptag->exists($id)) {
			throw new NotFoundException(__('Invalid snaps snaptag'));
		}
		$options = array('conditions' => array('SnapsSnaptag.' . $this->SnapsSnaptag->primaryKey => $id));
		$this->set('snapsSnaptag', $this->SnapsSnaptag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SnapsSnaptag->create();
			if ($this->SnapsSnaptag->save($this->request->data)) {
				$this->Session->setFlash(__('The snaps snaptag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snaps snaptag could not be saved. Please, try again.'));
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
		if (!$this->SnapsSnaptag->exists($id)) {
			throw new NotFoundException(__('Invalid snaps snaptag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SnapsSnaptag->save($this->request->data)) {
				$this->Session->setFlash(__('The snaps snaptag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snaps snaptag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SnapsSnaptag.' . $this->SnapsSnaptag->primaryKey => $id));
			$this->request->data = $this->SnapsSnaptag->find('first', $options);
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
		$this->SnapsSnaptag->id = $id;
		if (!$this->SnapsSnaptag->exists()) {
			throw new NotFoundException(__('Invalid snaps snaptag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SnapsSnaptag->delete()) {
			$this->Session->setFlash(__('The snaps snaptag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The snaps snaptag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->SnapsSnaptag->recursive = 0;
		$this->set('snapsSnaptags', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->SnapsSnaptag->exists($id)) {
			throw new NotFoundException(__('Invalid snaps snaptag'));
		}
		$options = array('conditions' => array('SnapsSnaptag.' . $this->SnapsSnaptag->primaryKey => $id));
		$this->set('snapsSnaptag', $this->SnapsSnaptag->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->SnapsSnaptag->create();
			if ($this->SnapsSnaptag->save($this->request->data)) {
				$this->Session->setFlash(__('The snaps snaptag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snaps snaptag could not be saved. Please, try again.'));
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
		if (!$this->SnapsSnaptag->exists($id)) {
			throw new NotFoundException(__('Invalid snaps snaptag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SnapsSnaptag->save($this->request->data)) {
				$this->Session->setFlash(__('The snaps snaptag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snaps snaptag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SnapsSnaptag.' . $this->SnapsSnaptag->primaryKey => $id));
			$this->request->data = $this->SnapsSnaptag->find('first', $options);
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
		$this->SnapsSnaptag->id = $id;
		if (!$this->SnapsSnaptag->exists()) {
			throw new NotFoundException(__('Invalid snaps snaptag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SnapsSnaptag->delete()) {
			$this->Session->setFlash(__('The snaps snaptag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The snaps snaptag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
