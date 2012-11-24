<?php

/**
 * Personaje form base class.
 *
 * @method Personaje getObject() Returns the current form's model object
 *
 * @package    starwars
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePersonajeForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'name'    => new sfWidgetFormInputText(),
      'summary' => new sfWidgetFormTextarea(),
      'raza_id' => new sfWidgetFormPropelChoice(array('model' => 'Raza', 'add_empty' => false)),
      'photo'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'name'    => new sfValidatorString(array('max_length' => 255)),
      'summary' => new sfValidatorString(),
      'raza_id' => new sfValidatorPropelChoice(array('model' => 'Raza', 'column' => 'id')),
      'photo'   => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'Personaje', 'column' => array('name'))),
        new sfValidatorPropelUnique(array('model' => 'Personaje', 'column' => array('photo'))),
      ))
    );

    $this->widgetSchema->setNameFormat('personaje[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Personaje';
  }


}
