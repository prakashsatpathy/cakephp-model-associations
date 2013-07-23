<?php
class ProductDetail extends AppModel{
	public $name = 'ProductDetail';
	
	var $belongsTo = array('Product' => 
							array('className'=>'Product',
							'foreignKey'=>'product_id'
						)
					);
}
?>