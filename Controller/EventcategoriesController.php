<?php
App::uses('AppController', 'Controller');
/**
 * Eventcategories Controller
 *
 * @property Eventcategory $Eventcategory
 * @property PaginatorComponent $Paginator
 */
class EventcategoriesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Auth');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Eventcategory->recursive = 0;
		$this->set('eventcategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Eventcategory->exists($id)) {
			throw new NotFoundException(__('Invalid eventcategory'));
		}
		$options = array('conditions' => array('Eventcategory.' . $this->Eventcategory->primaryKey => $id));
		$this->set('eventcategory', $this->Eventcategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Eventcategory->create();
			if ($this->Eventcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The eventcategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventcategory could not be saved. Please, try again.'));
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
		if (!$this->Eventcategory->exists($id)) {
			throw new NotFoundException(__('Invalid eventcategory'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Eventcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The eventcategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventcategory could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Eventcategory.' . $this->Eventcategory->primaryKey => $id));
			$this->request->data = $this->Eventcategory->find('first', $options);
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
		$this->Eventcategory->id = $id;
		if (!$this->Eventcategory->exists()) {
			throw new NotFoundException(__('Invalid eventcategory'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Eventcategory->delete()) {
			$this->Session->setFlash(__('The eventcategory has been deleted.'));
		} else {
			$this->Session->setFlash(__('The eventcategory could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Eventcategory->recursive = 0;
		$this->set('eventcategories', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Eventcategory->exists($id)) {
			throw new NotFoundException(__('Invalid eventcategory'));
		}
		$options = array('conditions' => array('Eventcategory.' . $this->Eventcategory->primaryKey => $id));
		$this->set('eventcategory', $this->Eventcategory->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Eventcategory->create();
			if ($this->Eventcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The eventcategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventcategory could not be saved. Please, try again.'));
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
		if (!$this->Eventcategory->exists($id)) {
			throw new NotFoundException(__('Invalid eventcategory'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Eventcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The eventcategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventcategory could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Eventcategory.' . $this->Eventcategory->primaryKey => $id));
			$this->request->data = $this->Eventcategory->find('first', $options);
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
		$this->Eventcategory->id = $id;
		if (!$this->Eventcategory->exists()) {
			throw new NotFoundException(__('Invalid eventcategory'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Eventcategory->delete()) {
			$this->Session->setFlash(__('The eventcategory has been deleted.'));
		} else {
			$this->Session->setFlash(__('The eventcategory could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
