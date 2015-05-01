<?php
App::uses('AppController', 'Controller');
/**
 * Festivalphotos Controller
 *
 * @property Festivalphoto $Festivalphoto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FestivalphotosController extends AppController {

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
		$twitter = 'photo';
		$this->set('twitter',$twitter);
		$img = 'd-cle.com/app/webroot/img/139.jpg';
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
		$this->Festivalphoto->recursive = 0;
		$this->set('festivalphotos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Festivalphoto->exists($id)) {
			throw new NotFoundException(__('Invalid festivalphoto'));
		}
		$options = array('conditions' => array('Festivalphoto.' . $this->Festivalphoto->primaryKey => $id));
		$this->set('festivalphoto', $this->Festivalphoto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Festivalphoto->create();
			if ($this->Festivalphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The festivalphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The festivalphoto could not be saved. Please, try again.'));
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
		if (!$this->Festivalphoto->exists($id)) {
			throw new NotFoundException(__('Invalid festivalphoto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Festivalphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The festivalphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The festivalphoto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Festivalphoto.' . $this->Festivalphoto->primaryKey => $id));
			$this->request->data = $this->Festivalphoto->find('first', $options);
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
		$this->Festivalphoto->id = $id;
		if (!$this->Festivalphoto->exists()) {
			throw new NotFoundException(__('Invalid festivalphoto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Festivalphoto->delete()) {
			$this->Session->setFlash(__('The festivalphoto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The festivalphoto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Festivalphoto->recursive = 0;
		$this->set('festivalphotos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Festivalphoto->exists($id)) {
			throw new NotFoundException(__('Invalid festivalphoto'));
		}
		$options = array('conditions' => array('Festivalphoto.' . $this->Festivalphoto->primaryKey => $id));
		$this->set('festivalphoto', $this->Festivalphoto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Festivalphoto->create();
			if ($this->Festivalphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The festivalphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The festivalphoto could not be saved. Please, try again.'));
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
		if (!$this->Festivalphoto->exists($id)) {
			throw new NotFoundException(__('Invalid festivalphoto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Festivalphoto->save($this->request->data)) {
				$this->Session->setFlash(__('The festivalphoto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The festivalphoto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Festivalphoto.' . $this->Festivalphoto->primaryKey => $id));
			$this->request->data = $this->Festivalphoto->find('first', $options);
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
		$this->Festivalphoto->id = $id;
		if (!$this->Festivalphoto->exists()) {
			throw new NotFoundException(__('Invalid festivalphoto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Festivalphoto->delete()) {
			$this->Session->setFlash(__('The festivalphoto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The festivalphoto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
