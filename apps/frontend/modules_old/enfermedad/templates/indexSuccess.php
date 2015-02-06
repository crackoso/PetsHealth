<h1>Enfermedads List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Mascota</th>
      <th>Enfermedad</th>
      <th>Tratamiento</th>
      <th>Fecha</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($enfermedads as $enfermedad): ?>
    <tr>
      <td><a href="<?php echo url_for('enfermedad/show?id='.$enfermedad->getId()) ?>"><?php echo $enfermedad->getId() ?></a></td>
      <td><?php echo $enfermedad->getMascotaId() ?></td>
      <td><?php echo $enfermedad->getEnfermedad() ?></td>
      <td><?php echo $enfermedad->getTratamiento() ?></td>
      <td><?php echo $enfermedad->getFecha() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('enfermedad/new') ?>">New</a>
