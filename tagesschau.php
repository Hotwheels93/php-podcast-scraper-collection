<?php
 error_reporting(E_ERROR | E_PARSE);
 $URL = "https://www.tagesschau.de/download/podcast";
 $str = file_get_contents($URL);
 $dom = new DOMDocument;
 $dom->loadHTML($str);
 foreach ($dom->getElementsByTagName('a') as $tag) {
        if(strpos($tag->getAttribute('href'),'.mp3')!==false)
        {
            echo $tag->getAttribute('href');
            break;	
  }
 }
?>