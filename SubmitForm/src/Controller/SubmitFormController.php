<?php
/**
* @file
* Contains \Drupal\SubmitForm\Controller\SubmitFormController
*/

namespace Drupal\SubmitForm\Controller;

/**
* Controller for Choosing to open form or results
*/
class SubmitFormController{
	/**
	* Generates a page with two buttons
	*/
	public function content(){
		
		$buttons = array();
		$buttons['SubmitButton'] = array('#markup' => t('<form action="\SubmitForm\Form"><input type="submit" value="Go to Form"></form>'));
		$buttons['ResultsButton'] = array('#markup' => t('<form action="\SubmitForm\Results"><input type="submit" value="Show Results"></form>'));
		return $buttons;
	}
}