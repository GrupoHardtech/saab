<!--?php
/* @var $this Kardex1Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kardex1s',
);

$this->menu=array(
	array('label'=>'Create Kardex1', 'url'=>array('create')),
	array('label'=>'Manage Kardex1', 'url'=>array('admin')),
);
?>

<h1>Kardex1s</h1-->

<!--?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?-->

<?php
/* @var $this BienController */
/* @var $dataProvider CActiveDataProvider */
header('Location:'.Yii::app()->request->baseUrl.'/kardex1/admin');
?>
