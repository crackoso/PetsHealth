<?php

/**
 * vacuna actions.
 *
 * @package    pethealth
 * @subpackage vacuna
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class vacunaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->vacunas = Doctrine_Core::getTable('Vacuna')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->vacuna = Doctrine_Core::getTable('Vacuna')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->vacuna);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new VacunaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new VacunaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($vacuna = Doctrine_Core::getTable('Vacuna')->find(array($request->getParameter('id'))), sprintf('Object vacuna does not exist (%s).', $request->getParameter('id')));
    $this->form = new VacunaForm($vacuna);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($vacuna = Doctrine_Core::getTable('Vacuna')->find(array($request->getParameter('id'))), sprintf('Object vacuna does not exist (%s).', $request->getParameter('id')));
    $this->form = new VacunaForm($vacuna);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($vacuna = Doctrine_Core::getTable('Vacuna')->find(array($request->getParameter('id'))), sprintf('Object vacuna does not exist (%s).', $request->getParameter('id')));
    $vacuna->delete();

    $this->redirect('vacuna/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $vacuna = $form->save();

      $this->redirect('vacuna/edit?id='.$vacuna->getId());
    }
  }
}
