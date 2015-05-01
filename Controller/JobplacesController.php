<?php
App::uses('AppController', 'Controller');
/**
 * Jobplaces Controller
 *
 * @property Jobplace $Jobplace
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class JobplacesController extends AppController {

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
		$this->Jobplace->recursive = 0;
		$this->set('jobplaces', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Jobplace->exists($id)) {
			throw new NotFoundException(__('Invalid jobplace'));
		}
		$options = array('conditions' => array('Jobplace.' . $this->Jobplace->primaryKey => $id));
		$this->set('jobplace', $this->Jobplace->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Jobplace->create();
			if ($this->Jobplace->save($this->request->data)) {
				$this->Session->setFlash(__('The jobplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobplace could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->Jobplace->Job->find('list');
		$this->set(compact('jobs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Jobplace->exists($id)) {
			throw new NotFoundException(__('Invalid jobplace'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jobplace->save($this->request->data)) {
				$this->Session->setFlash(__('The jobplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobplace could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobplace.' . $this->Jobplace->primaryKey => $id));
			$this->request->data = $this->Jobplace->find('first', $options);
		}
		$jobs = $this->Jobplace->Job->find('list');
		$this->set(compact('jobs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Jobplace->id = $id;
		if (!$this->Jobplace->exists()) {
			throw new NotFoundException(__('Invalid jobplace'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobplace->delete()) {
			$this->Session->setFlash(__('The jobplace has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobplace could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Jobplace->recursive = 0;
		$this->set('jobplaces', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Jobplace->exists($id)) {
			throw new NotFoundException(__('Invalid jobplace'));
		}
		$options = array('conditions' => array('Jobplace.' . $this->Jobplace->primaryKey => $id));
		$this->set('jobplace', $this->Jobplace->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Jobplace->create();
			if ($this->Jobplace->save($this->request->data)) {
				$this->Session->setFlash(__('The jobplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobplace could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->Jobplace->Job->find('list');
		$this->set(compact('jobs'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Jobplace->exists($id)) {
			throw new NotFoundException(__('Invalid jobplace'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jobplace->save($this->request->data)) {
				$this->Session->setFlash(__('The jobplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobplace could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobplace.' . $this->Jobplace->primaryKey => $id));
			$this->request->data = $this->Jobplace->find('first', $options);
		}
		$jobs = $this->Jobplace->Job->find('list');
		$this->set(compact('jobs'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Jobplace->id = $id;
		if (!$this->Jobplace->exists()) {
			throw new NotFoundException(__('Invalid jobplace'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobplace->delete()) {
			$this->Session->setFlash(__('The jobplace has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobplace could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
