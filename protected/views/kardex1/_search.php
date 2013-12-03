<?php
/* @var $this Kardex1Controller */
/* @var $model Kardex1 */
/* @var $form CActiveForm */
?>

<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
    'type' => 'vertical'
        ));
?>


<div class="span8 input-append">
    <?php
    $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'model' => $model,
        'attribute' => 'bien',
        'source' => $this->createUrl('kardex1/buscaBien'),
        //'sourceUrl'=>$this->createUrl(RequerimientoController::actionGetPostalCodeAction()),
        'options' => array(
            'minLength' => '1',
        ),
        'htmlOptions' => array('class' => 'span12 enabled', 'placeholder' => 'buscar bien..'),
        'options' => array(
            'showAnim' => 'fold',
            'beforeSend' => 'js:function(){        
                                                            //$("#loading").html("LOADING IMAGE HERE");               
                                                  }',
            'complete' => 'js:function(){
                                                            //$("#loading").html("");
                                                  }',
            'select' => 'js:function(event, ui){ 
                                                            //alert(ui.item.id+" "+ui.item.label + " "+ui.item.value);
//                                                          jQuery("#unidad_catalogo").val(ui.item["unidad"]);
//                                                          jQuery("#idbien").val(ui.item["id"]);  
                                                          
                                                  }'
        ),
    ));
    ?>
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'icon' => 'icon-search',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
