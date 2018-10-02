<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class RzEmailForm extends CFormModel
{
	public $absender;
	public $empfang;
	public $betreff;
	public $text;
	public $verifyCode;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('absender, empfang, betreff, text', 'required'),
			// email has to be a valid email address
			array('empfang', 'email'),
			// verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'absender'=>'Absender',
			'empfang'=>'Empfänger',
			'betreff'=>'Betreff',
			'text'=>'Nachrichtentext',
			'verifyCode'=>'Verification Code',
		);
	}
}