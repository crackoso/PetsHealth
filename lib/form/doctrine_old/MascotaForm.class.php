<?php

/**
 * Mascota form.
 *
 * @package    pethealth
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MascotaForm extends BaseMascotaForm {
	public function configure() {
		/*
		$years = range(1950, date("Y"));
		$years_list = array_combine($years, $years);
		$this -> widgetSchema["fechaNacimiento"] = new sfWidgetFormI18nDate((array(
    	'culture' => 'es_MX',
    	'format' => '%day%/%month%/%year%',
    	'years' => range(date('Y'), 1980),
    	)));
		 * 
		 */
	}

}
