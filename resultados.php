<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
  </head>
  <body>
    <h4>Resultados de busqueda</h4>
    <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th>N°</th>
          <th>Autor</th>
          <th>Partido politico</th>
          <th>Ley</th>
          <th>Articulo</th>
        </tr>
      </thead>
      <?php
        for ($i=0;$i<count($reg);$i++){
      ?>
      <tbody>
        <tr>
          <td> <?php ($i)+1;?></td>
          <td> <?php $reg[$i]['nombre'];?> </td>
          <td> <?php $reg[$i]['partido_politico'];?> </td>
          <td> <?php $reg[$i]['ley'];?> </td>
          <td> <?php $reg[$i]['articulo'];?> </td>
        </tr>
      </tbody>
  
      <?php 
        }
      ?>
    </table>
  </body>
</html>