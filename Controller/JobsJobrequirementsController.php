<?php
App::uses('AppController', 'Controller');
/**
 * JobsJobrequirements Controller
 *
 * @property JobsJobrequirement $JobsJobrequirement
 * @property PaginatorComponent $Paginator
 */
class JobsJobrequirementsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->JobsJobrequirement->recursive = 0;
		$this->set('jobsJobrequirements', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->JobsJobrequirement->exists($id)) {
			throw new NotFoundException(__('Invalid jobs jobrequirement'));
		}
		$options = array('conditions' => array('JobsJobrequirement.' . $this->JobsJobrequirement->primaryKey => $id));
		$this->set('jobsJobrequirement', $this->JobsJobrequirement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JobsJobrequirement->create();
			if ($this->JobsJobrequirement->save($this->request->data)) {
				$this->Session->setFlash(__('The jobs jobrequirement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobs jobrequirement could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->JobsJobrequirement->Job->find('list');
		$jobrequirements = $this->JobsJobrequirement->Jobrequirement->find('list');
		$this->set(compact('jobs', 'jobrequirements'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->JobsJobrequirement->exists($id)) {
			throw new NotFoundException(__('Invalid jobs jobrequirement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->JobsJobrequirement->save($this->request->data)) {
				$this->Session->setFlash(__('The jobs jobrequirement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobs jobrequirement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JobsJobrequirement.' . $this->JobsJobrequirement->primaryKey => $id));
			$this->request->data = $this->JobsJobrequirement->find('first', $options);
		}
		$jobs = $this->JobsJobrequirement->Job->find('list');
		$jobrequirements = $this->JobsJobrequirement->Jobrequirement->find('list');
		$this->set(compact('jobs', 'jobrequirements'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->JobsJobrequirement->id = $id;
		if (!$this->JobsJobrequirement->exists()) {
			throw new NotFoundException(__('Invalid jobs jobrequirement'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->JobsJobrequirement->delete()) {
			$this->Session->setFlash(__('The jobs jobrequirement has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobs jobrequirement could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
