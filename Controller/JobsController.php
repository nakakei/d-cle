<?php
App::uses('AppController', 'Controller');
/**
 * Jobs Controller
 *
 * @property Job $Job
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class JobsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session','Auth','Email');
	
	//認証の設定
	public function beforeFilter(){
		if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
			$this->layout = 'default';
		}
		$this->Auth->allow('index','view','contact','giftmoney');
		
		$twitter = 'summary';
		$this->set('twitter',$twitter);
		$img = 'd-cle.com/app/webroot/img/photo33.jpg';
		$this->set('img',$img);
		$description = 'でぃーくるとは、同志社大学のいろいろな情報を発信しています。同志社大学、同志社スナップ、コラム、食レポ、新歓、イベント、団体、サークル紹介など色々なコンテンツがあります！';
		$this->set('description',$description);
	}

	public $paginate = array(
		'Job'=>array(
			'limit' => 10,
			//'prameType'=>'named',
			//'type'=>'first',
			/*'conditions' => array(
				'Content.active'=>1,
			),*/
			'order' => array(
				'job.id' => 'desc'
        	)
    	),
	);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Job->recursive = 1;
		$this->set('jobs', $this->paginate('Job',array('Job.active'=>1)));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__('Invalid job'));
		}
		$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
		$this->set('job', $this->Job->find('first', $options));
	}


	//emailのcontroller
	public function contact($id = null) {
		$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
		$this->set('job', $this->Job->find('first', $options));
		
        if ($this->request->is('post')) {
			$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
			$test = $this->Job->find('first', $options);
			
			$data['Contact'] = $this->request->data['Contact'];
			$data['Job'] = $test['Job'];
			
            $email = new CakeEmail('job');
            $email->config('job'); //$contactの設定を読み込みます。
			$email->emailFormat('html');
            $email->viewVars($data); //送信内容をテンプレートファイルに渡します
			$email->to($this->request->data['Contact']['email']);
			
			
			$semail = new CakeEmail('shop');
            $semail->config('shop'); //$contactの設定を読み込みます。
			$semail->emailFormat('html');
            $semail->viewVars($data); //送信内容をテンプレートファイルに渡します
			$semail->to($test['Job']['mail']);
			
			$semail->send();
			
            if($email->send()){
                    //メール送信が成功した場合ここで処理
					$this->Session->setFlash('送信完了しました');
            }
        }
        $this->render();
    }
	
	//祝い金の説明
	public function giftmoney(){
		
	}

	//祝い金の応募フォーム
	public function giftform(){
        if ($this->request->is('post')) {

			
			$data[] = $this->request->data;

			
            $email = new CakeEmail('gift');
            $email->config('gift'); //$contactの設定を読み込みます。
			$email->emailFormat('text');
            $email->viewVars($data); //送信内容をテンプレートファイルに渡します
			$email->to($this->request->data['email']);
            if($email->send()){
                    //メール送信が成功した場合ここで処理
					$this->Session->setFlash('送信完了しました');
            }
        }
        $this->render();
		
	}



/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Job->recursive = 0;
		$this->set('jobs', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__('Invalid job'));
		}
		$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
		$this->set('job', $this->Job->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Job->create();
			if ($this->Job->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The job has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job could not be saved. Please, try again.'));
			}
		}
		$jobplaces = $this->Job->Jobplace->find('list');
		$jobrequirements = $this->Job->Jobrequirement->find('list');
		$jobtreatments = $this->Job->Jobtreatment->find('list');
		$this->set(compact('jobplaces', 'jobrequirements', 'jobtreatments'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__('Invalid job'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Job->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The job has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
			$this->request->data = $this->Job->find('first', $options);
		}
		$jobplaces = $this->Job->Jobplace->find('list');
		$jobrequirements = $this->Job->Jobrequirement->find('list');
		$jobtreatments = $this->Job->Jobtreatment->find('list');
		$this->set(compact('jobplaces', 'jobrequirements', 'jobtreatments'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Job->id = $id;
		if (!$this->Job->exists()) {
			throw new NotFoundException(__('Invalid job'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Job->delete()) {
			$this->Session->setFlash(__('The job has been deleted.'));
		} else {
			$this->Session->setFlash(__('The job could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
