<?php

/**
 * pelicula module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage pelicula
 * @author     ##AUTHOR_NAME##
 */
abstract class BasePeliculaGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'pelicula' : 'pelicula_'.$action;
  }
}
