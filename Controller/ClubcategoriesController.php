<?php
App::uses('AppController', 'Controller');
/**
 * Clubcategories Controller
 *
 * @property Clubcategory $Clubcategory
 * @property PaginatorComponent $Paginator
 */
class ClubcategoriesController extends AppController {

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
		$this->Clubcategory->recursive = 0;
		$this->set('clubcategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Clubcategory->exists($id)) {
			throw new NotFoundException(__('Invalid clubcategory'));
		}
		$options = array('conditions' => array('Clubcategory.' . $this->Clubcategory->primaryKey => $id));
		$this->set('clubcategory', $this->Clubcategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Clubcategory->create();
			if ($this->Clubcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The clubcategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clubcategory could not be saved. Please, try again.'));
			}
		}
		$parents = $this->Clubcategory->find('list');
		$this->set(compact('parents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Clubcategory->exists($id)) {
			throw new NotFoundException(__('Invalid clubcategory'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Clubcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The clubcategory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clubcategory could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Clubcategory.' . $this->Clubcategory->primaryKey => $id));
			$this->request->data = $this->Clubcategory->find('first', $options);
		}
		$parents = $this->Clubcategory->find('list');
		$this->set(compact('parents'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Clubcategory->id = $id;
		if (!$this->Clubcategory->exists()) {
			throw new NotFoundException(__('Invalid clubcategory'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Clubcategory->delete()) {
			$this->Session->setFlash(__('The clubcategory has been deleted.'));
		} else {
			$this->Session->setFlash(__('The clubcategory could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
