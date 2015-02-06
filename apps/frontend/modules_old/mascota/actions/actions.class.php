<?php

/**
 * mascota actions.
 *
 * @package    pethealth
 * @subpackage mascota
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mascotaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->mascotas = Doctrine_Core::getTable('Mascota')
      ->createQuery('a')
      ->execute();
  }

	public function executeJson(sfWebRequest $request) {
		$this -> getResponse() -> setContentType('application/json');
		$q = Doctrine_Query::create() 
		-> select('m.*, v.vacuna, v.fechaAplicacion, e.enfermedad, e.tratamiento, e.fecha, a.alergia') 
		-> from('mascota m') 
		-> where('m.id =?', $request->getParameter('id'))
		-> leftJoin('m.Vacuna v') 
		-> leftJoin('m.Enfermedad e') 
		-> leftJoin('m.Alergia a'); 
		$clientes = $q -> fetchArray();
		$data_json = json_encode($clientes);
		return $this -> renderText($data_json);
	}


  public function executeShow(sfWebRequest $request)
  {
    $this->mascota = Doctrine_Core::getTable('Mascota')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->mascota);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MascotaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MascotaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($mascota = Doctrine_Core::getTable('Mascota')->find(array($request->getParameter('id'))), sprintf('Object mascota does not exist (%s).', $request->getParameter('id')));
    $this->form = new MascotaForm($mascota);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($mascota = Doctrine_Core::getTable('Mascota')->find(array($request->getParameter('id'))), sprintf('Object mascota does not exist (%s).', $request->getParameter('id')));
    $this->form = new MascotaForm($mascota);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($mascota = Doctrine_Core::getTable('Mascota')->find(array($request->getParameter('id'))), sprintf('Object mascota does not exist (%s).', $request->getParameter('id')));
    $mascota->delete();

    $this->redirect('mascota/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $mascota = $form->save();

      $this->redirect('mascota/edit?id='.$mascota->getId());
    }
  }
}
