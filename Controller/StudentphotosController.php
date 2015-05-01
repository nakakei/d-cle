<?php
App::uses('AppController', 'Controller');
/**
 * Studentphotos Controller
 *
 * @property Studentphoto $Studentphoto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class StudentphotosController extends AppController {

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
		$this->Studentphoto->recursive = 0;
		$this->set('studentphotos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Studentphoto->exists($id)) {
			throw new NotFoundException(__('Invalid studentphoto'));
		}
		$options = array('conditions' => array('Studentphoto.' . $this->Studentphoto->primaryKey => $id));
		$this->set('studentphoto', $this->Studentphoto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Studentphoto->create();
			if ($this->Studentphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The studentphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentphoto could not be saved. Please, try again.'));
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
		if (!$this->Studentphoto->exists($id)) {
			throw new NotFoundException(__('Invalid studentphoto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Studentphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The studentphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentphoto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Studentphoto.' . $this->Studentphoto->primaryKey => $id));
			$this->request->data = $this->Studentphoto->find('first', $options);
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
		$this->Studentphoto->id = $id;
		if (!$this->Studentphoto->exists()) {
			throw new NotFoundException(__('Invalid studentphoto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Studentphoto->delete()) {
			$this->Session->setFlash(__('The studentphoto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The studentphoto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Studentphoto->recursive = 0;
		$this->set('studentphotos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Studentphoto->exists($id)) {
			throw new NotFoundException(__('Invalid studentphoto'));
		}
		$options = array('conditions' => array('Studentphoto.' . $this->Studentphoto->primaryKey => $id));
		$this->set('studentphoto', $this->Studentphoto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Studentphoto->create();
			if ($this->Studentphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The studentphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentphoto could not be saved. Please, try again.'));
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
		if (!$this->Studentphoto->exists($id)) {
			throw new NotFoundException(__('Invalid studentphoto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Studentphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The studentphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentphoto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Studentphoto.' . $this->Studentphoto->primaryKey => $id));
			$this->request->data = $this->Studentphoto->find('first', $options);
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
		$this->Studentphoto->id = $id;
		if (!$this->Studentphoto->exists()) {
			throw new NotFoundException(__('Invalid studentphoto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Studentphoto->delete()) {
			$this->Session->setFlash(__('The studentphoto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The studentphoto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
