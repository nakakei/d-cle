<?php
App::uses('AppController', 'Controller');
/**
 * Jobphotos Controller
 *
 * @property Jobphoto $Jobphoto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class JobphotosController extends AppController {

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
		$this->Jobphoto->recursive = 0;
		$this->set('jobphotos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Jobphoto->exists($id)) {
			throw new NotFoundException(__('Invalid jobphoto'));
		}
		$options = array('conditions' => array('Jobphoto.' . $this->Jobphoto->primaryKey => $id));
		$this->set('jobphoto', $this->Jobphoto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Jobphoto->create();
			if ($this->Jobphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The jobphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobphoto could not be saved. Please, try again.'));
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
		if (!$this->Jobphoto->exists($id)) {
			throw new NotFoundException(__('Invalid jobphoto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jobphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The jobphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobphoto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobphoto.' . $this->Jobphoto->primaryKey => $id));
			$this->request->data = $this->Jobphoto->find('first', $options);
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
		$this->Jobphoto->id = $id;
		if (!$this->Jobphoto->exists()) {
			throw new NotFoundException(__('Invalid jobphoto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobphoto->delete()) {
			$this->Session->setFlash(__('The jobphoto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobphoto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Jobphoto->recursive = 0;
		$this->set('jobphotos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Jobphoto->exists($id)) {
			throw new NotFoundException(__('Invalid jobphoto'));
		}
		$options = array('conditions' => array('Jobphoto.' . $this->Jobphoto->primaryKey => $id));
		$this->set('jobphoto', $this->Jobphoto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add($id =null) {
		if ($this->request->is('post')) {
			$this->Jobphoto->create();
			$data = $this->request->data;
			$data['Jobphoto']['foreign_key'] = $id;
			$data['Jobphoto']['model'] = 'job';
			if ($this->Jobphoto->saveAll($data)) {
				$this->Session->setFlash(__('The jobphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobphoto could not be saved. Please, try again.'));
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
		if (!$this->Jobphoto->exists($id)) {
			throw new NotFoundException(__('Invalid jobphoto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data = $this->request->data;
			$data['Jobphoto']['id'] = $id;
			$data['Jobphoto']['model'] = 'job';
			if ($this->Jobphoto->saveAll($data)) {
				$this->Session->setFlash(__('The jobphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobphoto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobphoto.' . $this->Jobphoto->primaryKey => $id));
			$this->request->data = $this->Jobphoto->find('first', $options);
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
		$this->Jobphoto->id = $id;
		if (!$this->Jobphoto->exists()) {
			throw new NotFoundException(__('Invalid jobphoto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jobphoto->delete()) {
			$this->Session->setFlash(__('The jobphoto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobphoto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
