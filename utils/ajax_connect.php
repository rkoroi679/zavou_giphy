<?php 	

require("service.php");	
if (isset($_REQUEST['action']) && !empty($_REQUEST['action']) )
{
	$action = htmlentities($_REQUEST['action']);  
	$version_of_app = 1;  
	switch ($action)
	{			
		case 'read_glipyhs_by_search_item':
			$search_item 	= $_REQUEST['value'];
			$all_gliphys 	= create_search_api($search_item);
			header('Access-Control-Allow-Origin: *');
			header('Content-Type: application/json');
			echo json_encode(array("output" => $all_gliphys));
		break;
		default:
			$no_action = '<h1>There was no action passed!!</h1>' ;
	    	echo json_encode(array("output" => $no_action));
		break;
	}
}

?>
