<?php
App::uses('AppController', 'Controller');
/**
 * JobsJobtreatments Controller
 *
 * @property JobsJobtreatment $JobsJobtreatment
 * @property PaginatorComponent $Paginator
 */
class JobsJobtreatmentsController extends AppController {

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
		$this->JobsJobtreatment->recursive = 0;
		$this->set('jobsJobtreatments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->JobsJobtreatment->exists($id)) {
			throw new NotFoundException(__('Invalid jobs jobtreatment'));
		}
		$options = array('conditions' => array('JobsJobtreatment.' . $this->JobsJobtreatment->primaryKey => $id));
		$this->set('jobsJobtreatment', $this->JobsJobtreatment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JobsJobtreatment->create();
			if ($this->JobsJobtreatment->save($this->request->data)) {
				$this->Session->setFlash(__('The jobs jobtreatment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobs jobtreatment could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->JobsJobtreatment->Job->find('list');
		$jobtreatments = $this->JobsJobtreatment->Jobtreatment->find('list');
		$this->set(compact('jobs', 'jobtreatments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->JobsJobtreatment->exists($id)) {
			throw new NotFoundException(__('Invalid jobs jobtreatment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->JobsJobtreatment->save($this->request->data)) {
				$this->Session->setFlash(__('The jobs jobtreatment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobs jobtreatment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JobsJobtreatment.' . $this->JobsJobtreatment->primaryKey => $id));
			$this->request->data = $this->JobsJobtreatment->find('first', $options);
		}
		$jobs = $this->JobsJobtreatment->Job->find('list');
		$jobtreatments = $this->JobsJobtreatment->Jobtreatment->find('list');
		$this->set(compact('jobs', 'jobtreatments'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->JobsJobtreatment->id = $id;
		if (!$this->JobsJobtreatment->exists()) {
			throw new NotFoundException(__('Invalid jobs jobtreatment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->JobsJobtreatment->delete()) {
			$this->Session->setFlash(__('The jobs jobtreatment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobs jobtreatment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
