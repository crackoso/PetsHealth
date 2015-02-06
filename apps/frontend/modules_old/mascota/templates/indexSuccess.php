<h1>Mascotas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Usuario</th>
      <th>Nombre</th>
      <th>Fecha nacimiento</th>
      <th>Especie</th>
      <th>Raza</th>
      <th>Tamano</th>
      <th>Sexo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mascotas as $mascota): ?>
    <tr>
      <td><a href="<?php echo url_for('mascota/show?id='.$mascota->getId()) ?>"><?php echo $mascota->getId() ?></a></td>
      <td><?php echo $mascota->getUsuarioId() ?></td>
      <td><?php echo $mascota->getNombre() ?></td>
      <td><?php echo $mascota->getFechaNacimiento() ?></td>
      <td><?php echo $mascota->getEspecie() ?></td>
      <td><?php echo $mascota->getRaza() ?></td>
      <td><?php echo $mascota->getTamano() ?></td>
      <td><?php echo $mascota->getSexo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('mascota/new') ?>">New</a>
