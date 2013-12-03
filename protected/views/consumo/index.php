<!--?php
/* @var $this ConsumoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Consumos',
);

$this->menu=array(
	array('label'=>'Create Consumo', 'url'=>array('create')),
	array('label'=>'Manage Consumo', 'url'=>array('admin')),
);
?>

<h1>Consumos</h1>

<!--?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?-->

<?php
/* @var $this BienController */
/* @var $dataProvider CActiveDataProvider */
header('Location:'.Yii::app()->request->baseUrl.'/consumo/admin');
?>
