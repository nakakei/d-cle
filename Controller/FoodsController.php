<?php
App::uses('AppController', 'Controller');
/**
 * Foods Controller
 *
 * @property Food $Food
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FoodsController extends AppController {

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
		$img = 'd-cle.com/app/webroot/img/food.jpg';
		$this->set('img',$img);
		$description = '同志社周辺の店舗を食べ歩いてます。週1回ごとに更新！！';
		$this->set('description',$description);
	}
	



/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Food->recursive = 1;
		$this->set('foods', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Food->exists($id)) {
			throw new NotFoundException(__('Invalid food'));
		}
		$options = array('conditions' => array('Food.' . $this->Food->primaryKey => $id));
		$this->set('food', $this->Food->find('first', $options));

		$title_for_layout = $this->Food->find('first',$options);
		$this->set('title_for_layout',$title_for_layout['Food']['title']);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Food->create();
			if ($this->Food->save($this->request->data)) {
				$this->Session->setFlash(__('The food has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The food could not be saved. Please, try again.'));
			}
		}
		$foodplaces = $this->Food->Foodplace->find('list');
		$foodtags = $this->Food->Foodtag->find('list');
		$this->set(compact('foodplaces', 'foodtags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Food->exists($id)) {
			throw new NotFoundException(__('Invalid food'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Food->save($this->request->data)) {
				$this->Session->setFlash(__('The food has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The food could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Food.' . $this->Food->primaryKey => $id));
			$this->request->data = $this->Food->find('first', $options);
		}
		$foodplaces = $this->Food->Foodplace->find('list');
		$foodtags = $this->Food->Foodtag->find('list');
		$this->set(compact('foodplaces', 'foodtags'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Food->id = $id;
		if (!$this->Food->exists()) {
			throw new NotFoundException(__('Invalid food'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Food->delete()) {
			$this->Session->setFlash(__('The food has been deleted.'));
		} else {
			$this->Session->setFlash(__('The food could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Food->recursive = 0;
		$this->set('foods', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Food->exists($id)) {
			throw new NotFoundException(__('Invalid food'));
		}
		$options = array('conditions' => array('Food.' . $this->Food->primaryKey => $id));
		$this->set('food', $this->Food->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Food->create();
			if ($this->Food->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The food has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The food could not be saved. Please, try again.'));
			}
		}
		$foodplaces = $this->Food->Foodplace->find('list');
		$foodtags = $this->Food->Foodtag->find('list');
		$this->set(compact('foodplaces', 'foodtags'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Food->exists($id)) {
			throw new NotFoundException(__('Invalid food'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Food->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The food has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The food could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Food.' . $this->Food->primaryKey => $id));
			$this->request->data = $this->Food->find('first', $options);
		}
		$foodplaces = $this->Food->Foodplace->find('list');
		$foodtags = $this->Food->Foodtag->find('list');
		$this->set(compact('foodplaces', 'foodtags'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Food->id = $id;
		if (!$this->Food->exists()) {
			throw new NotFoundException(__('Invalid food'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Food->delete()) {
			$this->Session->setFlash(__('The food has been deleted.'));
		} else {
			$this->Session->setFlash(__('The food could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
