CREATE VIEW `pruebasaab`.`kardexsalida` AS
  SELECT b.idbien as 'iDBien',
         p.pec_fecha as 'fechaSalida', pb.pbi_cantidad as 'cantidadSalida',p.idpecosa as 'numDocumento'
  FROM bien b join catalogo c on b.idcatalogo=c.idcatalogo
       join pecosa_bien pb on pb.idbien=b.idbien
       join pecosa p on pb.idpecosa=p.idpecosa;