<?php

namespace Website\Controllers;


class TestController {

	public function queriesTesten() {

		$topics = getAllTopics();
		// print_r($topics);

		$title = "depressie2";
		$description = "Alles over neerslachtige gevoelens2";
	
		$result = addTopic($title, $description);

		// $connection = dbConnect();
		// $sql = "INSERT INTO `topics` (`id`, `title`, `description`) VALUES (NULL, :title, :description );";
		// // echo $sql;
		// $statement = $connection->prepare($sql);
		// $statement->execute([
		// 	'title' => $title, 
		// 	'description' => $description
		// ]);



		// foreach($topics as $topic){
		// 	echo $topic ['id']. '<br>';
		// 	echo $topic ['title']. '<br>';
		// 	echo $topic ['description']. '<br>';
		// }
		// print_r($topics);
	}

	public function process(){

	}
}