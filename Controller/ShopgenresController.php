<?php
App::uses('AppController', 'Controller');
/**
 * Shopgenres Controller
 *
 * @property Shopgenre $Shopgenre
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ShopgenresController extends AppController {

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
		$this->Shopgenre->recursive = 0;
		$this->set('shopgenres', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Shopgenre->exists($id)) {
			throw new NotFoundException(__('Invalid shopgenre'));
		}
		$options = array('conditions' => array('Shopgenre.' . $this->Shopgenre->primaryKey => $id));
		$this->set('shopgenre', $this->Shopgenre->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Shopgenre->create();
			if ($this->Shopgenre->save($this->request->data)) {
				$this->Session->setFlash(__('The shopgenre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shopgenre could not be saved. Please, try again.'));
			}
		}
		$shops = $this->Shopgenre->Shop->find('list');
		$this->set(compact('shops'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Shopgenre->exists($id)) {
			throw new NotFoundException(__('Invalid shopgenre'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Shopgenre->save($this->request->data)) {
				$this->Session->setFlash(__('The shopgenre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shopgenre could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shopgenre.' . $this->Shopgenre->primaryKey => $id));
			$this->request->data = $this->Shopgenre->find('first', $options);
		}
		$shops = $this->Shopgenre->Shop->find('list');
		$this->set(compact('shops'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Shopgenre->id = $id;
		if (!$this->Shopgenre->exists()) {
			throw new NotFoundException(__('Invalid shopgenre'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Shopgenre->delete()) {
			$this->Session->setFlash(__('The shopgenre has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shopgenre could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Shopgenre->recursive = 0;
		$this->set('shopgenres', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Shopgenre->exists($id)) {
			throw new NotFoundException(__('Invalid shopgenre'));
		}
		$options = array('conditions' => array('Shopgenre.' . $this->Shopgenre->primaryKey => $id));
		$this->set('shopgenre', $this->Shopgenre->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Shopgenre->create();
			if ($this->Shopgenre->save($this->request->data)) {
				$this->Session->setFlash(__('The shopgenre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shopgenre could not be saved. Please, try again.'));
			}
		}
		$shops = $this->Shopgenre->Shop->find('list');
		$this->set(compact('shops'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Shopgenre->exists($id)) {
			throw new NotFoundException(__('Invalid shopgenre'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Shopgenre->save($this->request->data)) {
				$this->Session->setFlash(__('The shopgenre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shopgenre could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shopgenre.' . $this->Shopgenre->primaryKey => $id));
			$this->request->data = $this->Shopgenre->find('first', $options);
		}
		$shops = $this->Shopgenre->Shop->find('list');
		$this->set(compact('shops'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Shopgenre->id = $id;
		if (!$this->Shopgenre->exists()) {
			throw new NotFoundException(__('Invalid shopgenre'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Shopgenre->delete()) {
			$this->Session->setFlash(__('The shopgenre has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shopgenre could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
