<?php 


class Config {

	public static function get($key = null) {
		  if($key){
		  	$config = $GLOBALS["config"];
		  	$path = explode("/", $key);

		  	foreach ($path as $bit) {
		  		if(isset($config[$bit])) {
		  			$config = $config[$bit];
		  		}
		  	}

		  	return $config;
		  }

		  return false;
	}
}



 ?>
