<?php

/**
 * personaje module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage personaje
 * @author     ##AUTHOR_NAME##
 */
abstract class BasePersonajeGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'personaje' : 'personaje_'.$action;
  }
}
