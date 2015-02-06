<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $usuario->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $usuario->getNombre() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $usuario->getEmail() ?></td>
    </tr>
    <tr>
      <th>Usuario:</th>
      <td><?php echo $usuario->getUsuario() ?></td>
    </tr>
    <tr>
      <th>Password:</th>
      <td><?php echo $usuario->getPassword() ?></td>
    </tr>
    <tr>
      <th>Version:</th>
      <td><?php echo $usuario->getVersion() ?></td>
    </tr>
    <tr>
      <th>Mailing:</th>
      <td><?php echo $usuario->getMailing() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('usuario/edit?id='.$usuario->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('usuario/index') ?>">List</a>
