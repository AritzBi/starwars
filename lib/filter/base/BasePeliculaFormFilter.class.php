<?php

/**
 * Pelicula filter form base class.
 *
 * @package    starwars
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasePeliculaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'summary'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'premiere_date' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'photo'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'          => new sfValidatorPass(array('required' => false)),
      'summary'       => new sfValidatorPass(array('required' => false)),
      'premiere_date' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'photo'         => new sfValidatorPass(array('required' => false)),
      'slug'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pelicula_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pelicula';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'name'          => 'Text',
      'summary'       => 'Text',
      'premiere_date' => 'Date',
      'photo'         => 'Text',
      'slug'          => 'Text',
    );
  }
}
