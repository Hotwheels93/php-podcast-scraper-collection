<?php
 error_reporting(E_ERROR | E_PARSE);
 $URL = "https://audionow.de/podcast/18602779-02d6-4bc0-a237-c6cbb0bc41bb";
 $str = file_get_contents($URL);
 $dom = new DOMDocument;
 $dom->loadHTML($str);
 foreach ($dom->getElementsByTagName('div') as $tag) {
        if(strpos($tag->getAttribute('data-audiolink'),'.mp3')!==false)
        {
            $url_cunstructor = $tag->getAttribute('data-audiolink');
			$file_url = explode('?v',$url_cunstructor); 
			echo ($file_url[0]);
            break;	
  }
 }
?>
