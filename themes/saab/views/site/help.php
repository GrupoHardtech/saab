<h1>Bienvenido a la ayuda.</h1>
<br>
<?php
if (Yii::app()->user->checkAccess("administrador")) {
  $this->widget('zii.widgets.jui.CJuiAccordion',array(
    'panels'=>array(
        'Requerimientos'=>$this->renderPartial('help/_requerimiento',null,true),
        'Cotizaciones'=>$this->renderPartial('help/_cotizacion',null,true),
        'Contraseña'=>$this->renderPartial('help/_contrasena',null,true),
        // 'panel 2'=>'content for panel 2',
        // panel 3 contains the content rendered by a partial view
        // 'panel 3'=>$this->renderPartial('_renderpage',null,true),
        // 'controlador y accion'=>$var." ".$var2,
    ),
    'options'=>array(
        'collapsible'=> true,
        'animated'=>'bounceslide',
        'autoHeight'=>false,
        'active'=>2,
    ),
  ));
} else {
  $this->widget('zii.widgets.jui.CJuiAccordion',array(
    'panels'=>array(
        'Requerimientos'=>$this->renderPartial('help/_requerimiento',null,true),
        'Contraseña'=>$this->renderPartial('help/_contrasena',null,true),
    ),
    'options'=>array(
        'collapsible'=> true,
        'animated'=>'bounceslide',
        'autoHeight'=>false,
        'active'=>2,
    ),
  ));
}
?>
<br>