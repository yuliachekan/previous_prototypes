<?php

//get the learningfuze page and output it to the file stream.  It won't look exactly right because the local addresses for successive links will try to go to the same file

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,'http://learningfuze.com'); //the address to go to
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  //we have to follow the redirect because the website redirects contents to another location.  IF this was not set, then the page will simply show us the 301 page
curl_exec($ch);

?>