<?php

/**
 * Usuario form base class.
 *
 * @method Usuario getObject() Returns the current form's model object
 *
 * @package    pethealth
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'nombre'   => new sfWidgetFormInputText(),
      'email'    => new sfWidgetFormInputText(),
      'usuario'  => new sfWidgetFormInputText(),
      'password' => new sfWidgetFormInputText(),
      'version'  => new sfWidgetFormInputText(),
      'mailing'  => new sfWidgetFormInputCheckbox(),
      'idioma'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'   => new sfValidatorString(array('max_length' => 100)),
      'email'    => new sfValidatorString(array('max_length' => 100)),
      'usuario'  => new sfValidatorString(array('max_length' => 20)),
      'password' => new sfValidatorString(array('max_length' => 40)),
      'version'  => new sfValidatorString(array('max_length' => 10)),
      'mailing'  => new sfValidatorBoolean(array('required' => false)),
      'idioma'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Usuario', 'column' => array('email')))
    );

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

}
