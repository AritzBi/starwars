<?php

/**
 * Pelicula form base class.
 *
 * @method Pelicula getObject() Returns the current form's model object
 *
 * @package    starwars
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePeliculaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'name'          => new sfWidgetFormInputText(),
      'summary'       => new sfWidgetFormTextarea(),
      'premiere_date' => new sfWidgetFormDate(),
      'photo'         => new sfWidgetFormInputText(),
      'slug'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'name'          => new sfValidatorString(array('max_length' => 255)),
      'summary'       => new sfValidatorString(),
      'premiere_date' => new sfValidatorDate(),
      'photo'         => new sfValidatorString(array('max_length' => 255)),
      'slug'          => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'Pelicula', 'column' => array('name'))),
        new sfValidatorPropelUnique(array('model' => 'Pelicula', 'column' => array('photo'))),
        new sfValidatorPropelUnique(array('model' => 'Pelicula', 'column' => array('slug'))),
      ))
    );

    $this->widgetSchema->setNameFormat('pelicula[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pelicula';
  }


}
