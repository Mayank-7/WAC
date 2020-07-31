<?php


	//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//initialaizing our api
include_once('../core/initialize.php');

//instatitate post

$post = new Post($db);
$result = $post->read();

//get the row count

$num =$result->rowCount();

if($num>0){
	$post_arr = array();
	$post_arr['categories'] =array();

	while($row = $result->fetch(PDO::FETCH_ASSOC)){
		extract($row);
		$post_item = array(
			'Category_id' => $catid,
			'Category_name' => $catname,
			'Category_desc' => html_entity_decode($description),
			'status' => $status
		);
		array_push($post_arr['categories'],$post_item);
	}
	//convert to JSON and output
	echo json_encode($post_arr);
}else{
	echo json_encode(array('message' => 'No posts found.'));
}
?>