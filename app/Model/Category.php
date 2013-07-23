<?php
class Category extends AppModel {
	var $name = 'Category';
	
	var $belongsTo = array(
		'ParentCategory' => array(
			'className' => 'Category',
			'foreignKey' => 'parent_id'
		)
	);
					
	public $hasAndBelongsToMany = array(
        'Product' =>
            array(
                'className'              => 'Product',
                'joinTable'              => 'product_categories',
                'foreignKey'             => 'category_id',
                'associationForeignKey'  => 'product_id'
            )
    );
	
}