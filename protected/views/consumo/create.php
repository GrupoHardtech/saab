<?php
/* @var $this ConsumoController */
/* @var $model Consumo */

$this->breadcrumbs=array(
	'Consumos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Consumo', 'url'=>array('index')),
	array('label'=>'Manage Consumo', 'url'=>array('admin')),
);
?>

<h1>Create Consumo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>