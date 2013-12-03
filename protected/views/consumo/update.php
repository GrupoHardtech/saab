<?php
/* @var $this ConsumoController */
/* @var $model Consumo */

$this->breadcrumbs=array(
	'Consumos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Consumo', 'url'=>array('index')),
	array('label'=>'Create Consumo', 'url'=>array('create')),
	array('label'=>'View Consumo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Consumo', 'url'=>array('admin')),
);
?>

<h1>Update Consumo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>