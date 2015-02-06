<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('vacuna/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('vacuna/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'vacuna/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['mascota_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['mascota_id']->renderError() ?>
          <?php echo $form['mascota_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['vacuna']->renderLabel() ?></th>
        <td>
          <?php echo $form['vacuna']->renderError() ?>
          <?php echo $form['vacuna'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fechaAplicacion']->renderLabel() ?></th>
        <td>
          <?php echo $form['fechaAplicacion']->renderError() ?>
          <?php echo $form['fechaAplicacion'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
