CREATE VIEW `pruebasaab`.`detingresos` AS
SELECT b.idbien as 'codbien',e.identrada as 'codentrada', c.cat_descripcion as 'bien', b.bie_caracteristica as 'caracteristica',
        e.ent_fecha as 'fecha',eb.ebi_cantidad as 'cantidad', eb.ebi_preciocompra as 'precio'
  FROM bien b join catalogo c on b.idcatalogo=c.idcatalogo
       join entrada_bien eb on b.idbien=eb.idbien
       join entrada e on eb.identrada=e.identrada
 order by b.idbien,e.identrada;