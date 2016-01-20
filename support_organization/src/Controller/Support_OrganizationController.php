<?php 
/**
* @file
* Contains \Drupal\support_organization\Controller\Support_OrganizationController
*/

namespace Drupal\support_organization\Controller;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\UrlHelper;

/**
* Creating a form
*/
class Support_OrganizationController extends FormBase {
	/**
	* {@inheritdoc}
	*/
	public function getFormId(){
		return 'Support_Organization_Form';
	}
	/**
	* {@inheritdoc}
	*/
	public function buildForm(array $form, FormStateInterface $form_state){

		$form['#attributes'] = array('data-ajax' => 'false');
		$form['firstname'] = array(
			'#type' => 'textfield',
			'#title' => t('First Name'),
			'#size' => '42',
			'#default_value' => '',
			//'#attributes' => array('placeholder' => t('Firstname')),
			'#required' => TRUE
		);
		$form['lastname'] = array(
			'#type' => 'textfield',
			'#title' => t('Last Name'),
			'#size' => '42',
			'#default_value' => '',
			//'#attributes' => array('placeholder' => t('Lastname')),
			'#required' => TRUE
		);
		$form['email'] = array(
			'#type' => 'textfield',
			'#title' => t('Email'),
			'#size' => '42',
			'#default_value' => '',
			//'#attributes' => array('placeholder' => t('Email')),
			'#required' => TRUE
		);
		$form['zipcode'] = array(
			'#type' => 'textfield',
			'#title' => t('Zipcode'),
			'#size' => '42',
			'#default_value' => '',
			//'#attributes' => array('placeholder' => t('Zip/Postal Code')),
			'#required' => TRUE
		);
		$form['organization'] = array(
			'#type' => 'select',
			'#title' => t('Type of Organization'),
			'#options' => array(
				'' => t('--Select--'),
				'Landmark' => t('Landmark'),
				'International Organization' => t('International Organization'),
				'Entertainer' => t('Entertainer'),
				'Elected Official' => t('Elected Official'),
				'University/Club/Greek Organization' => t('University/Club/Greek Organization'),
				'K-12 School' => t('K-12 School'),
				'Sports Organization' => t('Sports Organization'),
				'Service Provider or Treatment Center' => t('Service Provider or Treatment Center'),
				'Faith Group' => t('Faith Group'),
				'Business' => t('Business'),
				'Other' => t('Other'),
			),
			'#required' => TRUE,
			'#attributes' => array('data-role' => 'none')
		);
		$form['other_text'] = array(
			'#type' => 'textfield',
			'#title' => t('Other'),
			'#size' => '42',
			'#default_value' => '',
			//'#attributes' => array('placeholder' => t('Other')),
			'#prefix' => '<div id="other_text" style="display:none;">',
			'#suffix' => '</div>'
		);
		$form['organization_text'] = array(
			'#type' => 'radios',
			'#title' => t('Is your organization a member of the international Advocacy Leadership Network (ALN)?'), 
			'#options' => array('yes' => t('Yes'), 'no' => t('No')),
			'#default_value' => 'yes',
			//'#attributes' => array('placeholder' => t('Other')),
			'#prefix' => '<div id="organization_text" style="display:none;">',
			'#suffix' => '</div>',
			'#attributes' => array('data-role' => 'none')
		);
		$form['organization_type'] = array(
			'#type' => 'select',
			'#title' => t('Organization Type'),
			'#options' => array(
				'' => t('--Select--'),
				'Alpha Xi Delta' => t('Alpha Xi Delta'),
				'Autism Speaks U' => t('Autism Speaks U'),
				'Theta Delta Chi' => t('Theta Delta Chi'),
				'Other' => t('Other')
			),
			'#prefix' => '<div id="organization_type" style="display:none;">',
			'#suffix' => '</div>',
			//'#required' => TRUE
			'#attributes' => array('data-role' => 'none')
			
		);
		$form['organization_type_other'] = array(
			'#type' => 'textfield',
			'#title' => t('Other'),
			'#size' => '42',
			'#default_value' => '',
			//'#attributes' => array('placeholder' => t('Other')),
			'#prefix' => '<div id="organization_type_other" style="display:none;">',
			'#suffix' => '</div>'
		);
		$form['organization_name'] = array(
			'#type' => 'textfield',
			'#title' => t('Name of Organization'),
			'#size' => '42',
			'#default_value' => '',
			//'#attributes' => array('placeholder' => t('Email')),
			//'#required' => TRUE
		);
		$form['website'] = array(
			'#type' => 'textfield',
			'#title' => t('Website'),
			'#size' => '42',
			'#default_value' => '',
			//'#attributes' => array('placeholder' => t('Email')),
			//'#required' => TRUE
		);
		$form['city'] = array(
			'#type' => 'textfield',
			'#title' => t('City'),
			'#size' => '42',
			'#default_value' => '',
			//'#attributes' => array('placeholder' => t('Email')),
			'#required' => TRUE
		);
		$form['state'] = array(
			'#type' => 'textfield',
			'#title' => t('State'),
			'#size' => '42',
			'#default_value' => '',
			//'#attributes' => array('placeholder' => t('Email')),
			//'#required' => TRUE
		);
		$form['country'] = array(
			'#type' => 'textfield',
			'#title' => t('Country'),
			'#size' => '42',
			'#default_value' => '',
			//'#attributes' => array('placeholder' => t('Email')),
			'#required' => TRUE
		);
		$form['liub_plans'] = array(
			'#type' => 'checkboxes',
			'#title' => t('Our plans for Light It Up Blue include (check all the apply)'), 
			'#options' => array(
				1 => t('Lighting Building(s) up blue'), 
				2 => t('An awareness event'),
				3 => t('A fundraising event'),
				4 => t('An ongoing fundraising campaign'),
				5 => t('A march, rally, or community gathering'),
				6 => t('Wear blue day'),			
			),
			//'#attributes' => array('placeholder' => t('Other')),
			'#prefix' => '<div id="liub_plans">',
			'#suffix' => '</div>',
			'#required' => TRUE,
			'#attributes' => array('data-role' => 'none')
		);
		$form['light_building'] = array(
			'#type' => 'item',
			'#value' => '<div id="over_all" style="display:none;">
										 <div id="row_0">
										 <div class="form-item form-item-labeled"><label><b>Enter building details</b></label></div>
										 <div class="form-item form-item-labeled"><label>Type: <span>*</span> </label><select id="building_type_0" name="building_type[]" class="building_type" data-role="none"><option value="">--Select--</option><option value="home">Home</option><option value="work">My Place of Work/ A business</option><option value="worship">Place of Worship</option><option value="school">School</option><option value="college">College/University</option><option value="landmark">A Landmark</option><option value="other">Other</option></select></div>
										 <div class="form-item form-item-labeled"><label>Building Name: <span>*</span></label> <input type="text" name="building_name[]" id="building_name_0" maxlength="50" size="25" value=""><div id="name_counter_0"></div></div>
										 <div class="form-item form-item-labeled"><label>Street Address: <span>*</span></label> <input type="text" name="building_address[]" id="building_address_0" size="25" value=""></div>
										 <div class="form-item form-item-labeled"><label>City: <span>*</span></label> <input type="text" name="building_city[]" id="building_city_0" size="25" value=""></div>
										 <div class="form-item form-item-labeled"><label>Country: <span>*</span></label> <select name="building_country[]" id="building_country_0" data-role="none" onchange="return loadState(this.value,this.id);"><option value="US">United States</option><option value="CA">Canada</option><option value="AF">Afghanistan</option><option value="AX">Aland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua/Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AT">Austria</option><option value="AU">Australia</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia/Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote D Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands(Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island/Mcdonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle Of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestine</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="BL">St. Barthelemy</option><option value="SH">St. Helena</option><option value="KN">St. Kitts/Nevis</option><option value="LC">St. Lucia</option><option value="MF">St. Martin</option><option value="PM">St. Pierre/Miquelon</option><option value="VC">St. Vincent/The Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome/Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia/Sandwich Islands</option><option value="KR">South Korea</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard/Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks/Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="UM">United States Minor Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City State</option><option value="VE">Venezuela</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands, British</option><option value="VI">Virgin Islands, U.S.</option><option value="WF">Wallis/Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select></div>
										 <div class="form-item form-item-labeled" id="building_country_state_0"><label>State:</label> <select name="building_state[]" id="building_state_0" data-role="none"><option value="">--Select--</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AS">American Samoa</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FM">Federated States Of Micronesia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam GU</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MH">Marshall Islands</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="MP">Northern Mariana Islands</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PW">Palau</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VI">Virgin Islands</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option></select></div>
										 <div class="form-item form-item-labeled" id="building_country_other_state_0" style="display:none;"><label>State:</label> <input type="text" name="building_statetext[]" id="building_other_state_0" size="25" value=""></div>
										 <div class="form-item form-item-labeled"> <label>Zip/Postal Code: <span>*</span></label> <input type="text" name="building_zip[]" id="building_zip_0" size="25" value=""></div>
										 <div class="checkbox-searchmap form-item form-item-labeled"> <label>Display building in Search/Map:</label> <input type="checkbox" name="building_flag[]" id="building_flag_0" data-role="none" value="1" checked="checked"></div><br/>
										 <div class="form-item form-item-labeled"><input type="hidden" name="building_date[]" id="building_date_0" size="50" value=""></div>
										 </div>
										 <div id="final_row"></div>
										 <div class="form-item form-item-labeled"><a class="addRow" href="javascript:void(0);" style="display:block; width:165px;">Add Another Building</a></div>
									 </div>',
			//'#attributes' => array('placeholder' => t('Email')),
			//'#required' => TRUE
		);
		$form['description'] = array(
			'#type' => 'textarea',
			'#title' => t('Description of Light It Up Blue Plans'),
			'#default_value' => '',
			//'#attributes' => array('placeholder' => t('Email')),
			//'#required' => TRUE
		);
		$form['upload_reminder'] = array(
			'#type' => 'checkbox',
			'#title' => t('Send me a reminder to upload photos later'), 
			//'#attributes' => array('placeholder' => t('Other')),
			//'#required' => TRUE,
			'#attributes' => array('data-role' => 'none')
		);
		$form['liub_recap'] = array(
			'#type' => 'checkbox',
			'#title' => t('I would like our organization to be listed in the Light It Up Blue recap reports'), 
			//'#attributes' => array('placeholder' => t('Other')),
			//'#required' => TRUE,
			'#attributes' => array('data-role' => 'none')
		);
		$form['save'] = array(
			'#type' => 'submit',
			'#value' => t('Save'),	
		//'#submit'	=> array('support_organization_form_submit'),	
			//'#attributes' => array('data-role' => 'none','class' => 'support_submit')
			
		);
		$form['upload_save'] = array(
			'#type' => 'submit',
			'#value' => t('Save & Upload Pictures'),
			//'#submit'	=> array('support_organization_form_submit'),
		//'#attributes' => array('data-role' => 'none','class' => 'support_submit'),
		);
	
	return $form;
	}
	/**
	* {@inheritdoc}
	*/
	public function validateForm(array &$form, FormStateInterface $form_state){
		
	}
	/**
	* {@inheritdoc}
	*/
	public function submitForm(array &$form, FormStateInterface $form_state){
		//display result
		foreach ($form_state->getValues() as $key => $value){
			drupal_set_message($key . ': ' . $value);
		}
	}
}
?>