<?php
class User extends AppModel{
	public $name = 'User';
	
	var $hasMany = array('Product' => 
							array('className'=>'Product',
							'foreignKey'=>'user_id'
						)
					);
	
}
?>