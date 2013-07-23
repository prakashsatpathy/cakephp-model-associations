<?php
App::uses('AppController', 'Controller');
class UsersController extends AppController {
	
	public $name = 'Users'; //Controller name
	public $uses = array('Product','ProductDetail','Image','Category','ProductCategory','User','Project'); //Model names
	
	function beforeFilter(){
       parent::beforeFilter();
       $this->Auth->allow('*');
    }
	
	public function index() {
		if(@$this->params['named']['param'] == "hasOne") { //Product hasOne ProductDetail
			
			//Unbind all other associations from product to demonstrate hasOne relation
			$this->Product->unbindModel(array('hasMany' => array('Image')));
			$this->Product->unbindModel(array('belongsTo' => array('User')));
			$this->Product->unbindModel(array('hasAndBelongsToMany' => array('Category')));
			
			$data = $this->Product->find('all');
		}
		elseif(@$this->params['named']['param'] == "hasMany") { //Product hasMany Image
			
			//Unbind all other associations from product to demonstrate hasMany relation
			$this->Product->unbindModel(array('hasOne' => array('ProductDetail')));
			$this->Product->unbindModel(array('belongsTo' => array('User')));
			$this->Product->unbindModel(array('hasAndBelongsToMany' => array('Category')));
			
			$data = $this->Product->find('all');
		}
		elseif(@$this->params['named']['param'] == "belongsTo") { //Product belongsTo User
			
			//Unbind all other associations from product to demonstrate belongsTo relation
			$this->Product->unbindModel(array('hasOne' => array('ProductDetail')));
			$this->Product->unbindModel(array('hasMany' => array('Image')));
			$this->Product->unbindModel(array('hasAndBelongsToMany' => array('Category')));
			
			$data = $this->Product->find('all');
		}
		elseif(@$this->params['named']['param'] == "hasAndBelongsToMany") { //hasAndBelongsToMany belongsTo Category
			
			//Unbind all other associations from product to demonstrate hasAndBelongsToMany relation
			$this->Product->unbindModel(array('hasOne' => array('ProductDetail')));
			$this->Product->unbindModel(array('hasMany' => array('Image')));
			$this->Product->unbindModel(array('belongsTo' => array('User')));
			
			$data = $this->Product->find('all');
		}
		else {
			//$this->Product->recursive = 1;
			$data = $this->Product->find('all');
		}
		
		$this->set("data",$data);
		
		$this->set("param",@$this->params['named']['param']);
	}
}
