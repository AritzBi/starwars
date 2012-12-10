<?php

/**
 * raza actions.
 *
 * @package    starwars
 * @subpackage raza
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class razaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
    public function executeIndex(sfWebRequest $request)
  {
    $this->Razas = RazaPeer::doSelect(new Criteria());
  }
  public function executeShow(sfWebRequest $request)
  {
    $this->raza = $this->getRoute()->getObject();
  }
}
