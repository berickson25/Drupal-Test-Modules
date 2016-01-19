<?php
/**
* @file
* Contains \Drupal\buildtest\Content\filler
*/

namespace Drupal\buildtest\Content;

use Drupal\Core\Controller\ControllerBase;
class filler extends ControllerBase{
	public function stuffToReturn(){
		$output = array( '#markup' => $this->t('I came from filler'),);
		return $output;
	}
}
?>