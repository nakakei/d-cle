<?php
App::uses('AppController', 'Controller');
/**
 * Snaptags Controller
 *
 * @property Snaptag $Snaptag
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SnaptagsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	
	
	//認証の設定
	public function beforeFilter(){
		if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
			$this->layout = 'default';
		}
		$this->Auth->allow('index','view');
		$twitter = 'summary';
		$this->set('twitter',$twitter);
		$img = 'd-cle.com/app/webroot/img/hpicon.jpg';
		$this->set('img',$img);
		$description = 'でぃーくるとは、同志社大学のいろいろな情報を発信しています。同志社大学、同志社スナップ、コラム、食レポ、新歓、イベント、団体、サークル紹介など色々なコンテンツがあります！';
		$this->set('description',$description);
	}


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Snaptag->recursive = 0;
		$this->set('snaptags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Snaptag->recursive = 2;
		if (!$this->Snaptag->exists($id)) {
			throw new NotFoundException(__('Invalid snaptag'));
		}
		$options = array('conditions' => array('Snaptag.' . $this->Snaptag->primaryKey => $id));
		$this->set('snaptag', $this->Snaptag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Snaptag->create();
			if ($this->Snaptag->save($this->request->data)) {
				$this->Session->setFlash(__('The snaptag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snaptag could not be saved. Please, try again.'));
			}
		}
		$snaps = $this->Snaptag->Snap->find('list');
		$this->set(compact('snaps'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Snaptag->exists($id)) {
			throw new NotFoundException(__('Invalid snaptag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Snaptag->save($this->request->data)) {
				$this->Session->setFlash(__('The snaptag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snaptag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Snaptag.' . $this->Snaptag->primaryKey => $id));
			$this->request->data = $this->Snaptag->find('first', $options);
		}
		$snaps = $this->Snaptag->Snap->find('list');
		$this->set(compact('snaps'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Snaptag->id = $id;
		if (!$this->Snaptag->exists()) {
			throw new NotFoundException(__('Invalid snaptag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Snaptag->delete()) {
			$this->Session->setFlash(__('The snaptag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The snaptag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Snaptag->recursive = 0;
		$this->set('snaptags', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Snaptag->exists($id)) {
			throw new NotFoundException(__('Invalid snaptag'));
		}
		$options = array('conditions' => array('Snaptag.' . $this->Snaptag->primaryKey => $id));
		$this->set('snaptag', $this->Snaptag->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Snaptag->create();
			if ($this->Snaptag->save($this->request->data)) {
				$this->Session->setFlash(__('The snaptag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snaptag could not be saved. Please, try again.'));
			}
		}
		$snaps = $this->Snaptag->Snap->find('list');
		$this->set(compact('snaps'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Snaptag->exists($id)) {
			throw new NotFoundException(__('Invalid snaptag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Snaptag->save($this->request->data)) {
				$this->Session->setFlash(__('The snaptag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snaptag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Snaptag.' . $this->Snaptag->primaryKey => $id));
			$this->request->data = $this->Snaptag->find('first', $options);
		}
		$snaps = $this->Snaptag->Snap->find('list');
		$this->set(compact('snaps'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Snaptag->id = $id;
		if (!$this->Snaptag->exists()) {
			throw new NotFoundException(__('Invalid snaptag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Snaptag->delete()) {
			$this->Session->setFlash(__('The snaptag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The snaptag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
