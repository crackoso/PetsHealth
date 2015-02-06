<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $mascota->getId() ?></td>
    </tr>
    <tr>
      <th>Usuario:</th>
      <td><?php echo $mascota->getUsuarioId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $mascota->getNombre() ?></td>
    </tr>
    <tr>
      <th>Fecha nacimiento:</th>
      <td><?php echo $mascota->getFechaNacimiento() ?></td>
    </tr>
    <tr>
      <th>Especie:</th>
      <td><?php echo $mascota->getEspecie() ?></td>
    </tr>
    <tr>
      <th>Raza:</th>
      <td><?php echo $mascota->getRaza() ?></td>
    </tr>
    <tr>
      <th>Tamano:</th>
      <td><?php echo $mascota->getTamano() ?></td>
    </tr>
    <tr>
      <th>Sexo:</th>
      <td><?php echo $mascota->getSexo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('mascota/edit?id='.$mascota->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('mascota/index') ?>">List</a>
