<?php

/**
 * Usuario filter form base class.
 *
 * @package    pethealth
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usuario'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'version'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mailing'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'idioma'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'   => new sfValidatorPass(array('required' => false)),
      'email'    => new sfValidatorPass(array('required' => false)),
      'usuario'  => new sfValidatorPass(array('required' => false)),
      'password' => new sfValidatorPass(array('required' => false)),
      'version'  => new sfValidatorPass(array('required' => false)),
      'mailing'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'idioma'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'nombre'   => 'Text',
      'email'    => 'Text',
      'usuario'  => 'Text',
      'password' => 'Text',
      'version'  => 'Text',
      'mailing'  => 'Boolean',
      'idioma'   => 'Text',
    );
  }
}
