<?php
App::uses('AppController', 'Controller');
/**
 * Contenttags Controller
 *
 * @property Contenttag $Contenttag
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ContenttagsController extends AppController {

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
		$this->Auth->allow('view');
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
		$this->Contenttag->recursive = 0;
		$this->set('contenttags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Contenttag->recursive = 2;
		if (!$this->Contenttag->exists($id)) {
			throw new NotFoundException(__('Invalid contenttag'));
		}
		$options = array('conditions' => array('Contenttag.' . $this->Contenttag->primaryKey => $id));
		$this->set('contenttag', $this->Contenttag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contenttag->create();
			if ($this->Contenttag->save($this->request->data)) {
				$this->Session->setFlash(__('The contenttag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contenttag could not be saved. Please, try again.'));
			}
		}
		$contents = $this->Contenttag->Content->find('list');
		$this->set(compact('contents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Contenttag->exists($id)) {
			throw new NotFoundException(__('Invalid contenttag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contenttag->save($this->request->data)) {
				$this->Session->setFlash(__('The contenttag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contenttag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contenttag.' . $this->Contenttag->primaryKey => $id));
			$this->request->data = $this->Contenttag->find('first', $options);
		}
		$contents = $this->Contenttag->Content->find('list');
		$this->set(compact('contents'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Contenttag->id = $id;
		if (!$this->Contenttag->exists()) {
			throw new NotFoundException(__('Invalid contenttag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Contenttag->delete()) {
			$this->Session->setFlash(__('The contenttag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The contenttag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Contenttag->recursive = 0;
		$this->set('contenttags', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Contenttag->exists($id)) {
			throw new NotFoundException(__('Invalid contenttag'));
		}
		$options = array('conditions' => array('Contenttag.' . $this->Contenttag->primaryKey => $id));
		$this->set('contenttag', $this->Contenttag->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Contenttag->create();
			if ($this->Contenttag->save($this->request->data)) {
				$this->Session->setFlash(__('The contenttag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contenttag could not be saved. Please, try again.'));
			}
		}
		$contents = $this->Contenttag->Content->find('list');
		$this->set(compact('contents'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Contenttag->exists($id)) {
			throw new NotFoundException(__('Invalid contenttag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contenttag->save($this->request->data)) {
				$this->Session->setFlash(__('The contenttag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contenttag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contenttag.' . $this->Contenttag->primaryKey => $id));
			$this->request->data = $this->Contenttag->find('first', $options);
		}
		$contents = $this->Contenttag->Content->find('list');
		$this->set(compact('contents'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Contenttag->id = $id;
		if (!$this->Contenttag->exists()) {
			throw new NotFoundException(__('Invalid contenttag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Contenttag->delete()) {
			$this->Session->setFlash(__('The contenttag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The contenttag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
