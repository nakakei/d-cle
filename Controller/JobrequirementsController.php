<?php
App::uses('AppController', 'Controller');
/**
 * Jobrequirements Controller
 *
 * @property Jobrequirement $Jobrequirement
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class JobrequirementsController extends AppController {

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
		$this->Jobrequirement->recursive = 0;
		$this->set('jobrequirements', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Jobrequirement->exists($id)) {
			throw new NotFoundException(__('Invalid jobrequirement'));
		}
		$options = array('conditions' => array('Jobrequirement.' . $this->Jobrequirement->primaryKey => $id));
		$this->set('jobrequirement', $this->Jobrequirement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Jobrequirement->create();
			if ($this->Jobrequirement->save($this->request->data)) {
				$this->Session->setFlash(__('The jobrequirement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobrequirement could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->Jobrequirement->Job->find('list');
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
		if (!$this->Jobrequirement->exists($id)) {
			throw new NotFoundException(__('Invalid jobrequirement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jobrequirement->save($this->request->data)) {
				$this->Session->setFlash(__('The jobrequirement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobrequirement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobrequirement.' . $this->Jobrequirement->primaryKey => $id));
			$this->request->data = $this->Jobrequirement->find('first', $options);
		}
		$jobs = $this->Jobrequirement->Job->find('list');
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
		$this->Jobrequirement->id = $id;
		if (!$this->Jobrequirement->exists()) {
			throw new NotFoundException(__('Invalid jobrequirement'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobrequirement->delete()) {
			$this->Session->setFlash(__('The jobrequirement has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobrequirement could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Jobrequirement->recursive = 0;
		$this->set('jobrequirements', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Jobrequirement->exists($id)) {
			throw new NotFoundException(__('Invalid jobrequirement'));
		}
		$options = array('conditions' => array('Jobrequirement.' . $this->Jobrequirement->primaryKey => $id));
		$this->set('jobrequirement', $this->Jobrequirement->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Jobrequirement->create();
			if ($this->Jobrequirement->save($this->request->data)) {
				$this->Session->setFlash(__('The jobrequirement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobrequirement could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->Jobrequirement->Job->find('list');
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
		if (!$this->Jobrequirement->exists($id)) {
			throw new NotFoundException(__('Invalid jobrequirement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jobrequirement->save($this->request->data)) {
				$this->Session->setFlash(__('The jobrequirement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobrequirement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobrequirement.' . $this->Jobrequirement->primaryKey => $id));
			$this->request->data = $this->Jobrequirement->find('first', $options);
		}
		$jobs = $this->Jobrequirement->Job->find('list');
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
		$this->Jobrequirement->id = $id;
		if (!$this->Jobrequirement->exists()) {
			throw new NotFoundException(__('Invalid jobrequirement'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobrequirement->delete()) {
			$this->Session->setFlash(__('The jobrequirement has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobrequirement could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
