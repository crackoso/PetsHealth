<?php

/**
 * Enfermedad form base class.
 *
 * @method Enfermedad getObject() Returns the current form's model object
 *
 * @package    pethealth
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEnfermedadForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'mascota_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mascota'), 'add_empty' => false)),
      'enfermedad'  => new sfWidgetFormInputText(),
      'tratamiento' => new sfWidgetFormTextarea(),
      'fecha'       => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'mascota_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mascota'))),
      'enfermedad'  => new sfValidatorString(array('max_length' => 50)),
      'tratamiento' => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'fecha'       => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('enfermedad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Enfermedad';
  }

}
