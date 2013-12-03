<?php
/* @var $this BienController */
/* @var $model Bien */

$this->breadcrumbs=array(
	'Bienes'=>array('index'),
	'Bien N° '.$model->IDBIEN,
);
?>

<h2>Bien N° <?php echo $model->IDBIEN; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDBIEN',
		'BIE_stockActual',
		'BIE_stockMinimo',
		'BIE_caracteristica',
		'BIE_marca',
		'IDCATALOGO',
                'BIE_precio',
	),
)); ?>
