<?php

/**
 * alergia actions.
 *
 * @package    pethealth
 * @subpackage alergia
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class alergiaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->alergias = Doctrine_Core::getTable('Alergia')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->alergia = Doctrine_Core::getTable('Alergia')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->alergia);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AlergiaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AlergiaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($alergia = Doctrine_Core::getTable('Alergia')->find(array($request->getParameter('id'))), sprintf('Object alergia does not exist (%s).', $request->getParameter('id')));
    $this->form = new AlergiaForm($alergia);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($alergia = Doctrine_Core::getTable('Alergia')->find(array($request->getParameter('id'))), sprintf('Object alergia does not exist (%s).', $request->getParameter('id')));
    $this->form = new AlergiaForm($alergia);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($alergia = Doctrine_Core::getTable('Alergia')->find(array($request->getParameter('id'))), sprintf('Object alergia does not exist (%s).', $request->getParameter('id')));
    $alergia->delete();

    $this->redirect('alergia/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $alergia = $form->save();

      $this->redirect('alergia/edit?id='.$alergia->getId());
    }
  }
}
