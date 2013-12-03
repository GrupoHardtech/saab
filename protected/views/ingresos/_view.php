<?php
/* @var $this IngresosController */
/* @var $data Ingresos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bien')); ?>:</b>
	<?php echo CHtml::encode($data->bien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caracteristica')); ?>:</b>
	<?php echo CHtml::encode($data->caracteristica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />


</div>