<?php
class Image extends AppModel{
	public $name = 'Image';
	
	var $belongsTo = array('Product' => 
							array('className'=>'Product',
							'foreignKey'=>'product_id'
						)
					);
	
}
?>