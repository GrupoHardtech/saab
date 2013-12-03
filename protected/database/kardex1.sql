alter VIEW `pruebasaab`.`kardex1` AS
  SELECT distinct b.idbien as 'iDBien', c.cat_descripcion as 'bien',b.bie_caracteristica as 'caracteristica',
         c.cat_unidad as 'medida', b.bie_stockactual as 'stockActual', b.bie_stockminimo as 'stockMinimo'
  FROM bien b join catalogo c on b.idcatalogo=c.idcatalogo
       join entrada_bien eb on b.idbien=eb.idbien
        join pecosa_bien pb on pb.idbien=b.idbien
 where eb.identrada!='' and pb.idpecosa!='';