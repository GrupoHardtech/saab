alter VIEW `pruebasaab`.`Reuqerimientos1` AS
  SELECT r.idrequerimiento as 'N° Requerimiento', r.req_estado as 'estado',
         r.req_fecha as 'Fecha', r.req_presupuesto as 'Presupuesto',
         concat_ws(' ',p.per_nombres,p.per_paterno,p.per_materno) as 'nombre',
         m.met_descripcion as 'Meta'
  FROM Requerimiento r join usuario u on r.idusuario=u.idusuario join
       personal p on u.idpersonal=p.idpersonal join
       meta m on r.codmeta=m.codmeta;