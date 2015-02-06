<h1>Alergias List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Mascota</th>
      <th>Alergia</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($alergias as $alergia): ?>
    <tr>
      <td><a href="<?php echo url_for('alergia/show?id='.$alergia->getId()) ?>"><?php echo $alergia->getId() ?></a></td>
      <td><?php echo $alergia->getMascotaId() ?></td>
      <td><?php echo $alergia->getAlergia() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('alergia/new') ?>">New</a>
