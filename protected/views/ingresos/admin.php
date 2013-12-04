<?php
/* @var $this IngresosController */
/* @var $model Ingresos */

$this->breadcrumbs=array(
	'Ingresoses'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ingresos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<br/><br/>
<hr>
<h3>Ingresos Totales por Bien</h3>
<br/>

<div class="span10 offset1">
<?php
$columns=array();

array_push($columns, array(
	'header' => 'N°',
	'value'=>'$data->id',
	)
);

array_push($columns, array(
	'header' => 'Bien',
	'value'=>'$data->bien',
	)
);

array_push($columns, array(
	'header' => 'Caracteristica',
	'value'=>'$data->caracteristica',
	)
);

array_push($columns, array(
	'header' => 'Total Consumo',
	'value'=>'$data->total',
	)
);

if (Yii::app()->user->checkAccess("administrador")) {
        array_push($columns, array(
            'name' => 'buttons',
            'header' => 'Opc',
            'type' => 'raw',
            'htmlOptions' => array('class' => 'button-column'),
            'value' => function($data) {
                $html = "";
                    $html .= CHtml::link("<i class='icon-eye-open'></i>", array('view', 'id' => $data->id), array('title' => 'Detalle',));
                return $html;
            },
        ));
    }

 $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'ingresos-grid',
	'dataProvider'=>$model->search(),
    'type'=>'bordered hover',
    'template'=>"{items}{pager}",
//	'filter'=>$model,
	'columns'=>$columns,
)); ?>
</div>


<!--?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ingresos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'bien',
		'caracteristica',
		'total',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?-->
