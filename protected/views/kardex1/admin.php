<?php
/* @var $this Kardex1Controller */
/* @var $model Kardex1 */

$this->breadcrumbs = array(
    'Kardex' => array('index'),
    'Productos',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kardex1-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="search-form">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->
<br/><br/>
<hr>
<h3>Kardex</h3>
<br/>

<div class="span11">
    <?php
    $columns = array();

    array_push($columns, array(
        'header' => 'Bien',
        'value' => '$data->bien',
            )
    );
    array_push($columns, array(
        'header' => 'Caracteristicas',
        'value' => '$data->caracteristica',
            )
    );
    array_push($columns, array(
        'header' => 'Medida',
        'value' => '$data->medida',
            )
    );
    array_push($columns, array(
        'header' => 'Stock Actual',
        'value' => '$data->stockActual',
            )
    );
    array_push($columns, array(
        'header' => 'Stock Minimo',
        'value' => '$data->stockMinimo',
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
                    $html .= CHtml::link("<i class='icon-eye-open'></i>", array('view', 'id' => $data->iDBien), array('title' => 'Verificar',));
                return $html;
            },
        ));
    }

    $this->widget('bootstrap.widgets.TbGridView', array(
        'id' => 'kardex1-grid',
        'dataProvider' => $model->search(),
        'type' => 'bordered hover',
        'template' => "{items}{pager}",
//        'filter' => $model,
        'columns' => $columns,
    ));
    ?>
</div>
