<?php 


$db = mysqli_connect('localhost', 'root', '', 'loginphp');

if(!$db){
	echo "Database Error";
}


function sanitize($dirty){
	$dirty = strip_tags($dirty);
	$dirty = str_replace(" ", "", $dirty);
	return $dirty;
}