<h1>Usuarios List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Usuario</th>
      <th>Password</th>
      <th>Version</th>
      <th>Mailing</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
      <td><a href="<?php echo url_for('usuario/show?id='.$usuario->getId()) ?>"><?php echo $usuario->getId() ?></a></td>
      <td><?php echo $usuario->getNombre() ?></td>
      <td><?php echo $usuario->getEmail() ?></td>
      <td><?php echo $usuario->getUsuario() ?></td>
      <td><?php echo $usuario->getPassword() ?></td>
      <td><?php echo $usuario->getVersion() ?></td>
      <td><?php echo $usuario->getMailing() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('usuario/new') ?>">New</a>
