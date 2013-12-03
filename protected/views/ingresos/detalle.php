<?php
$this->breadcrumbs = array(
    'Ingresos' => array('index'),
    'Detalle',
);
?>

<h2 class ="center">Ingreso Detallado</h2>
<h3 class="center">N° Bien <?php echo $model->codbien; ?></h3>
<br>
<div class="row-fluid">
    <div class="row-fluid">
        <div class="span12">
            <!-- Form of previsualization of requirement begins -->
            <form class="form-horizontal">
                <div class="control-group">
                    <?php
                    $this->widget('bootstrap.widgets.TbGridView', array(
                        'type' => 'bordered',
                        'dataProvider' => $model->search(),
                        'template' => "{items}",
                            )
                    );
                    ?>
                </div>
                <div class="control-group center">
                    <div class="controls">
                        <a id='imprimir' href='?imprimir' target='_blank' class="btn inline" >Imprimir Detalle de Ingreso</a>

                    </div>
                </div>
            </form>
            <br><br>
            <!-- Form of previsualization of requirement ends -->

        </div>
    </div>

