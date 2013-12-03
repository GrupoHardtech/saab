alter VIEW `pruebasaab`.`detconsumo` AS
  SELECT b.idbien as 'codbien',p.idpecosa as 'codsalida',p.IDREQUERIMIENTO AS 'codreq', c.cat_descripcion as 'bien', b.bie_caracteristica as 'caracteristica',
        p.pec_fecha as 'fecha',concat_ws(' ',pe.PER_nombres,pe.PER_paterno,pe.PER_materno) AS 'nombre',
        pb.pbi_cantidad as 'cantidad'
  FROM bien b join catalogo c on b.idcatalogo=c.idcatalogo
       join pecosa_bien pb on b.idbien=pb.idbien
       join pecosa p on pb.idpecosa=p.idpecosa
       join requerimiento r on p.idrequerimiento=r.idrequerimiento
       join usuario u on r.idusuario=u.idusuario
       join personal pe on u.idpersonal=pe.idpersonal
 order by b.idbien,p.idpecosa;