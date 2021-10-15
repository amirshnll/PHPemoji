<?php

/**
 * Name : PHPemoji
 * Author : Amir Shokri
 * Date : 15 October 2021
 * Email : amirsh.nll@gmail.com
 */

include("PHPemojidata.php");

class PHPemoji extends PHPemojidata
{
	public function parse($string) {
		if(strlen($string) < 5 && substr_count($string, ":") < 2)
			return $string;

		// /(:[A-Za-z]*:)/g
		foreach ($this->PHPemojistring as $key => $val)
			$string = preg_replace("/(:".$key."*:)/", $val, $string);

		return $string;
	}

	public function find($string) {
		foreach ($this->PHPemojistring as $key => $val)
			if($key == $string)
				return $val;

		return "";
	}

	public function print($string) {
		echo $this->parse($string);
	}

	public function println($string) {
		echo $this->parse($string).chr(10).chr(13);
	}
}