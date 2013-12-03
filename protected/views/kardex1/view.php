<?php
/* @var $this Kardex1Controller */
/* @var $model Kardex1 */

$this->breadcrumbs = array(
    'Kardex' => array('index'),
    $model->iDBien,
);
?>

<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'kardex1-form',
    'enableAjaxValidation' => false,
        // 'enableClientValidation'=>false,
        // 'clientOptions'=>array(
        //     'validateOnSubmit'=>true,
        //   )
        ));
?>

<?php echo $form->errorSummary($model); ?>

<h3 class ="center">Kardex</h3>
<h4 class="center">Producto N° <?php echo $model->iDBien; ?></h4>
<br>
<div class="row-fluid">
    <div class="row-fluid">
        <div class="span12">
            <!-- Form of previsualization of requirement begins -->
            <form class="form-horizontal">
                <div class="control-group pull-right">
                    <label class="control-label">Stock Actual:</label>
                    <div class="controls"><p><?php echo $model->stockActual ?></p></div>
                </div>
                <div class="control-group">
                    <label class="control-label">Producto:</label>
                    <div class="controls"><p><?php echo $model->bien ?></p></div>
                </div>
                <div class="control-group pull-right">
                    <label class="control-label">Stock Minimo:</label>
                    <div class="controls"><p><?php echo $model->stockMinimo ?></p></div>
                </div>
                <div class="control-group">
                    <label class="control-label">Medida:</label>
                    <div class="controls"><p><?php echo $model->medida ?></p></div>
                </div>
                <div class="span11">
                    <?php
                    $columns = array();
                    $i = 0;

                    array_push($columns, array(
                        'header' => 'N°',
                        'value' => function($data) use(&$i) {
                            return++$i;
                        },
                            )
                    );
                    array_push($columns, array(
                        'header' => 'Fecha Entrada',
                        'value' => function($data) {
                            $entrada = Kardexentrada::model()->findByAttributes(array('iDBien' => $data->iDBien));
                            return $entrada->fecha;
                        },
                            )
                    );
//                    array_push($columns, array(
//                        'header' => 'Fecha Salida',
//                        'value' => function($data) {
//                            $salida = Kardexsalida::model()->findByAttributes(array('iDBien' => $data->iDBien));
//                            return $salida->fechaSalida;
//                        },
//                            )
//                    );
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
            </form>
            <br>
            <!-- Form of previsualization of requirement ends -->
        </div>
    </div>
    <?php $this->endWidget(); ?>
    <div class="control-group center">
        <div class="controls">
            <a id='imprimir' href='?imprimir' target='_blank' class="btn inline" >Imprimir Detalle Kardex</a>
        </div>
    </div>
    <br>

