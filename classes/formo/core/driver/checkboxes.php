<?php defined('SYSPATH') or die('No direct script access.');

class Formo_Core_Driver_Checkboxes extends Formo_Driver {

	public static function get_val( array $array)
	{
		$val = $array['val'];

		return $val
			? $val
			: array();
	}

	public static function get_opts( array $array)
	{
		$field = $array['field'];

		$opts_array = array();
		foreach ($field->get('opts', array()) as $key => $value)
		{
			$opts_array[] = '<input type="checkbox" name="'.$field->alias().'[]" value="'.$key.'" />';
		}

		return $opts_array;
	}

	public static function get_opts_template( array $array)
	{
		return 'formo/opts/checkboxes_template';
	}

	public static function get_title( array $array)
	{
		$field = $array['field'];
		return $field->alias();
	}

}