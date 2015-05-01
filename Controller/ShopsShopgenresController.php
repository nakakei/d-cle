<?php
App::uses('AppController', 'Controller');
/**
 * ShopsShopgenres Controller
 *
 * @property ShopsShopgenre $ShopsShopgenre
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ShopsShopgenresController extends AppController {

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
		$this->ShopsShopgenre->recursive = 0;
		$this->set('shopsShopgenres', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ShopsShopgenre->exists($id)) {
			throw new NotFoundException(__('Invalid shops shopgenre'));
		}
		$options = array('conditions' => array('ShopsShopgenre.' . $this->ShopsShopgenre->primaryKey => $id));
		$this->set('shopsShopgenre', $this->ShopsShopgenre->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ShopsShopgenre->create();
			if ($this->ShopsShopgenre->save($this->request->data)) {
				$this->Session->setFlash(__('The shops shopgenre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shops shopgenre could not be saved. Please, try again.'));
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
		if (!$this->ShopsShopgenre->exists($id)) {
			throw new NotFoundException(__('Invalid shops shopgenre'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ShopsShopgenre->save($this->request->data)) {
				$this->Session->setFlash(__('The shops shopgenre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shops shopgenre could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ShopsShopgenre.' . $this->ShopsShopgenre->primaryKey => $id));
			$this->request->data = $this->ShopsShopgenre->find('first', $options);
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
		$this->ShopsShopgenre->id = $id;
		if (!$this->ShopsShopgenre->exists()) {
			throw new NotFoundException(__('Invalid shops shopgenre'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ShopsShopgenre->delete()) {
			$this->Session->setFlash(__('The shops shopgenre has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shops shopgenre could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ShopsShopgenre->recursive = 0;
		$this->set('shopsShopgenres', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ShopsShopgenre->exists($id)) {
			throw new NotFoundException(__('Invalid shops shopgenre'));
		}
		$options = array('conditions' => array('ShopsShopgenre.' . $this->ShopsShopgenre->primaryKey => $id));
		$this->set('shopsShopgenre', $this->ShopsShopgenre->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ShopsShopgenre->create();
			if ($this->ShopsShopgenre->save($this->request->data)) {
				$this->Session->setFlash(__('The shops shopgenre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shops shopgenre could not be saved. Please, try again.'));
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
		if (!$this->ShopsShopgenre->exists($id)) {
			throw new NotFoundException(__('Invalid shops shopgenre'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ShopsShopgenre->save($this->request->data)) {
				$this->Session->setFlash(__('The shops shopgenre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shops shopgenre could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ShopsShopgenre.' . $this->ShopsShopgenre->primaryKey => $id));
			$this->request->data = $this->ShopsShopgenre->find('first', $options);
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
		$this->ShopsShopgenre->id = $id;
		if (!$this->ShopsShopgenre->exists()) {
			throw new NotFoundException(__('Invalid shops shopgenre'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ShopsShopgenre->delete()) {
			$this->Session->setFlash(__('The shops shopgenre has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shops shopgenre could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
