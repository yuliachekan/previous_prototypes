<?php

//get the learningfuze page and output it to the file stream.  It won't look exactly right because the local addresses for successive links will try to go to the same file

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,'https://rss.itunes.apple.com/api/v1/us/tv-shows/top-tv-episodes/10/explicit/json'); //the address to go to
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);  //this tells it to return the transferred value, passing it via the return of the curl_exec function
$returnValue = curl_exec($ch);  //capture the value for later use

$decodedValue = json_decode($returnValue,true);  //since we know we were requesting json, this will be a json value, decode it into a PHP associative array

$showArray = $decodedValue['feed']['results'];
?>
<style>
	.movie{
		float: left;
		width: 33%;
		border-top: 5px solid black;
		margin-top: 10px;
	}
</style>
<?php
foreach($showArray as $value){ //iterate through each item in the array
	//then switch out of php mode to make some html
	//each array item will be in the $value var, one at a time
	?>
	<div class="movie">
		<div><strong>Name:</strong> <?=$value['artistName'];?></div>
		<div><strong>Genre:</strong> <?=$value['primaryGenreName'];?></div>
		<div><strong>Rating:</strong> <?=$value['trackExplicitness'];?></div>
		<img src="<?=$value['artworkUrl100'];?>">
	</div>
	<?php
}
?>