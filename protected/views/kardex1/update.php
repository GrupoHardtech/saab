<?php
/* @var $this Kardex1Controller */
/* @var $model Kardex1 */

$this->breadcrumbs=array(
	'Kardex1s'=>array('index'),
	$model->iDBien=>array('view','id'=>$model->iDBien),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kardex1', 'url'=>array('index')),
	array('label'=>'Create Kardex1', 'url'=>array('create')),
	array('label'=>'View Kardex1', 'url'=>array('view', 'id'=>$model->iDBien)),
	array('label'=>'Manage Kardex1', 'url'=>array('admin')),
);
?>

<h1>Update Kardex1 <?php echo $model->iDBien; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>