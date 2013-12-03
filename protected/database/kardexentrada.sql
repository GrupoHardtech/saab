CREATE VIEW `pruebasaab`.`kardexEntrada` AS
  SELECT b.idbien as 'iDBien',e.ent_fecha as 'fecha', eb.ebi_cantidad as 'cantidadEntrada', eb.ebi_preciocompra as 'precioUnit',
         eo.eoc_documento as 'numDocumento'
  FROM bien b join catalogo c on b.idcatalogo=c.idcatalogo
       join entrada_bien eb on b.idbien=eb.idbien
       join entrada e on eb.identrada=e.identrada
       join entrada_oc eo on e.identrada=eo.identrada;