<div style="width:100%;">
<?php
if($param == "hasOne") {
	echo "<h3>Product hasOne ProductDetail</h3>";
	?>
	<div style="float:left">
		<?php pr($data); ?>
	</div>
	<div style="float:left">
		<?php echo $this->Html->image('hasOne.jpg'); ?>
	</div>
	<?php
	
}
elseif($param == "hasMany") {
	echo "<h3>Product hasMany Image</h3>";
	?>
	<div style="float:left">
		<?php pr($data); ?>
	</div>
	<div style="float:left">
		<?php echo $this->Html->image('hasMany.jpg'); ?>
	</div>
	<?php
}
elseif($param == "belongsTo") {
	echo "<h3>Product belongsTo User</h3>";
	?>
	<div style="float:left">
		<?php pr($data); ?>
	</div>
	<div style="float:left">
		<?php echo $this->Html->image('belongsTo.jpg'); ?>
	</div>
	<?php
}
elseif($param == "hasAndBelongsToMany") {
	echo "<h3>Product hasAndBelongsToMany belongsTo Category</h3>";
	?>
	<div style="float:left">
		<?php pr($data); ?>
	</div>
	<div style="float:left">
		<?php echo $this->Html->image('hasAndBelongsToMany.jpg'); ?>
	</div>
	<?php
}
else {
	echo "<h3>All types of association in the Product Model</h3>";
	?>
	<div style="float:left">
		<?php pr($data); ?>
	</div>
	<div style="float:left">
		<?php echo $this->Html->image('all.jpg'); ?>
	</div>
	<?php
}
?>
</div>
