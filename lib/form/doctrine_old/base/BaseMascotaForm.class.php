<?php

/**
 * Mascota form base class.
 *
 * @method Mascota getObject() Returns the current form's model object
 *
 * @package    pethealth
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMascotaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'usuario_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => false)),
      'nombre'          => new sfWidgetFormInputText(),
      'fechaNacimiento' => new sfWidgetFormDate(),
      'especie'         => new sfWidgetFormInputText(),
      'raza'            => new sfWidgetFormInputText(),
      'tamano'          => new sfWidgetFormInputText(),
      'sexo'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'usuario_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'))),
      'nombre'          => new sfValidatorString(array('max_length' => 100)),
      'fechaNacimiento' => new sfValidatorDate(array('required' => false)),
      'especie'         => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'raza'            => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'tamano'          => new sfValidatorPass(array('required' => false)),
      'sexo'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mascota[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mascota';
  }

}
