<?php
/**
* @file
* Contains \Drupal\buildtest\Controller\buildtestController
*/

namespace Drupal\buildtest\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\buildtest\Form\form as form;

class buildtestController extends ControllerBase{
	public function content(){
		$a = new form();
		return $a->buildForm();
	}
}
?>