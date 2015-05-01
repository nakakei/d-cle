<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * ContentsContenttags Controller
 *
 * @property ContentsContenttag $ContentsContenttag
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HomeController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array(
        'Acl',
        'Auth' => array(
            'authorize' => array(
                'Actions' => array('actionPath' => 'controllers'),
				
				'Form' => array(
					'username' => 'username',
					'password' => 'password',
				)
            ),
			'flash' => array(
				'element' => 'alert',
				'key' => 'auth',
				'params' => array(
					'plugin' => 'BoostCake',
					'class' => 'alert-error'
				)
			)
        ),
        'Session'
    );
	
	public $uses =array('Post','Category','Event','User','Club','Attachment','Clubcategory','Event');


	//認証の設定
	public function beforeFilter(){
		$this->Auth->allow();
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
		$title_for_layout = 'ホーム';
		$this->set('title_for_layout',$title_for_layout);
	}
	
//サイドバーの設定
	public function cate() {
		return $this->Category->generatetreegrouped();
		/*
        return $this->set(
            compact(
                'categories'
            )
        );
		*/
	}
	
	public function month(){
		return $this->Post->find('list',array(
				'order'=>array('Post.created desc'),
				'fields'=>'Post.created',
				));
	}
	
	
	//検索の設定
	public function search($datas){
		$body = null;
		if(isset($this->request->query['body'])){
			$data = $this->paginate('Club',array(
			array(
				'Post.body like' => "%{$this->request->query['body']}%"
				//'Post.body like' => "%{$this->data['Post']['body']}%"
				)
			)
		);
		}
		$this->set('posts',$data);
		$title_for_layout = 'サーチ';
		$this->set('title_for_layout',$title_for_layout);
	}
	
	
	
	//日付検索
	public function day($datetime){
		$days = $this->paginate('Post',
			array(
				array(
					'Post.created like' => "{$datetime}%"
				),
			));
		$this->set('posts',$days);
		$this->set('time',$datetime);
	}


	//サイドバー	
	//ログインの設定
	public function login(){
		if($this->Auth->loggedIn()){
			return 'ユーザー名：'.$this->Auth->user('username');
		}else{
			return '<a href="/users/login">ログインしてください</a>';
		}
	}
	public function logedit(){
		if($this->Auth->loggedIn()){
			$id = $this->Auth->user('id');
			return $this->Club->find('all',array('conditions'=>array('Club.user_id'=>$id)));
			//return $this->Event->find('all',array('conditions'=>array('Event.user_id'=>$id,'Event.eventcategoty_id'=>'2')));
		}else{
			return 1;
		}
	}
	public function logevent(){
		if($this->Auth->loggedIn()){
			$id = $this->Auth->user('id');
			return $this->Event->find('all',array('conditions'=>array('Event.user_id'=>$id,'Event.eventcategory_id'=>'2')));
		}else{
			return 1;
		}
	}


	//ビュー
	public function view($id = null){
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('Post.' . $this->Post->primaryKey => $id);
		$this->set('posts', $this->paginate('Post',
			array('Post.' . $this->Post->primaryKey => $id)
		));
		$title_for_layout = $this->Post->field('title',array('Post.' . $this->Post->primaryKey => $id));
		$this->set('title_for_layout',$title_for_layout);
	}
	
	//カテゴリー
	public function category($id){
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
		
		//$this->set('category',$this->paginate('Category',array('Category.id' => 3)));
		//$this->set('cate', $this->Category->primaryKey =>$id);
		//$this->set('data',$this->Post->find('frist',array('condtions'=>array('Post.id'=>3))));
		
		$this->set('posts',
			$this->paginate('Post',array('Post.category_id'=>$id)));
			
		$title_for_layout = $this->Category->field('name',array('Category.' . $this->Category->primaryKey => $id));
		$this->set('title_for_layout',$title_for_layout);
	
	}
	
	//メール設定お問い合わせ
	public function form(){
			if ($this->request->is('post')) {
				$this->set('a',$this->request->data);
				
				
				$email = new CakeEmail('contact');
				
				$email->to($this->request->data['email'])
					->bcc('info@d-cle.com')
					->subject('お問い合わせが完了しました')
					->viewVars($this->request->data);
					
				
				
				$frommail = new CakeEmail('frommail');
				$frommail->to('web@keisuke23.com')
					->viewVars($this->request->data);
				
				$frommail->send();
				
				if($email->send()){
						//メール送信が成功した場合ここで処理
						$this->Session->setFlash('送信を完了しました');
				}
				//$this->set('a',$this->request->data());
			}
		$this->render();
		$title_for_layout = 'お問い合わせ';
		$this->set('title_for_layout',$title_for_layout);
	}


	public function rule(){
				
		$title_for_layout = 'ご利用規約';
		$this->set('title_for_layout',$title_for_layout);
	}
	
	public function privacy(){
		$title_for_layout = 'プライバシー規約';
		$this->set('title_for_layout',$title_for_layout);
	}
	
	public function eve(){
		$title_for_layout = 'EVE祭情報';
		$this->set('title_for_layout',$title_for_layout);
	}
	
	public function news(){
		$title_for_layout = '募集ページ';
		$this->set('title_for_layout',$title_for_layout);
	}
	
	public function writer(){
		$title_for_layout = '募集ページ';
		$this->set('title_for_layout',$title_for_layout);
	}
	
	public function camera(){
		$title_for_layout = '募集ページ';
		$this->set('title_for_layout',$title_for_layout);
	}
	
	public function se(){
		$title_for_layout = '募集ページ';
		$this->set('title_for_layout',$title_for_layout);
	}



}
