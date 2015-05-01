<?php
App::uses('AppController', 'Controller');
/**
 * Shops Controller
 *
 * @property Shop $Shop
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ShopsController extends AppController {

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
		$this->Auth->allow('index','view');
		
		$twitter = 'summary';
		$this->set('twitter',$twitter);
		$img = 'd-cle.com/app/webroot/img/photo33.jpg';
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
		$this->Shop->recursive = 1;
		$this->set('shops', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Shop->recursive = 1;
		if (!$this->Shop->exists($id)) {
			throw new NotFoundException(__('Invalid shop'));
		}
		$options = array('conditions' => array('Shop.' . $this->Shop->primaryKey => $id));
		$this->set('shop', $this->Shop->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Shop->create();
			if ($this->Shop->save($this->request->data)) {
				$this->Session->setFlash(__('The shop has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shop could not be saved. Please, try again.'));
			}
		}
		$shopgenres = $this->Shop->Shopgenre->find('list');
		$shopplaces = $this->Shop->Shopplace->find('list');
		$this->set(compact('shopgenres', 'shopplaces'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Shop->exists($id)) {
			throw new NotFoundException(__('Invalid shop'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Shop->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The shop has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shop could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shop.' . $this->Shop->primaryKey => $id));
			$this->request->data = $this->Shop->find('first', $options);
		}
		$shopgenres = $this->Shop->Shopgenre->find('list');
		$shopplaces = $this->Shop->Shopplace->find('list');
		$this->set(compact('shopgenres', 'shopplaces'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Shop->id = $id;
		if (!$this->Shop->exists()) {
			throw new NotFoundException(__('Invalid shop'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Shop->delete()) {
			$this->Session->setFlash(__('The shop has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shop could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Shop->recursive = 0;
		$this->set('shops', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Shop->exists($id)) {
			throw new NotFoundException(__('Invalid shop'));
		}
		$options = array('conditions' => array('Shop.' . $this->Shop->primaryKey => $id));
		$this->set('shop', $this->Shop->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Shop->create();
			if ($this->Shop->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The shop has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shop could not be saved. Please, try again.'));
			}
		}
		$shopgenres = $this->Shop->Shopgenre->find('list');
		$shopplaces = $this->Shop->Shopplace->find('list');
		$this->set(compact('shopgenres', 'shopplaces'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Shop->exists($id)) {
			throw new NotFoundException(__('Invalid shop'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data = $this->request->data;
			$data['Shopphoto']['id'] = $id;
			$data['Shopphoto']['model'] = 'shop';
			if ($this->Shop->save($data)) {
				$this->Session->setFlash(__('The shop has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shop could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shop.' . $this->Shop->primaryKey => $id));
			$this->request->data = $this->Shop->find('first', $options);
		}
		$shopgenres = $this->Shop->Shopgenre->find('list');
		$shopplaces = $this->Shop->Shopplace->find('list');
		$this->set(compact('shopgenres', 'shopplaces'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Shop->id = $id;
		if (!$this->Shop->exists()) {
			throw new NotFoundException(__('Invalid shop'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Shop->delete()) {
			$this->Session->setFlash(__('The shop has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shop could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
