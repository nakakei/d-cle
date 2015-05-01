<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class SignupController extends AppController {
	public $name = 'Signup';
	public $uses = array('User','Group');
	//public $components = array('Auth','Paginator');
	
	//ビューの設定
	public $layout='test';
	
	public function beforeFilter(){
		$this->Auth->allow();
		$twitter = 'summary';
		$this->set('twitter',$twitter);
		$img = 'd-cle.com/app/webroot/img/hpicon.jpg';
		$this->set('img',$img);
		$description = 'でぃーくるとは、同志社大学のいろいろな情報を発信しています。同志社大学、同志社スナップ、コラム、食レポ、新歓、イベント、団体、サークル紹介など色々なコンテンツがあります！';
		$this->set('description',$description);
	}
	
	public function index(){
		$this->layout='test';
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
		if (! $this->request->data){
			$this->render();
			return;
		}
		
		
		$this->User->set($this->request->data);
		if (! $this->User->invalidFields()){
			$email = $this->request->data['User']['email'];
			$activation_code = md5($email.time());
			
			$user = $this->User->find('first', array('conditions' => array('email' => $email, 'is_active' => false)));
			if (! $user){
				$this->User->create();
				$user = array('User' => $this->request->data['User']);
			}
			$user['User']['is_active'] = false;
			$user['User']['activation_code'] = $activation_code;
			$user['User']['group_id'] = 3;
			$this->User->save($user);
			
			$cakeemail = new CakeEmail('contact');
			$cakeemail->to($email);
			$cakeemail->bcc('info@d-cle.com');
			$cakeemail->subject('仮登録のお知らせ');
			$cakeemail->template('default');
			$cakeemail->send(sprintf('http://d-cle.com/signup/activate/%s', $activation_code));
			
			$this->render('email_sent');
		}
	}
	
	
	
	
	public function activate($activation_code){
		
		
		$user = $this->User->find(
				'first',
				array(
					'conditions' => array(
						'activation_code' => $activation_code,
						'is_active' => false
					)
				)
			);

		
		if (! $user){ $this->redirect('/signup/index'); }
		
		if (! $this->request->data){
			$this->render();
			return;
		}

		$this->User->set($this->request->data);
		if (! $this->User->invalidFields()){
			$user['User']['password'] = $this->Auth->password($this->request->data['User']['password']);
			unset($user['User']['password_confirm']);
			$user['User']['is_active'] = true;
			
			$this->User->validate = array();
			$this->User->save($user);
			
			$this->Auth->login();
			$this->redirect(array('controller'=>'home','action'=>'index')/*$this->Auth->redirectUrl()*/);
			//$this->redirect($this->Auth->redirectUrl());
		}
	}

	
	
	
	
}
