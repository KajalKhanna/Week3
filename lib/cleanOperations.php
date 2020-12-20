<?php


function clean($data){
    // return the clean data for processing purpose
	strip_tags('$data');
	htmlspecialchars('$data');
    return $data;
}



?>