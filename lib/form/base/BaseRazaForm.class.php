<?php

/**
 * Raza form base class.
 *
 * @method Raza getObject() Returns the current form's model object
 *
 * @package    starwars
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRazaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'   => new sfWidgetFormInputHidden(),
      'name' => new sfWidgetFormInputText(),
      'slug' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'name' => new sfValidatorString(array('max_length' => 255)),
      'slug' => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'Raza', 'column' => array('name'))),
        new sfValidatorPropelUnique(array('model' => 'Raza', 'column' => array('slug'))),
      ))
    );

    $this->widgetSchema->setNameFormat('raza[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Raza';
  }


}
