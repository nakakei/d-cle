<?php
App::uses('AppController', 'Controller');
/**
 * ContentsContenttags Controller
 *
 * @property ContentsContenttag $ContentsContenttag
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ContentsContenttagsController extends AppController {

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
		$this->ContentsContenttag->recursive = 0;
		$this->set('contentsContenttags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ContentsContenttag->exists($id)) {
			throw new NotFoundException(__('Invalid contents contenttag'));
		}
		$options = array('conditions' => array('ContentsContenttag.' . $this->ContentsContenttag->primaryKey => $id));
		$this->set('contentsContenttag', $this->ContentsContenttag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContentsContenttag->create();
			if ($this->ContentsContenttag->save($this->request->data)) {
				$this->Session->setFlash(__('The contents contenttag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contents contenttag could not be saved. Please, try again.'));
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
		if (!$this->ContentsContenttag->exists($id)) {
			throw new NotFoundException(__('Invalid contents contenttag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ContentsContenttag->save($this->request->data)) {
				$this->Session->setFlash(__('The contents contenttag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contents contenttag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContentsContenttag.' . $this->ContentsContenttag->primaryKey => $id));
			$this->request->data = $this->ContentsContenttag->find('first', $options);
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
		$this->ContentsContenttag->id = $id;
		if (!$this->ContentsContenttag->exists()) {
			throw new NotFoundException(__('Invalid contents contenttag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ContentsContenttag->delete()) {
			$this->Session->setFlash(__('The contents contenttag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The contents contenttag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ContentsContenttag->recursive = 0;
		$this->set('contentsContenttags', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ContentsContenttag->exists($id)) {
			throw new NotFoundException(__('Invalid contents contenttag'));
		}
		$options = array('conditions' => array('ContentsContenttag.' . $this->ContentsContenttag->primaryKey => $id));
		$this->set('contentsContenttag', $this->ContentsContenttag->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ContentsContenttag->create();
			if ($this->ContentsContenttag->save($this->request->data)) {
				$this->Session->setFlash(__('The contents contenttag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contents contenttag could not be saved. Please, try again.'));
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
		if (!$this->ContentsContenttag->exists($id)) {
			throw new NotFoundException(__('Invalid contents contenttag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ContentsContenttag->save($this->request->data)) {
				$this->Session->setFlash(__('The contents contenttag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contents contenttag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContentsContenttag.' . $this->ContentsContenttag->primaryKey => $id));
			$this->request->data = $this->ContentsContenttag->find('first', $options);
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
		$this->ContentsContenttag->id = $id;
		if (!$this->ContentsContenttag->exists()) {
			throw new NotFoundException(__('Invalid contents contenttag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ContentsContenttag->delete()) {
			$this->Session->setFlash(__('The contents contenttag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The contents contenttag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
