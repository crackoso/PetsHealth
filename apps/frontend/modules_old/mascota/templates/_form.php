<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('mascota/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('mascota/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'mascota/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['usuario_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['usuario_id']->renderError() ?>
          <?php echo $form['usuario_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nombre']->renderLabel() ?></th>
        <td>
          <?php echo $form['nombre']->renderError() ?>
          <?php echo $form['nombre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fechaNacimiento']->renderLabel() ?></th>
        <td>
          <?php echo $form['fechaNacimiento']->renderError() ?>
          <?php echo $form['fechaNacimiento'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['especie']->renderLabel() ?></th>
        <td>
          <?php echo $form['especie']->renderError() ?>
          <?php echo $form['especie'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['raza']->renderLabel() ?></th>
        <td>
          <?php echo $form['raza']->renderError() ?>
          <?php echo $form['raza'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['tamano']->renderLabel() ?></th>
        <td>
          <?php echo $form['tamano']->renderError() ?>
          <?php echo $form['tamano'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['sexo']->renderLabel() ?></th>
        <td>
          <?php echo $form['sexo']->renderError() ?>
          <?php echo $form['sexo'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
