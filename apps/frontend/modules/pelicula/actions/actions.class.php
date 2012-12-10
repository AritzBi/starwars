<?php

/**
 * pelicula actions.
 *
 * @package    starwars
 * @subpackage pelicula
 * @author     Your name here
 */
class peliculaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Peliculas = PeliculaPeer::doSelect(new Criteria());
  }
  public function executeRss(sfWebRequest $request)
  {
    $criteria = new Criteria();
    $criteria->addDescendingOrderByColumn(PeliculaPeer::PREMIERE_DATE);
    $this->Peliculas = PeliculaPeer::doSelect($criteria);
  }
  public function executeShow(sfWebRequest $request)
  {
    $this->Pelicula = PeliculaPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Pelicula);
  }
    public function executeShowslug(sfWebRequest $request)
  {
    $this->Pelicula = $this->getRoute()->getObject();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PeliculaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PeliculaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($Pelicula = PeliculaPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Pelicula does not exist (%s).', $request->getParameter('id')));
    $this->form = new PeliculaForm($Pelicula);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Pelicula = PeliculaPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Pelicula does not exist (%s).', $request->getParameter('id')));
    $this->form = new PeliculaForm($Pelicula);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Pelicula = PeliculaPeer::retrieveByPk($request->getParameter('id')), sprintf('Object Pelicula does not exist (%s).', $request->getParameter('id')));
    $Pelicula->delete();

    $this->redirect('pelicula/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Pelicula = $form->save();

      $this->redirect('pelicula/edit?id='.$Pelicula->getId());
    }
  }
}
