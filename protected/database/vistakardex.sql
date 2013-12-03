CREATE VIEW `pruebasaab`.`vistakardex` AS
  (SELECT b.idbien as 'id', c.cat_descripcion as 'bien', b.bie_caracteristica as 'caracteristica'
  FROM bien b join catalogo c on b.idcatalogo=c.idcatalogo
       join pecosa_bien pb on b.idbien=pb.idbien
       join pecosa p on pb.idpecosa=p.idpecosa
)
union
(SELECT b.idbien as 'id', c.cat_descripcion as 'bien', b.bie_caracteristica as 'caracteristica'
  FROM bien b join catalogo c on b.idcatalogo=c.idcatalogo
       join entrada_bien eb on b.idbien=eb.idbien
)