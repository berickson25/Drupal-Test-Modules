<?php
/**
* @file
* Contains \Drupal\SubmitForm\Form\FormToSubmit
*/

namespace Drupal\SubmitForm\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
*Create the form
*/
class FormToSubmit extends FormBase{
	/**
	* {@inheritdoc}
	*/
	public function getFormID(){
		return 'Submit_Form_id';
	}
	/**
	* {@inheritdoc}
	*/
	public function buildForm(array $form, FormStateInterface $form_state){
		
		$form['firstname'] = array(
			'#type' => 'textfield',
			'#title' => t('First Name'),
			'#size' => '42',
			'#default_value' => '',
			'#required' => TRUE
		);
		$form['lastname'] = array(
			'#type' => 'textfield',
			'#title' => t('Last Name'),
			'#size' => '42',
			'#default_value' => '',
			'#required' => TRUE
		);
		$form['email'] = array (
			'#type' => 'textfield',
			'#title' => t('Email'),
			'#size' => '42',
			'#default_value' => '',
			'#required' => TRUE
		);
		$form['save'] = array(
			'#type' => 'submit',
			'#value' => t('Save')
		);		
		return $form;
	}
	
	public function submitForm(array &$form, FormStateInterface $form_state){
		foreach ($form_state->getValues() as $key => $value){
			drupal_set_message($key . ': ' . $value);
		}
	}
}
?>