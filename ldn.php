<?php
error_reporting(E_ERROR | E_PARSE);
$URL = "https://lagedernation.org";
$str = file_get_contents($URL);
$dom = new DOMDocument;
$dom->loadHTML($str);
$cnt = $dom->getElementById('player')->nodeValue; // everything inside the player class, used to scrape current episode
$episode_id = explode(' ',trim($cnt));
$file_url = "https://files.lagedernation.org/lagedernation/" . trim($episode_id[0]) . ".mp3"; // e.g. "https://files.lagedernation.org/lagedernation/LdN271.mp3"

echo $file_url;
// in case first method won't work anymore
//$rest = substr(trim($cnt),0,5);    // e,g. "LdN271", increase interval in case of episode 1000 (maybe never released)
//echo $rest;
?>

