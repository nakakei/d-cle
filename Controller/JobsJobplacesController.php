<?php
App::uses('AppController', 'Controller');
/**
 * JobsJobplaces Controller
 *
 * @property JobsJobplace $JobsJobplace
 * @property PaginatorComponent $Paginator
 */
class JobsJobplacesController extends AppController {

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
		$this->JobsJobplace->recursive = 0;
		$this->set('jobsJobplaces', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->JobsJobplace->exists($id)) {
			throw new NotFoundException(__('Invalid jobs jobplace'));
		}
		$options = array('conditions' => array('JobsJobplace.' . $this->JobsJobplace->primaryKey => $id));
		$this->set('jobsJobplace', $this->JobsJobplace->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JobsJobplace->create();
			if ($this->JobsJobplace->save($this->request->data)) {
				$this->Session->setFlash(__('The jobs jobplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobs jobplace could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->JobsJobplace->Job->find('list');
		$jobplaces = $this->JobsJobplace->Jobplace->find('list');
		$this->set(compact('jobs', 'jobplaces'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->JobsJobplace->exists($id)) {
			throw new NotFoundException(__('Invalid jobs jobplace'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->JobsJobplace->save($this->request->data)) {
				$this->Session->setFlash(__('The jobs jobplace has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobs jobplace could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JobsJobplace.' . $this->JobsJobplace->primaryKey => $id));
			$this->request->data = $this->JobsJobplace->find('first', $options);
		}
		$jobs = $this->JobsJobplace->Job->find('list');
		$jobplaces = $this->JobsJobplace->Jobplace->find('list');
		$this->set(compact('jobs', 'jobplaces'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->JobsJobplace->id = $id;
		if (!$this->JobsJobplace->exists()) {
			throw new NotFoundException(__('Invalid jobs jobplace'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->JobsJobplace->delete()) {
			$this->Session->setFlash(__('The jobs jobplace has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobs jobplace could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
