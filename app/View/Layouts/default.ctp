<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'cakePHP 2.2.3 example');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Andolasoft :: CakePHP Model Association
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('style');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div style="float:left">
				<div style="float:left">
					<h1 style="float:left"><?php echo $this->Html->link($this->Html->image('logo.png', array('alt' => 'Andolasoft', 'border' => '0','style'=>'width:160px;height:40px;')),array('controller'=>'users', 'action'=>'index'),array('escape' => false)); ?></h1>
				</div>
				<div style="float:left;padding-left:30px;padding-top:5px;">
					<h2>Model Association</h2>
				</div>
			</div>
			<div style="float:right">
				<h4 style="float:right"><?php echo $this->Html->link('hasAndBelongsToMany',array('controller'=>'Users', 'action'=>'index','param'=>'hasAndBelongsToMany')); ?></h4>
				<h4 style="float:right;margin:0 5px">|</h4>
				<h4 style="float:right"><?php echo $this->Html->link('belongsTo',array('controller'=>'Users', 'action'=>'index','param'=>'belongsTo')); ?></h4>
				<h4 style="float:right;margin:0 5px">|</h4>
				<h4 style="float:right"><?php echo $this->Html->link('hasMany',array('controller'=>'Users', 'action'=>'index','param'=>'hasMany')); ?></h4>
				<h4 style="float:right;margin:0 5px">|</h4>
				<h4 style="float:right"><?php echo $this->Html->link('hasOne',array('controller'=>'Users', 'action'=>'index','param'=>'hasOne')); ?></h4>
				
			</div>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			Copyright &copy; 2009-2013 Andolasoft. All rights reserved.
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
