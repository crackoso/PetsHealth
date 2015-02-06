<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $enfermedad->getId() ?></td>
    </tr>
    <tr>
      <th>Mascota:</th>
      <td><?php echo $enfermedad->getMascotaId() ?></td>
    </tr>
    <tr>
      <th>Enfermedad:</th>
      <td><?php echo $enfermedad->getEnfermedad() ?></td>
    </tr>
    <tr>
      <th>Tratamiento:</th>
      <td><?php echo $enfermedad->getTratamiento() ?></td>
    </tr>
    <tr>
      <th>Fecha:</th>
      <td><?php echo $enfermedad->getFecha() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('enfermedad/edit?id='.$enfermedad->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('enfermedad/index') ?>">List</a>
