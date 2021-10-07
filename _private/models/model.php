<?php
// Model functions
// In dit bestand zet je ALLE functions die iets met data of de database doen

function getUsers() {
	$connection = dbConnect();
	$sql        = "SELECT * FROM `users`";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
}

function getAllTopics(){
	$connection = dbConnect();
	$sql = 'SELECT * FROM `topics`';
	$statement = $connection->query($sql);
	$topics = $statement->fetchAll();
	
	return $topics;
}

function addTopic($title, $description){

	$connection = dbConnect();
		$sql = "INSERT INTO `topics` (`id`, `title`, `description`) VALUES (NULL, :title, :description );";
		// echo $sql;
		$statement = $connection->prepare($sql);
		$result = $statement->execute([
			'title' => $title, 
			'description' => $description
		]);

		return $result;
}