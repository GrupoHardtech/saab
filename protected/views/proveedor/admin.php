<?php
$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	'Inicio',
);

$this->menu=array(
	array('label'=>'List Proveedor','url'=>array('index')),
	array('label'=>'Create Proveedor','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	
	$('.search-form').toggle();
	
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('proveedor-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<?php echo CHtml::link('Busqueda','#',array('class'=>'search-button btn')); ?>

<?php echo CHtml::link('Registrar Proveedor','/saab/proveedor/create',array('class'=>'pull-right btn btn-primary')); ?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<br/>
<hr>
<h3>Proveedores</h3>
<br/>

<div class="span10 offset1">
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'proveedor-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'type'=>'bordered hover',
    'template'=>"{items}{pager}",
	'columns'=>array(
		// 'IDPROVEEDOR',
		'PRO_razonSocial',
		'PRO_ruc',
		// 'PRO_rubro',
		'PRO_ciudad',
		'PRO_telefono',		
		'PRO_direccion',
		/*
		'PRO_fax',		
		'PRO_contacto',
		'PRO_celular',
		'PRO_banco',
		'PRO_cci',
		*/
		array(
			'header'=>'Detalles',
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>"{view}{update}{add}",
		),
	),
)); ?>
</div>