<?php

class coder{

	static function code($var){
		echo '<pre>'.$var.'</pre>';
	}
	static function code_var($var){
		echo '<pre>'.var_dump($var).'</pre>';
	}
}