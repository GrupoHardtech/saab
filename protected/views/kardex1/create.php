<?php
/* @var $this Kardex1Controller */
/* @var $model Kardex1 */

$this->breadcrumbs=array(
	'Kardex1s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kardex1', 'url'=>array('index')),
	array('label'=>'Manage Kardex1', 'url'=>array('admin')),
);
?>

<h1>Create Kardex1</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>