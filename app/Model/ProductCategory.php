<?php
class ProductCategory extends AppModel{
	public $name = 'ProductCategory';
	
	public $belongsTo = array('Product' =>
					array('className'     => 'Product',
					'foreignKey'    => 'product_id'
					),
					'Category' =>
					array('className'     => 'Category',
					'foreignKey'    => 'category_id'
					)
				);
	
}
?>