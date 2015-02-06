<?php

/**
 * Alergia filter form base class.
 *
 * @package    pethealth
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAlergiaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'mascota_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mascota'), 'add_empty' => true)),
      'alergia'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'mascota_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mascota'), 'column' => 'id')),
      'alergia'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('alergia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Alergia';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'mascota_id' => 'ForeignKey',
      'alergia'    => 'Text',
    );
  }
}
