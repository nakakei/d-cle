<?php
App::uses('AppController', 'Controller');
/**
 * FoodsFoodtags Controller
 *
 * @property FoodsFoodtag $FoodsFoodtag
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FoodsFoodtagsController extends AppController {

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
		$this->FoodsFoodtag->recursive = 0;
		$this->set('foodsFoodtags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FoodsFoodtag->exists($id)) {
			throw new NotFoundException(__('Invalid foods foodtag'));
		}
		$options = array('conditions' => array('FoodsFoodtag.' . $this->FoodsFoodtag->primaryKey => $id));
		$this->set('foodsFoodtag', $this->FoodsFoodtag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FoodsFoodtag->create();
			if ($this->FoodsFoodtag->save($this->request->data)) {
				$this->Session->setFlash(__('The foods foodtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foods foodtag could not be saved. Please, try again.'));
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
		if (!$this->FoodsFoodtag->exists($id)) {
			throw new NotFoundException(__('Invalid foods foodtag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FoodsFoodtag->save($this->request->data)) {
				$this->Session->setFlash(__('The foods foodtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foods foodtag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FoodsFoodtag.' . $this->FoodsFoodtag->primaryKey => $id));
			$this->request->data = $this->FoodsFoodtag->find('first', $options);
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
		$this->FoodsFoodtag->id = $id;
		if (!$this->FoodsFoodtag->exists()) {
			throw new NotFoundException(__('Invalid foods foodtag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FoodsFoodtag->delete()) {
			$this->Session->setFlash(__('The foods foodtag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The foods foodtag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->FoodsFoodtag->recursive = 0;
		$this->set('foodsFoodtags', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->FoodsFoodtag->exists($id)) {
			throw new NotFoundException(__('Invalid foods foodtag'));
		}
		$options = array('conditions' => array('FoodsFoodtag.' . $this->FoodsFoodtag->primaryKey => $id));
		$this->set('foodsFoodtag', $this->FoodsFoodtag->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->FoodsFoodtag->create();
			if ($this->FoodsFoodtag->save($this->request->data)) {
				$this->Session->setFlash(__('The foods foodtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foods foodtag could not be saved. Please, try again.'));
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
		if (!$this->FoodsFoodtag->exists($id)) {
			throw new NotFoundException(__('Invalid foods foodtag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FoodsFoodtag->save($this->request->data)) {
				$this->Session->setFlash(__('The foods foodtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foods foodtag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FoodsFoodtag.' . $this->FoodsFoodtag->primaryKey => $id));
			$this->request->data = $this->FoodsFoodtag->find('first', $options);
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
		$this->FoodsFoodtag->id = $id;
		if (!$this->FoodsFoodtag->exists()) {
			throw new NotFoundException(__('Invalid foods foodtag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FoodsFoodtag->delete()) {
			$this->Session->setFlash(__('The foods foodtag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The foods foodtag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
