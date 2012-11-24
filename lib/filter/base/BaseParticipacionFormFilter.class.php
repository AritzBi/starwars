<?php

/**
 * Participacion filter form base class.
 *
 * @package    starwars
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseParticipacionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'personaje_id' => new sfWidgetFormPropelChoice(array('model' => 'Personaje', 'add_empty' => true)),
      'pelicula_id'  => new sfWidgetFormPropelChoice(array('model' => 'Pelicula', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'personaje_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Personaje', 'column' => 'id')),
      'pelicula_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Pelicula', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('participacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Participacion';
  }

  public function getFields()
  {
    return array(
      'personaje_id' => 'ForeignKey',
      'pelicula_id'  => 'ForeignKey',
      'id'           => 'Number',
    );
  }
}
