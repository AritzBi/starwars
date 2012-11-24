<?php

/**
 * Personaje filter form base class.
 *
 * @package    starwars
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasePersonajeFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'summary' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'raza_id' => new sfWidgetFormPropelChoice(array('model' => 'Raza', 'add_empty' => true)),
      'photo'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'    => new sfValidatorPass(array('required' => false)),
      'summary' => new sfValidatorPass(array('required' => false)),
      'raza_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Raza', 'column' => 'id')),
      'photo'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('personaje_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Personaje';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'name'    => 'Text',
      'summary' => 'Text',
      'raza_id' => 'ForeignKey',
      'photo'   => 'Text',
    );
  }
}
