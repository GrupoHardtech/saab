<?php
/* @var $this Kardex1Controller */
/* @var $data Kardex1 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iDBien')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iDBien), array('view', 'id'=>$data->iDBien)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bien')); ?>:</b>
	<?php echo CHtml::encode($data->bien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caracteristica')); ?>:</b>
	<?php echo CHtml::encode($data->caracteristica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medida')); ?>:</b>
	<?php echo CHtml::encode($data->medida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stockActual')); ?>:</b>
	<?php echo CHtml::encode($data->stockActual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stockMinimo')); ?>:</b>
	<?php echo CHtml::encode($data->stockMinimo); ?>
	<br />


</div>