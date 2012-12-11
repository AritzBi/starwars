<?php

/**
 * personaje actions.
 *
 * @package    starwars
 * @subpackage personaje
 * @author     Your name here
 */
class personajeActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Personajes = PersonajePeer::doSelect(new Criteria());
    $this->pager=new sfPropelPager('Personaje',sfConfig::get('app_max_pjs'));
    $this->pager->setCriteria(new Criteria());
    $this->pager->setPage($request->getParameter('page',1));
    $this->pager->init();
  }
  
  public function executeFront(sfWebRequest $request)
  {
    $criteria = new Criteria();
    $criteria->addGroupByColumn(PersonajePeer::RAZA_ID);
    $this->Personajes = PersonajePeer::doSelect($criteria);
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Personaje = PersonajePeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Personaje);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PersonajeForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PersonajeForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($Personaje = PersonajePeer::retrieveByPk($request->getParameter('id')), sprintf('Object Personaje does not exist (%s).', $request->getParameter('id')));
    $this->form = new PersonajeForm($Personaje);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Personaje = PersonajePeer::retrieveByPk($request->getParameter('id')), sprintf('Object Personaje does not exist (%s).', $request->getParameter('id')));
    $this->form = new PersonajeForm($Personaje);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Personaje = PersonajePeer::retrieveByPk($request->getParameter('id')), sprintf('Object Personaje does not exist (%s).', $request->getParameter('id')));
    $Personaje->delete();

    $this->redirect('personaje/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Personaje = $form->save();

      $this->redirect('personaje/edit?id='.$Personaje->getId());
    }
  }
}
