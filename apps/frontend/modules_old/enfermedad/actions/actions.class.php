<?php

/**
 * enfermedad actions.
 *
 * @package    pethealth
 * @subpackage enfermedad
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class enfermedadActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->enfermedads = Doctrine_Core::getTable('Enfermedad')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->enfermedad = Doctrine_Core::getTable('Enfermedad')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->enfermedad);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EnfermedadForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EnfermedadForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($enfermedad = Doctrine_Core::getTable('Enfermedad')->find(array($request->getParameter('id'))), sprintf('Object enfermedad does not exist (%s).', $request->getParameter('id')));
    $this->form = new EnfermedadForm($enfermedad);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($enfermedad = Doctrine_Core::getTable('Enfermedad')->find(array($request->getParameter('id'))), sprintf('Object enfermedad does not exist (%s).', $request->getParameter('id')));
    $this->form = new EnfermedadForm($enfermedad);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($enfermedad = Doctrine_Core::getTable('Enfermedad')->find(array($request->getParameter('id'))), sprintf('Object enfermedad does not exist (%s).', $request->getParameter('id')));
    $enfermedad->delete();

    $this->redirect('enfermedad/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $enfermedad = $form->save();

      $this->redirect('enfermedad/edit?id='.$enfermedad->getId());
    }
  }
}
