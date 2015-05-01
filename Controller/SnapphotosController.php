<?php
App::uses('AppController', 'Controller');
/**
 * Snapphotos Controller
 *
 * @property Snapphoto $Snapphoto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SnapphotosController extends AppController {

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
		$this->Snapphoto->recursive = 0;
		$this->set('snapphotos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Snapphoto->exists($id)) {
			throw new NotFoundException(__('Invalid snapphoto'));
		}
		$options = array('conditions' => array('Snapphoto.' . $this->Snapphoto->primaryKey => $id));
		$this->set('snapphoto', $this->Snapphoto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Snapphoto->create();
			if ($this->Snapphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The snapphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snapphoto could not be saved. Please, try again.'));
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
		if (!$this->Snapphoto->exists($id)) {
			throw new NotFoundException(__('Invalid snapphoto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Snapphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The snapphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snapphoto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Snapphoto.' . $this->Snapphoto->primaryKey => $id));
			$this->request->data = $this->Snapphoto->find('first', $options);
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
		$this->Snapphoto->id = $id;
		if (!$this->Snapphoto->exists()) {
			throw new NotFoundException(__('Invalid snapphoto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Snapphoto->delete()) {
			$this->Session->setFlash(__('The snapphoto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The snapphoto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Snapphoto->recursive = 0;
		$this->set('snapphotos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Snapphoto->exists($id)) {
			throw new NotFoundException(__('Invalid snapphoto'));
		}
		$options = array('conditions' => array('Snapphoto.' . $this->Snapphoto->primaryKey => $id));
		$this->set('snapphoto', $this->Snapphoto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add($id =null) {
		if ($this->request->is('post')) {
			$this->Snapphoto->create();
			$data = $this->request->data;
			$data['Snapphoto']['foreign_key'] = $id;
			$data['Snapphoto']['model'] = 'snap';
			if ($this->Snapphoto->saveAll($data)) {
				$this->Session->setFlash(__('The snapphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snapphoto could not be saved. Please, try again.'));
			}
		}
		$options = array('conditions' => array('Snapphoto.' . $this->Snapphoto->primaryKey => $id));
		$this->set('snapphoto', $this->Snapphoto->find('first', $options));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Snapphoto->exists($id)) {
			throw new NotFoundException(__('Invalid snapphoto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Snapphoto->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The snapphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snapphoto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Snapphoto.' . $this->Snapphoto->primaryKey => $id));
			$this->request->data = $this->Snapphoto->find('first', $options);
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
		$this->Snapphoto->id = $id;
		if (!$this->Snapphoto->exists()) {
			throw new NotFoundException(__('Invalid snapphoto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Snapphoto->delete()) {
			$this->Session->setFlash(__('The snapphoto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The snapphoto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
