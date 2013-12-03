CREATE VIEW `pruebasaab`.`ingresos` AS
  SELECT distinct b.idbien as 'id', c.cat_descripcion as 'bien', b.bie_caracteristica as 'caracteristica',
        sum(eb.ebi_cantidad) as 'total'
  FROM bien b join catalogo c on b.idcatalogo=c.idcatalogo
       join entrada_bien eb on b.idbien=eb.idbien
 group by eb.idbien;