<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('enfermedad/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('enfermedad/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'enfermedad/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
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
        <th><?php echo $form['enfermedad']->renderLabel() ?></th>
        <td>
          <?php echo $form['enfermedad']->renderError() ?>
          <?php echo $form['enfermedad'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['tratamiento']->renderLabel() ?></th>
        <td>
          <?php echo $form['tratamiento']->renderError() ?>
          <?php echo $form['tratamiento'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha']->renderError() ?>
          <?php echo $form['fecha'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
