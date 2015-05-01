<?php
App::uses('AppController', 'Controller');
/**
 * Snaps Controller
 *
 * @property Snap $Snap
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SnapsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session');
	
	public $uses = array('Snap','Snapcategory');
	
	public $paginate = array(
		'Snap'=>array(
			'limit' => 10,
			//'prameType'=>'named',
			//'type'=>'first',
			'order' => array(
				'Snap.id' => 'desc'
        	)
    	),
	);

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
		$this->Snap->recursive = 1;
		$this->set('snaps', $this->paginate());
		
		$title_for_layout = 'スナップ一覧';
		$this->set('title_for_layout',$title_for_layout);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Snap->exists($id)) {
			throw new NotFoundException(__('Invalid snap'));
		}
		$options = array('conditions' => array('Snap.' . $this->Snap->primaryKey => $id));
		$this->set('snap', $this->Snap->find('first', $options));
		
		$twitter = 'photo';
		$this->set('twitter',$twitter);
		
		//戻るボタンの作成
		$referer = $this->referer();
		$this->set('referer',$referer);
		
		$title_for_layout = $this->Snap->find('first',$options);
		$this->set('title_for_layout',$title_for_layout['Snap']['name']);
		//$img = 'new.d-cle.com/app/webroot/files/photo/'.$title_for_layout['Snapphoto']['0']['id'].'/thumb800_'.$title_for_layout['Snapphoto']['0']['photo'];
		//$this->set('img',$img);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Snap->create();
			if ($this->Snap->save($this->request->data)) {
				$this->Session->setFlash(__('The snap has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snap could not be saved. Please, try again.'));
			}
		}
		$snaptags = $this->Snap->Snaptag->find('list');
		$this->set(compact('snaptags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Snap->exists($id)) {
			throw new NotFoundException(__('Invalid snap'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Snap->save($this->request->data)) {
				$this->Session->setFlash(__('The snap has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snap could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Snap.' . $this->Snap->primaryKey => $id));
			$this->request->data = $this->Snap->find('first', $options);
		}
		$snaptags = $this->Snap->Snaptag->find('list');
		$this->set(compact('snaptags'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Snap->id = $id;
		if (!$this->Snap->exists()) {
			throw new NotFoundException(__('Invalid snap'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Snap->delete()) {
			$this->Session->setFlash(__('The snap has been deleted.'));
		} else {
			$this->Session->setFlash(__('The snap could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Snap->recursive = 0;
		$this->set('snaps', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Snap->exists($id)) {
			throw new NotFoundException(__('Invalid snap'));
		}
		$options = array('conditions' => array('Snap.' . $this->Snap->primaryKey => $id));
		$this->set('snap', $this->Snap->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Snap->create();
			if ($this->Snap->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The snap has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snap could not be saved. Please, try again.'));
			}
		}
		$snaptags = $this->Snap->Snaptag->find('list');
		$this->set(compact('snaptags'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Snap->exists($id)) {
			throw new NotFoundException(__('Invalid snap'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Snap->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The snap has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The snap could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Snap.' . $this->Snap->primaryKey => $id));
			$this->request->data = $this->Snap->find('first', $options);
		}
		$snaptags = $this->Snap->Snaptag->find('list');
		$this->set(compact('snaptags'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Snap->id = $id;
		if (!$this->Snap->exists()) {
			throw new NotFoundException(__('Invalid snap'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Snap->delete()) {
			$this->Session->setFlash(__('The snap has been deleted.'));
		} else {
			$this->Session->setFlash(__('The snap could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
