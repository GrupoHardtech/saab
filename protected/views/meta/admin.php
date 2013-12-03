<?php
$this->breadcrumbs=array(
	'Metas'=>array('index'),
	'Inicio',
);

$this->menu=array(
	array('label'=>'List Meta','url'=>array('index')),
	array('label'=>'Create Meta','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('meta-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('Busqueda','#',array('class'=>'search-button btn')); ?>

<?php echo CHtml::link('Registrar Proveedor','/saab/meta/create',array('class'=>'pull-right btn btn-primary')); ?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<br/>
<hr>
<h3>Metas</h3>
<br/>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'meta-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'type'=>'bordered hover',
    'template'=>"{items}{pager}",

	'columns'=>array(
		'CODMETA',
		'MET_descripcion',
		array(
			'header'=>'Detalles',
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>"{view}{update}{add}",
		),
	),
)); ?>
