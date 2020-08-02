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
		public function create(){
			//create query
			$query = 'INSERT INTO ' . $this->table . ' SET catid = :catid, catname= :catname, description = :description, status= :status';
			//prepare statemenet
			$stmt = $this->conn->prepare($query);
			//clean data
			$this->catid = htmlspecialchars(strip_tags($this->catid));
			$this->catname = htmlspecialchars(strip_tags($this->catname));
			$this->description = htmlspecialchars(strip_tags($this->description));
			$this->status = htmlspecialchars(strip_tags($this->status));
			///binding of parameters

			$stmt->bindParam('catid', $this->catid);
			$stmt->bindParam('catname', $this->catname);	
			$stmt->bindParam('description', $this->description);
			$stmt->bindParam('status', $this->status);

			//execute query
			if($stmt->execute()){
				return true;
			}

			//print error if something goes wrong
			printf("Error %s. \n", $stmt->error);
			return false;


		}
}
?>
