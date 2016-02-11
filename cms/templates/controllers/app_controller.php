<?php

App::uses('AppController', 'Controller');

class CmsAppController extends AppController
{
	
	public $components = [
		'Auth' => [
			'loginRedirect'  => ['plugin' => 'cms', 'controller' => 'dashboard', 'action' => 'home'],
			'logoutRedirect' => ['plugin' => 'cms', 'controller' => 'auth', 'action' => 'login'],
			'loginAction'    => ['plugin' => 'cms', 'controller' => 'auth', 'action' => 'login'],
			'authenticate' => [
				'Form' => [
					'fields' => ['username' => 'email'],
					'userModel' => 'Cms.Admin'
				]
			],
			'authorize' => ['Controller']
		],
        'Paginator'
	];
	
	public $section = 'Dashboard';
	
	
	public function beforeRender()
	{
		parent::beforeRender();
		$this->set('section', $this->section);
		$this->set('CMS', Configure::read('Cms.Name'));
		$this->set('admin', $this->Auth->user());
	}
	
	public function beforeFilter()
	{
		parent::beforeFilter();
		Configure::load('Cms.settings');
	}
	
	public function renderJSON($result, $root = 'result')
	{
		$this->autoLayout = false;
		$this->autoRender = false;
		if( $root ) {
			$result = array($root => $result);
		}
		$this->response->type('json');
		$this->response->body(json_encode($result));
	}
	
	public function setFlash($message, $type = 'info')
	{
		if( $type === 'error' ) {
			$type = 'danger';
		}
		$this->Session->setFlash( $message, 'flash', ['type' => $type] );
	}
	
	public function isAuthorized($user)
	{
		// default strategy is to allow access to any logged user
		return $user['status'] == 1 ? true : false;
	}
	
	public function setSection($section)
	{
		$this->section = $section;
		$this->set('section', $section);
	}
	
}