<?php

namespace App;

class Utilities {
	/**
	 *	Utility to pretty-print the contents of a variable in color
	 *	
	 *	@param mixed $var - anything can be passed in
	 *	@param string $color - optional
	 */
	public static function pr($var, $color='black') {
		echo "<pre style='color:$color'>";
		print_r($var);
		echo "</pre>";
	}
}