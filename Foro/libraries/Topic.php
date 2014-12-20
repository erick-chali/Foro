<?php
	class Topic{
		private $db;
		
		public function __construct(){
			$this->db = new Database;
		}
		public function getAllTopics(){
		$this->db->query("SELECT topics.*, users.username, users.avatar, categories.name FROM topics
							INNER JOIN users
							ON topics.user_id = users.id
							INNER JOIN categories
							ON topics.category_id = categories.id
							ORDER BY create_date DESC
							");
		$results = $this->db->resultset();
		
		return $results;
		}
		/*
 		*	Get Categories
 		*/
		function getCategories(){
			$db = new Database;
			$db->query('SELECT * FROM categories');
	
			//Assign Result Set
			$results = $db->resultset();

			return $results;
		}
		/*
		* Get Total # of Topics
		*/
		
		public function getTotalTopics(){
			$this->db->query('SELECT * FROM topics');
			$rows = $this->db->resultset();
			return $this->db->rowCount();
		}
	
		/*
		* Get Total # of Categories
		*/
		public function getTotalCategories(){
			$this->db->query('SELECT * FROM categories');
			$rows = $this->db->resultset();
			return $this->db->rowCount();
		}
		
}
