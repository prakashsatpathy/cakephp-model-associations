<?php
App::uses('Controller', 'Controller');
class AppController extends Controller {
	
	public $components = array('Auth', 'Session','Email', 'Cookie');
	public $helpers = array('Html', 'Form', 'Text','Cache','Session');
	
	function beforeFilter() {
		parent::beforeFilter();
		
	}
}
