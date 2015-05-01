<?php
App::uses('AppController', 'Controller');
/**
 * Eventtags Controller
 *
 * @property Eventtag $Eventtag
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EventtagsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session','Auth');



	//認証の設定
	public function beforeFilter(){
		if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
			$this->layout = 'default';
		}
	}



/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Eventtag->recursive = 0;
		$this->set('eventtags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Eventtag->exists($id)) {
			throw new NotFoundException(__('Invalid eventtag'));
		}
		$options = array('conditions' => array('Eventtag.' . $this->Eventtag->primaryKey => $id));
		$this->set('eventtag', $this->Eventtag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Eventtag->create();
			if ($this->Eventtag->save($this->request->data)) {
				$this->Session->setFlash(__('The eventtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventtag could not be saved. Please, try again.'));
			}
		}
		$events = $this->Eventtag->Event->find('list');
		$this->set(compact('events'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Eventtag->exists($id)) {
			throw new NotFoundException(__('Invalid eventtag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Eventtag->save($this->request->data)) {
				$this->Session->setFlash(__('The eventtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventtag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Eventtag.' . $this->Eventtag->primaryKey => $id));
			$this->request->data = $this->Eventtag->find('first', $options);
		}
		$events = $this->Eventtag->Event->find('list');
		$this->set(compact('events'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Eventtag->id = $id;
		if (!$this->Eventtag->exists()) {
			throw new NotFoundException(__('Invalid eventtag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Eventtag->delete()) {
			$this->Session->setFlash(__('The eventtag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The eventtag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Eventtag->recursive = 0;
		$this->set('eventtags', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Eventtag->exists($id)) {
			throw new NotFoundException(__('Invalid eventtag'));
		}
		$options = array('conditions' => array('Eventtag.' . $this->Eventtag->primaryKey => $id));
		$this->set('eventtag', $this->Eventtag->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Eventtag->create();
			if ($this->Eventtag->save($this->request->data)) {
				$this->Session->setFlash(__('The eventtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventtag could not be saved. Please, try again.'));
			}
		}
		$events = $this->Eventtag->Event->find('list');
		$this->set(compact('events'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Eventtag->exists($id)) {
			throw new NotFoundException(__('Invalid eventtag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Eventtag->save($this->request->data)) {
				$this->Session->setFlash(__('The eventtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventtag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Eventtag.' . $this->Eventtag->primaryKey => $id));
			$this->request->data = $this->Eventtag->find('first', $options);
		}
		$events = $this->Eventtag->Event->find('list');
		$this->set(compact('events'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Eventtag->id = $id;
		if (!$this->Eventtag->exists()) {
			throw new NotFoundException(__('Invalid eventtag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Eventtag->delete()) {
			$this->Session->setFlash(__('The eventtag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The eventtag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
