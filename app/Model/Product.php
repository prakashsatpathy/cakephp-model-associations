<?php
class Product extends AppModel{
	public $name = 'Product';
	//public $recursive = -1;
	
	var $hasOne = array('ProductDetail' => 
							array('className'=>'ProductDetail',
							'foreignKey'=>'product_id')
					
					);
	
	var $hasMany = array('Image' => 
							array('className'=>'Image',
							'foreignKey'=>'product_id')
					
					);
					
	var $belongsTo = array('User' => 
							array('className'=>'User',
							'foreignKey'=>'user_id'
						)
					);
					
	public $hasAndBelongsToMany = array(
        'Category' =>
            array(
                'className'              => 'Category',
                'joinTable'              => 'product_categories',
                'foreignKey'             => 'product_id',
                'associationForeignKey'  => 'category_id'
            )
    );
	
}
?>