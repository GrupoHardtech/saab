DROP VIEW IF EXISTS `pruebasaab`.`almacen1`;
CREATE OR REPLACE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost`
SQL SECURITY DEFINER VIEW `almacen1`
AS
select `eb`.`IDBIEN` AS `iDBien`,`oc`.`IDREQUERIMIENTO` AS `nun_Requeriemitno`,`k`.`IDKARDEX` AS `kardex`,`k`.`KAR_fechaMovimiento` AS `fecha`,
        `c`.`CAT_descripcion` AS `bien`,`b`.`BIE_stockActual` AS `stockActual`,`eb`.`EBI_cantidad` AS `cantidad`,
        `eb`.`EBI_precioCompra` AS `prcioUnit`,`eo`.`EOC_documento` AS `num_Doc_Compra` from (((((`kardex` `k` join `entrada_bien` `eb` on((`k`.`IDENTRADABIEN` = `eb`.`IDENTRADABIEN`))) join `bien` `b` on((`eb`.`IDBIEN` = `b`.`IDBIEN`))) join `catalogo` `c` on((`b`.`IDCATALOGO` = `c`.`IDCATALOGO`))) join `entrada_oc` `eo` on((`eb`.`IDENTRADA` = `eo`.`IDENTRADA`))) join `orden_compra` `oc` on((`eo`.`IDORDENCOMPRA` = `oc`.`IDORDENCOMPRA`)));