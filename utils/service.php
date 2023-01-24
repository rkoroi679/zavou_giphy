<?php 

function create_search_api($text) {
	$api_key 	= 'I7xDtk4NVj3ZHdzHIgo6183bQuPfwZPj';
	$url 		= "http://api.giphy.com/v1/gifs/search?q=".$text."&api_key=".$api_key."&limit=5";
	$response 	= json_decode(file_get_contents($url));	
	$result  	= [];
	foreach ($response->data as $key => $value) 
	{
		$url 			= $value->images->downsized->url;
		$title 			= $value->title;
		$temp_result 	= array($url, $title);
		array_push($result, $temp_result);
	}	
	return $result;
}

?>

