<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
//initialaizing our api
include_once('../core/initialize.php');

//instantiate post
$post = new Post($db);
//get raw posted data
$data = json_decode(file_get_contents("php://input"));

$post->catid  =$data->catid;
$post->catname  =$data->catname;
$post->description  =$data->description;
$post->status  =$data->status;

//create post
if($post->create()){

	echo json_encode(
		array('message'=> 'Successfull'));
}else{

	echo json_encode(array('message' => 'Fail'));
}

?>