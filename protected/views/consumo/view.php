<?php
/* @var $this ConsumoController */
/* @var $model Consumo */

$this->breadcrumbs=array(
	'Consumos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Consumo', 'url'=>array('index')),
	array('label'=>'Create Consumo', 'url'=>array('create')),
	array('label'=>'Update Consumo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Consumo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Consumo', 'url'=>array('admin')),
);
?>

<h1>View Consumo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'bien',
		'caracteristica',
		'total',
	),
)); ?>
