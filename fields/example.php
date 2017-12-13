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
		return '<input type="text" name="' . $this->name . '" id="' . $this->id . '" value="' . $this->value . '" />';
	}
}
