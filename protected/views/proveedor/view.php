<?php
$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->IDPROVEEDOR,
);

$this->menu=array(
	array('label'=>'List Proveedor','url'=>array('index')),
	array('label'=>'Create Proveedor','url'=>array('create')),
	array('label'=>'Update Proveedor','url'=>array('update','id'=>$model->IDPROVEEDOR)),
	array('label'=>'Delete Proveedor','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->IDPROVEEDOR),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proveedor','url'=>array('admin')),
);
?>

<h3>Proveedor <?php echo $model->PRO_razonSocial; ?></h3>

<?php echo CHtml::link('Regresar','/saab/proveedor/admin',array('class'=>'pull-right btn btn-primary')); ?>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'IDPROVEEDOR',
		'PRO_razonSocial',
		'PRO_ruc',
		'PRO_rubro',
		'PRO_ciudad',
		'PRO_telefono',
		'PRO_fax',
		'PRO_direccion',
		'PRO_banco',
		'PRO_cci',
		'PRO_contacto',
		'PRO_celular',
	),
)); ?>
