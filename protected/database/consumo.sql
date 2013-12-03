CREATE VIEW `pruebasaab`.`consumo` AS
  SELECT distinct b.idbien as 'id', c.cat_descripcion as 'bien', b.bie_caracteristica as 'caracteristica',
        sum(pb.pbi_cantidad) as 'total'
  FROM bien b join catalogo c on b.idcatalogo=c.idcatalogo
       join pecosa_bien pb on b.idbien=pb.idbien
       join pecosa p on pb.idpecosa=p.idpecosa
 group by pb.idbien;