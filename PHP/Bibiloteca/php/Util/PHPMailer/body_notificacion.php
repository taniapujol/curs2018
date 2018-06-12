<?php 
// cuerpo del email de notificacion
?>
<h3>Le imformamos que ha vencido la fecha de disposición del prestamo:</h3>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Codigo de Prestamos</th>
      <th scope="col">Obra</th>
      <th scope="col">Categoria</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?=$datos['id_prestamos']?></td>
      <td><?=$datos['obra']?></td>
      <td><?=$datos['cat']?></td>
    </tr>
  </tbody>
</table>
