<?php
	//get method
	$data = $_GET;
	//Now we know that the text user enters in the input field is present inside user_text
	$user_text = $_GET['user_text'];
	//The next thing the server does that it converts the text into capital letters
	$response = strtoupper($user_text);
            //Now the response is ready now send it back to client (echo is for displaying output in php) 
	echo $response;
?>
