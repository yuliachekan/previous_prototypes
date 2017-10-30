<?php

//get the learningfuze page and output it to the file stream.  It won't look exactly right because the local addresses for successive links will try to go to the same file

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,'https://rss.itunes.apple.com/api/v1/us/tv-shows/top-tv-episodes/10/explicit/json'); //the address to go to
curl_exec($ch);

?>