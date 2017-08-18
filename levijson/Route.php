<?php 

	
   Class Route {


   	public $model;

   	public function __construct() {
   		$this->model = DB::getInstance();
   	}


   	function getPost() {
   		$results = $this->model->query("SELECT a.*, b.PATH, c.NAME FROM tbl_newsfeed_post as a, tbl_images as b, tbl_rest_registration as c WHERE a.REST_ID = c.REST_ID AND a.POST_ID = b.POST_ID");
   		$arr = array();
   		if(!$results->error()) {
   			if($results->count()) {
	   			foreach ($results->results() as $value) {
	   				array_push($arr, array(
	   										"postid" => $value->POST_ID,
	   										"restid" => $value->REST_ID,
	   										"caption" => $value->CAPTION,
	   										"datetime" => $this->humanTiming4($value->DATE_TIME, 'mobile'),
	   										"url" => $value->BLOG_WEB_URL,
	   										"img" => Config::get("baseurl/url") . "dir/pages/img/" .$value->PATH,
	   										"name" => $value->NAME

	   									  ));
	   			}
	   		}

	   		echo json_encode($arr);
   		}
	   		

   	}

    function getResto() {
      $results = $this->model->query("SELECT a.REST_ID, a.NAME, a.ICON, a.COMP_ADDRESS, a.LAT, a.LONGI FROM tbl_rest_registration as a WHERE a.LAT != '' AND a.LONGI != '' AND a.NAME != ''");

      $arr = array();
      if(!$results->error()) {
        if($results->count()) {
          foreach ($results->results() as $value) {
            array_push($arr, array(
                        "restid" => $value->REST_ID,
                        "name" => $value->NAME,
                        "icon" => $value->ICON,
                        "address" => $value->COMP_ADDRESS,
                        "lat" => $value->LAT,
                        "long" => $value->LONGI
                        ));
          }
        }

        echo json_encode($arr);
      }

    }

  private function humanTiming4($time, $window) {
    $year      = date('Y');
    $temptime  = $time;
    $time = time() - $time;
    $time = ($time<1)? 1 : $time;
    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        172800 => 'else',
        82800 => 'Yesterday',
        3600 => 'hr',
        60 => 'min',
        1 => 'SEC'
    );
    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);

        if($text=='SEC'){
          return 'Just now';
        } else{
           if($window == 'mobile'){
               if($text == "min" || $text == 'hr'){
              return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
            } else if ($text == 'Yesterday'){
              return $text;
            } else{
              $date   = new DateTime(date("Y-m-d H:i:s",$temptime));
              return $date->format('F j, Y'). ' at '. $date->format('g:i A');
              }
          } else {
          if($text == "min" || $text == 'hr'){
            return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
          } else if ($text == 'Yesterday'){
             return $text;
          } else{
            $date   = new DateTime(date("Y-m-d H:i:s",$temptime));
            $y = $year > $date->format('Y') ? ', '.$date->format('Y') : '';
            return $date->format('F j' . $y);
            }
          }
        }
    }
  }



   }






 ?>
