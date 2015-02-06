<?php

/**
 * Mascota filter form base class.
 *
 * @package    pethealth
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMascotaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => true)),
      'nombre'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fechaNacimiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'especie'         => new sfWidgetFormFilterInput(),
      'raza'            => new sfWidgetFormFilterInput(),
      'tamano'          => new sfWidgetFormFilterInput(),
      'sexo'            => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'usuario_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Usuario'), 'column' => 'id')),
      'nombre'          => new sfValidatorPass(array('required' => false)),
      'fechaNacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'especie'         => new sfValidatorPass(array('required' => false)),
      'raza'            => new sfValidatorPass(array('required' => false)),
      'tamano'          => new sfValidatorPass(array('required' => false)),
      'sexo'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mascota_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mascota';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'usuario_id'      => 'ForeignKey',
      'nombre'          => 'Text',
      'fechaNacimiento' => 'Date',
      'especie'         => 'Text',
      'raza'            => 'Text',
      'tamano'          => 'Text',
      'sexo'            => 'Text',
    );
  }
}
