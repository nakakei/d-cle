<?php
App::uses('AppController', 'Controller');
/**
 * Contents Controller
 *
 * @property Content $Content
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ContentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session');
	
	public $layout = 'home';
	
	public $paginate = array(
		'Content'=>array(
			'limit' => 10,
			//'prameType'=>'named',
			//'type'=>'first',
			/*'conditions' => array(
				'Content.active'=>1,
			),*/
			'order' => array(
				'Content.id' => 'desc'
        	)
    	),
	);
	
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
		$this->Content->recursive = 1;
		$this->set('contents', $this->paginate('Content',array('Content.active'=>1)));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
				$this->Content->recursive = 2;
		if (!$this->Content->exists($id)) {
			throw new NotFoundException(__('Invalid content'));
		}
		$options = array('conditions' => array('Content.' . $this->Content->primaryKey => $id));
		$this->set('content', $this->Content->find('first', $options));
		$title_for_layout = $this->Content->find('first', $options);
		$this->set('title_for_layout',$title_for_layout['Content']['title']);
            	$str = $title_for_layout['Content']['body'];
            	$str = strip_tags($str);
            	mb_strimwidth($str, 0, 400, "…",'utf8');
		$this->set('description',mb_strimwidth($str, 0, 400, "…",'utf8'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Content->create();
			if ($this->Content->save($this->request->data)) {
				$this->Session->setFlash(__('The content has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The content could not be saved. Please, try again.'));
			}
		}
		$members = $this->Content->Member->find('list');
		$contenttags = $this->Content->Contenttag->find('list');
		$this->set(compact('members', 'contenttags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Content->exists($id)) {
			throw new NotFoundException(__('Invalid content'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Content->save($this->request->data)) {
				$this->Session->setFlash(__('The content has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The content could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Content.' . $this->Content->primaryKey => $id));
			$this->request->data = $this->Content->find('first', $options);
		}
		$members = $this->Content->Member->find('list');
		$contenttags = $this->Content->Contenttag->find('list');
		$this->set(compact('members', 'contenttags'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Content->id = $id;
		if (!$this->Content->exists()) {
			throw new NotFoundException(__('Invalid content'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Content->delete()) {
			$this->Session->setFlash(__('The content has been deleted.'));
		} else {
			$this->Session->setFlash(__('The content could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Content->recursive = 1;
		$this->set('contents', $this->paginate('Content'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Content->exists($id)) {
			throw new NotFoundException(__('Invalid content'));
		}
		$options = array('conditions' => array('Content.' . $this->Content->primaryKey => $id));
		$this->set('content', $this->Content->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Content->create();
			if ($this->Content->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The content has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The content could not be saved. Please, try again.'));
			}
		}
		$members = $this->Content->Member->find('list');
		$contenttags = $this->Content->Contenttag->find('list');
		$this->set(compact('members', 'contenttags'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Content->exists($id)) {
			throw new NotFoundException(__('Invalid content'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$data = $this->request->data;
			$data['Contentphoto']['0']['id'] = $id;
			$data['Contentphoto']['0']['model'] = 'content';
			if ($this->Content->saveAll($data)) {
				$this->Session->setFlash(__('The content has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The content could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Content.' . $this->Content->primaryKey => $id));
			$this->request->data = $this->Content->find('first', $options);
		}
		$members = $this->Content->Member->find('list');
		$contenttags = $this->Content->Contenttag->find('list');
		$this->set(compact('members', 'contenttags'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Content->id = $id;
		if (!$this->Content->exists()) {
			throw new NotFoundException(__('Invalid content'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Content->delete()) {
			$this->Session->setFlash(__('The content has been deleted.'));
		} else {
			$this->Session->setFlash(__('The content could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
