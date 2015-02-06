<?php

/**
 * Vacuna filter form base class.
 *
 * @package    pethealth
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVacunaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'mascota_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mascota'), 'add_empty' => true)),
      'vacuna'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fechaAplicacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'mascota_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mascota'), 'column' => 'id')),
      'vacuna'          => new sfValidatorPass(array('required' => false)),
      'fechaAplicacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('vacuna_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vacuna';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'mascota_id'      => 'ForeignKey',
      'vacuna'          => 'Text',
      'fechaAplicacion' => 'Date',
    );
  }
}
