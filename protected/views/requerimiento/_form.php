<?php
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
  'id'=>'requerimiento-form',
  'enableAjaxValidation'=>false,
  ));
?>

  <?php echo $form->errorSummary($model); ?>

  <?php echo $form->hiddenField($model,'IDUSUARIO',array('class'=>'span5','value'=>$usuario->IDUSUARIO)); ?>

  <?php echo $form->hiddenField($model,'CODMETA',array('class'=>'codmeta span5')); ?>

  <div class="control-group">
    <label id="control-label" class="control-label" for="solicitante">Solicitante:</label>
    <div class="controls">
      <?php echo $usuario->iDPERSONAL->PER_nombres." ".$usuario->iDPERSONAL->PER_paterno." ".$usuario->iDPERSONAL->PER_materno; ?>
    </div>
  </div>

  <div class="control-group">
    <label id="control-label" class="control-label " for="dependencia">Dependencia:</label>
    <div class="controls">
    <?php echo $usuario->iDPERSONAL->iDAREA->ARE_nombre; ?>
    </div>
  </div>
  <div class="control-group">
    <label id="control-label" for="unidad" class="control-label">Unidad:</label>
    <div class="controls">
      <?php echo "Gerencia Regional de Educacion la Libertad";?>
    </div>
  </div>
  <div class="control-group">
    <label id="control-label" for="clasificador" class="control-label">Clasificador:</label>    
    <div class="controls">
      <?php
      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'name'=>'busca_clasificador',
        'id'=>'clasificador',
        'value'=>$clasificador->CLA_descripcion,
        'source'=>$this->createUrl('Requerimiento/buscaClasificador'),
        'options'=>array(
          'minLength'=>'1',
          ),                                                            
        'htmlOptions'=>array('class'=>'span8','placeholder'=>'A que clasificador pertenece..'),  
        'options'=>array(
          'showAnim'=>'fold',
          'select' => 'js:function(event, ui){ 
            jQuery("#CODIGOCLASIFICADOR").val(ui.item["id"]);
            $.ajax({
              type: "post",
              url: "'.Yii::app()->request->baseUrl.'/Requerimiento/idCatalogo",
              data: {                
                idclasificador: ui.item["id"] 
              },
              error:function(req, status, error) {
                alert(req.responseText);
              },
              success: function (data) {
                $("#catalogoBien").removeAttr("disabled");
                $("#catalogoBien").focus();
                $("#cantidadBien").removeAttr("disabled");
              }
            }) 
          }'
        ),));
      ?>
      <input type="hidden" id="CODIGOCLASIFICADOR" placeholder="codigo...">
    </div>
  </div>
  <br>
  <div class="control-group">
    <table class="table tableAdd table-bordered">
      <thead>
        <tr>
          <th style="width:70%">Bien</th>
          <th style="width:20%">Unidad</th>
          <th style="width:5%">Cantidad</th>
          <th style="width:5%" class="button-column">Opciones</th>
        </tr>
        <tr>
          <td>
            <?php 
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
              'name'=>'busca_bien',
              'id'=>'catalogoBien',
              'value'=>$catalogo->IDCATALOGO,
              'source'=>$this->createUrl('Requerimiento/buscaBien/', array('valor'=>'')),
              'options'=>array(
                'minLength'=>'1',
                ),                                                            
              'htmlOptions'=>array('class'=>'span12 enabled','placeholder'=>'Buscar bien..','disabled'=>'true'),  
              'options'=>array(
                'showAnim'=>'fold',
                'beforeSend' => 'js:function(){
                  //$("#loading").html("LOADING IMAGE HERE");               
                }',
                'complete' => 'js:function(){
                  //$("#loading").html("");
                }',
                'select' => 'js:function(event, ui){
                  jQuery("#unidad_catalogo").val(ui.item["unidad"]);
                  jQuery("#idbien").val(ui.item["id"]);
                  $("#cantidadBien").focus();
                }'
                ),
              ));
            ?>
            <input id="idbien" type="hidden">
          </td>
          <td>
            <input class="span12" id="unidad_catalogo" type="text" disabled>
          </td>
          <td>
            <input class="span12" id="cantidadBien" type="text" maxlength="3" disabled>
          </td>
          <td >
          <?php 
          $item=array();
          echo CHtml::link("<i class='icon-plus'></i>",
           array('addItem'),
           array(
            'id' => 'btnAdd',
            'class' => 'btn btn-primary',
            'ajax' => array(
              'type' => 'POST',
              'url' => "js:$(this).attr('href')",
              'data' => array(
                'idbien' => "js: $('#idbien').val()",
                'rbi_cantidad' => "js: $('#cantidadBien').val()",
                'descripcion' => "js: $('#catalogoBien').val()",
                'unidad'=>"js: $('#unidad_catalogo').val()",
                ),
              'error' => "function(req, status, error) {
                alert(req.responseText);
              }",
              'success' => "function(data) {
                $('#clasificador').attr('disabled',true);
                $('#unidad_catalogo').val('');
                $('#idbien').val('');
                $('#cantidadBien').val('');
                $('#catalogoBien').val('');
                $('#catalogoBien').focus();
                $('#order-detail-div').html(data);                                
              }"),
            ));
          ?>
          </td>
        </tr>
      </thead>
    </table>
    <br/>
    <?php
    echo "<div id='order-detail-div'>";
    $this->actionDetails();
    echo "</div>"; 
    ?>
  </div>

  <div class="control-group">
    <label for="observaciones" class="control-label">Utilizado en:</label>
    <div class="controls">
      <?php
      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'name'=>'busca_meta',
        'id'=>'meta',
        'value'=>$meta->MET_descripcion,
        'source'=>$this->createUrl('Requerimiento/buscaMeta'),
        'options'=>array(
          'minLength'=>'1',
          ),
        'htmlOptions'=>array('class'=>'span12','placeholder'=>'Ingresa el nombre de la meta...'),  
        'options'=>array(
          'showAnim'=>'fold',
          'beforeSend' => 'js:function(){
            //$("#loading").html("LOADING IMAGE HERE");               
          }',
          'complete' => 'js:function(){
            //$("#loading").html("");
          }',
          'select' => 'js:function(event, ui){
            jQuery(".codmeta").val(ui.item["id"]);
            var $codmeta= ui.item["id"];
          }'
          ),
        ));
        ?>
    </div>
  </div>

  <div class="control-group center">
    <div class="controls">
      <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType'=>'submit',
        'type'=>'primary',
        'label'=>$model->isNewRecord ? 'Guardar' : 'Actualizar',
        ));
      ?>
      <a class="btn inline secundario" type="button" href="admin">Cancelar</a>
    </div>
  </div>

<?php $this->endWidget(); ?>
