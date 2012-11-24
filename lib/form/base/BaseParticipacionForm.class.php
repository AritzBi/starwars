<?php

/**
 * Participacion form base class.
 *
 * @method Participacion getObject() Returns the current form's model object
 *
 * @package    starwars
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseParticipacionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'personaje_id' => new sfWidgetFormPropelChoice(array('model' => 'Personaje', 'add_empty' => true)),
      'pelicula_id'  => new sfWidgetFormPropelChoice(array('model' => 'Pelicula', 'add_empty' => true)),
      'id'           => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'personaje_id' => new sfValidatorPropelChoice(array('model' => 'Personaje', 'column' => 'id', 'required' => false)),
      'pelicula_id'  => new sfValidatorPropelChoice(array('model' => 'Pelicula', 'column' => 'id', 'required' => false)),
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('participacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Participacion';
  }


}
