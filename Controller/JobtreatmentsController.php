<?php
App::uses('AppController', 'Controller');
/**
 * Jobtreatments Controller
 *
 * @property Jobtreatment $Jobtreatment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class JobtreatmentsController extends AppController {

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
		$this->Jobtreatment->recursive = 0;
		$this->set('jobtreatments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Jobtreatment->exists($id)) {
			throw new NotFoundException(__('Invalid jobtreatment'));
		}
		$options = array('conditions' => array('Jobtreatment.' . $this->Jobtreatment->primaryKey => $id));
		$this->set('jobtreatment', $this->Jobtreatment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Jobtreatment->create();
			if ($this->Jobtreatment->save($this->request->data)) {
				$this->Session->setFlash(__('The jobtreatment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobtreatment could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->Jobtreatment->Job->find('list');
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
		if (!$this->Jobtreatment->exists($id)) {
			throw new NotFoundException(__('Invalid jobtreatment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jobtreatment->save($this->request->data)) {
				$this->Session->setFlash(__('The jobtreatment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobtreatment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobtreatment.' . $this->Jobtreatment->primaryKey => $id));
			$this->request->data = $this->Jobtreatment->find('first', $options);
		}
		$jobs = $this->Jobtreatment->Job->find('list');
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
		$this->Jobtreatment->id = $id;
		if (!$this->Jobtreatment->exists()) {
			throw new NotFoundException(__('Invalid jobtreatment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobtreatment->delete()) {
			$this->Session->setFlash(__('The jobtreatment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobtreatment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Jobtreatment->recursive = 0;
		$this->set('jobtreatments', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Jobtreatment->exists($id)) {
			throw new NotFoundException(__('Invalid jobtreatment'));
		}
		$options = array('conditions' => array('Jobtreatment.' . $this->Jobtreatment->primaryKey => $id));
		$this->set('jobtreatment', $this->Jobtreatment->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Jobtreatment->create();
			if ($this->Jobtreatment->save($this->request->data)) {
				$this->Session->setFlash(__('The jobtreatment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobtreatment could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->Jobtreatment->Job->find('list');
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
		if (!$this->Jobtreatment->exists($id)) {
			throw new NotFoundException(__('Invalid jobtreatment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jobtreatment->save($this->request->data)) {
				$this->Session->setFlash(__('The jobtreatment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobtreatment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobtreatment.' . $this->Jobtreatment->primaryKey => $id));
			$this->request->data = $this->Jobtreatment->find('first', $options);
		}
		$jobs = $this->Jobtreatment->Job->find('list');
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
		$this->Jobtreatment->id = $id;
		if (!$this->Jobtreatment->exists()) {
			throw new NotFoundException(__('Invalid jobtreatment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobtreatment->delete()) {
			$this->Session->setFlash(__('The jobtreatment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobtreatment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
