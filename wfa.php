<?php
 error_reporting(E_ERROR | E_PARSE);
 $URL = "https://wohlstandfueralle.podigee.io/archive";
 $str = file_get_contents($URL);
 $dom = new DOMDocument;
 $dom->loadHTML($str);
 foreach ($dom->getElementsByTagName('a') as $tag) {
        if(strpos($tag->getAttribute('href'),'.mp3')!==false)
        {
            $url_cunstructor = $tag->getAttribute('href');
			$file_url = explode('?v',$url_cunstructor); 
			echo ($file_url[0]);
            break;	
  }
 }
?>