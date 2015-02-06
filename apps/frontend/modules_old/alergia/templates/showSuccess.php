<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $alergia->getId() ?></td>
    </tr>
    <tr>
      <th>Mascota:</th>
      <td><?php echo $alergia->getMascotaId() ?></td>
    </tr>
    <tr>
      <th>Alergia:</th>
      <td><?php echo $alergia->getAlergia() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('alergia/edit?id='.$alergia->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('alergia/index') ?>">List</a>
