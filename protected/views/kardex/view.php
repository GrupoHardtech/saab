<?php
$this->breadcrumbs = array(
    // $this->module_title => array('default/index'),
    // $this->singular => array('product/index'),
    'Kardex de Producto N° '.$model->IDBIEN,
);
?>

<h2 class="text-center">Kardex de Producto</h2>
<h4 class="text-center">N° <?php echo $model->IDBIEN; ?></h4>
<br>

<div class="row-fluid">
    <div class="span12">
      <table>
        <tr><td><strong>Producto:</strong></td><td><?php echo $model->iDCATALOGO->CAT_descripcion; ?></td></tr>
        <tr><td><strong>Código:</strong></td><td><?php echo $model->IDBIEN; ?></td></tr>
      </table>
    </div>
</div>

<br>

<div class="row-fluid">
  <h4>Lista de Movimientos</h4>
  <?php
  $columns = array();
  $total = 0;

  array_push($columns, array(
      'name' => 'fecha',
      'htmlOptions' => array('style'=>'text-align:center'),
      'type' => 'raw',
      'value' => function($row) {
          return date('d-m-Y',strtotime($row->fecha));
      },
  ));

  array_push($columns, array(
      'name' => 'documento',
      'type' => 'raw',
      'value' => function($row) {
          return $row->documento;
      },
  ));

  array_push($columns, array(
      'name' => 'descripcion',
      'type' => 'raw',
      'value' => function($row) {
          return $row->descripcion;
      },
  ));

  array_push($columns, array(
      'name' => 'entradas',
      'htmlOptions' => array('style'=>'text-align:center'),
      'type' => 'raw',
      'value' => function($row) {
          return $row->entradas;
      },
  ));

  array_push($columns, array(
      'name' => 'salidas',
      'htmlOptions' => array('style'=>'text-align:center'),
      'type' => 'raw',
      'value' => function($row) {
          return $row->salidas;
      },
  ));

  $dataProvider->pagination = false;
  $gridParams = array(
      'id' => 'SaleViewDetail',
      'type' => 'hover bordered condensed',
      'dataProvider' => $dataProvider,
      'enableSorting' => false,
      'selectableRows' => 0,
      'columns' => $columns,
      'template' => '{items}',
  );
  $this->widget('bootstrap.widgets.TbGridView', $gridParams);
  ?>
</div>

