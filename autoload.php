<?php
use SPR\UserBO;
class Loader  { 
	static function loadClass($class_name) { 
		$file = str_replace('\\', '/', $class_name);

		$filename = $file.".php"; 

		if (is_file($filename)) 
			return include_once $filename; 
	} 
} 

spl_autoload_register(array('Loader', 'loadClass'));
