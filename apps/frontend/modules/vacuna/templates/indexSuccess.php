<h1>Vacunas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Mascota</th>
      <th>Vacuna</th>
      <th>Fecha aplicacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($vacunas as $vacuna): ?>
    <tr>
      <td><a href="<?php echo url_for('vacuna/show?id='.$vacuna->getId()) ?>"><?php echo $vacuna->getId() ?></a></td>
      <td><?php echo $vacuna->getMascotaId() ?></td>
      <td><?php echo $vacuna->getVacuna() ?></td>
      <td><?php echo $vacuna->getFechaAplicacion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('vacuna/new') ?>">New</a>
