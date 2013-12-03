<?php
/* @var $this Kardex1Controller */
/* @var $model Kardex1 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kardex1-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'iDBien'); ?>
		<?php echo $form->textField($model,'iDBien'); ?>
		<?php echo $form->error($model,'iDBien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bien'); ?>
		<?php echo $form->textField($model,'bien',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'bien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caracteristica'); ?>
		<?php echo $form->textField($model,'caracteristica',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'caracteristica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medida'); ?>
		<?php echo $form->textField($model,'medida',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'medida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stockActual'); ?>
		<?php echo $form->textField($model,'stockActual'); ?>
		<?php echo $form->error($model,'stockActual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stockMinimo'); ?>
		<?php echo $form->textField($model,'stockMinimo'); ?>
		<?php echo $form->error($model,'stockMinimo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->