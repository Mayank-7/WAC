<?php

	class Post{

		//db stuff
		private $conn;
		private $table = 'category_mst';

		//post prooperties
		public $catid;
		public $catname;
		public $description;
		public $status;
		public $catimagepath;

		// constructor with db connection
		public function __construct($db){
			$this->conn = $db;

		}
	

		public function read(){
			//create query
			$query='SELECT * FROM ' .$this->table .' ORDER BY catid';

		//prepare statement
		$stmt = $this->conn->prepare($query);
		//execute query
		$stmt->execute();

		return $stmt;

		
	}
}
?>