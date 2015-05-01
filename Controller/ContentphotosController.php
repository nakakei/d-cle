<?php
App::uses('AppController', 'Controller');
/**
 * Contentphotos Controller
 *
 * @property Contentphoto $Contentphoto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ContentphotosController extends AppController {

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
		$this->Contentphoto->recursive = 0;
		$this->set('contentphotos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Contentphoto->exists($id)) {
			throw new NotFoundException(__('Invalid contentphoto'));
		}
		$options = array('conditions' => array('Contentphoto.' . $this->Contentphoto->primaryKey => $id));
		$this->set('contentphoto', $this->Contentphoto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contentphoto->create();
			if ($this->Contentphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The contentphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contentphoto could not be saved. Please, try again.'));
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
		if (!$this->Contentphoto->exists($id)) {
			throw new NotFoundException(__('Invalid contentphoto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contentphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The contentphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contentphoto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contentphoto.' . $this->Contentphoto->primaryKey => $id));
			$this->request->data = $this->Contentphoto->find('first', $options);
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
		$this->Contentphoto->id = $id;
		if (!$this->Contentphoto->exists()) {
			throw new NotFoundException(__('Invalid contentphoto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Contentphoto->delete()) {
			$this->Session->setFlash(__('The contentphoto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The contentphoto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Contentphoto->recursive = 0;
		$this->set('contentphotos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Contentphoto->exists($id)) {
			throw new NotFoundException(__('Invalid contentphoto'));
		}
		$options = array('conditions' => array('Contentphoto.' . $this->Contentphoto->primaryKey => $id));
		$this->set('contentphoto', $this->Contentphoto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Contentphoto->create();
			if ($this->Contentphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The contentphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contentphoto could not be saved. Please, try again.'));
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
		if (!$this->Contentphoto->exists($id)) {
			throw new NotFoundException(__('Invalid contentphoto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contentphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The contentphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contentphoto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contentphoto.' . $this->Contentphoto->primaryKey => $id));
			$this->request->data = $this->Contentphoto->find('first', $options);
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
		$this->Contentphoto->id = $id;
		if (!$this->Contentphoto->exists()) {
			throw new NotFoundException(__('Invalid contentphoto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Contentphoto->delete()) {
			$this->Session->setFlash(__('The contentphoto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The contentphoto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
