<?php 

    if (isset($_SERVER['HTTPS']) &&  ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
        $site = 'https://'.$_SERVER['SERVER_NAME'].'/';
		  }
		  else {
              $site = 'http://'.$_SERVER['SERVER_NAME'].'/';
          }
	$GLOBALS["config"] = array(
								"mysql" => array(
												  "host"  => "mysql5006.smarterasp.net",
												  "username" => "a28bc6_stiapp",
												  "password" => "stiappdb2017",
												  "dbname" => "db_a28bc6_stiapp"
												),
                               "baseurl" => array(
                                                  "url" => $site
                                                  )

							  );

    spl_autoload_register(function ($class_name) {
    		include $class_name . '.php';
	});	



 ?>
