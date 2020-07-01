<?php

// connect to MongoDB
$m = new MongoDB\Driver\Manager('mongodb://localhost:27017');

// select a database
var_dump($m);
$db = $m->university;

// select a collection 
$collection = $db->mahasiwa;

//returns a cursor for the search results
$cursor = $collection->find();

// iterate through the results
foreach ($cursor as $document) {
    echo '"_id": '.$document["_id"]."<br />";
	echo '"title": '.$document["title"]."<br />";
	echo '"author": '.$document["author"]."<br />";
} 
?> 