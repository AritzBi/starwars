<?php

/**
 * Raza filter form base class.
 *
 * @package    starwars
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRazaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'summary' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'    => new sfValidatorPass(array('required' => false)),
      'summary' => new sfValidatorPass(array('required' => false)),
      'slug'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('raza_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Raza';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'name'    => 'Text',
      'summary' => 'Text',
      'slug'    => 'Text',
    );
  }
}
