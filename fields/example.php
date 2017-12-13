<?php
/**
 * File       example.php
 * Created    12/13/17 1:41 PM
 * Author     Matt Thomas
 * Email      matt.thomas@searshc.com
 * Copyright  Copyright (C) 2017 Sears Holdings. All Rights Reserved.
 */

jimport('joomla.form.formfield');

class JFormFieldExample extends JFormField
{
	protected $type = 'Example';

	public function getInput()
	{
		$html = '<input type="text" name ="exmaple"/>';
		switch ($this->getAttribute('hide')) {
			case(1):
				return $html;
				break;
			case(0):
				return '<label>Example</label>' . $html;
				break;
		}
	}
}
