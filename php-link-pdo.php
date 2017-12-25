<?php

/* @param array args
 *
 *
 */

// $database = "costamar";

// $user	  = 'ubuntu14';
// $password = "Follow1ngcommand?.,!";

$database = 'jobeet';
$user     = "root";
$password = "!root+123+abc+ABC!";

$pdo      = new PDO("mysql:host=192.168.33.13;dbname=$database", $user, $password);
// exit;
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

echo "getAvailableDrivers:";
echo "<pre>",__FILE__." on line ".__LINE__,": "; print_r($pdo->getAvailableDrivers()); echo "</pre>";
try {
	$query = "SELECT * FROM jobeet.jobeet_category WHERE id = :id";
	$id    = 1;
	
	$stmt = $pdo->prepare($query);
	$stmt->bindParam(':id', $id, PDO::PARAM_INT);
	$stmt->execute();
	/* The parameter PDO::FETCH_ASSOC tells PDO to return the result as an associative array. */
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	echo "<pre>",__FILE__." on line ".__LINE__,": "; print_r($stmt->fetch()); echo "</pre>"; 
} catch(PDOException $err) {
    die($err->getMessage());
}






$pdo = null;


