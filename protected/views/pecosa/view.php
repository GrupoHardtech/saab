<?php
$this->breadcrumbs=array(
	'Pecosa'=>array('index'),
);
?>


<h2 class="center">Pedido - Comprobante de Salida</h2>
<h3 class="center">Nº <?php echo $model->IDPECOSA?></h3>
<br>


	<div class="row-fluid">
          <div class="span12">
            <!-- Form header of check in begins -->
            <div class="form-horizontal">
              <div class="control-group">
                <label class="control-label">Requerimiento N°:</label>
                <div class="controls"><p><?php echo $model->iDREQUERIMIENTO->IDREQUERIMIENTO?></p></div>
              </div>
              <div class="control-group">
                <label class="control-label">Solicito entregar a:</label>
                <div class="controls"><p><?php echo $model->iDUSUARIO->iDPERSONAL->PER_paterno." ".$model->iDUSUARIO->iDPERSONAL->PER_materno.", ".$model->iDUSUARIO->iDPERSONAL->PER_nombres?></p></div>
              </div>
              <div class="control-group">
                <label class="control-label">Lo siguiente:</label>
                <div class="controls"><p></p></div>
              </div>
            </div>
            <!-- Form header of check in ends -->
          </div>
  </div>

<div id="bienes">

	<?php $this->renderPartial('_details2',array('requerimiento_bien'=>$requerimiento_bien)); ?>

</div>
      <div class="control-group center">
        <div class="controls">
          <a id='imprimir' href='?imprimir' target='_blank' class="btn inline" >Imprimir Orden de Compra</a>
          
        </div>
      </div>
<br>

