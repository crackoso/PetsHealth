<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $vacuna->getId() ?></td>
    </tr>
    <tr>
      <th>Mascota:</th>
      <td><?php echo $vacuna->getMascotaId() ?></td>
    </tr>
    <tr>
      <th>Vacuna:</th>
      <td><?php echo $vacuna->getVacuna() ?></td>
    </tr>
    <tr>
      <th>Fecha aplicacion:</th>
      <td><?php echo $vacuna->getFechaAplicacion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('vacuna/edit?id='.$vacuna->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('vacuna/index') ?>">List</a>
