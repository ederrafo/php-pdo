<?php


$dsn ="odbc:test";
$user = 'root';
$password = '!root+123+abc+ABC!';

try {
	$dbh = new PDO($dsn, $user, $password);
	$query = 'SELECT * FROM jobeet.jobeet_category';
	$stmt = $dbh->prepare($query);
	$stmt->execute();
	/* The parameter PDO::FETCH_ASSOC tells PDO to return the result as an associative array. */
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	echo "<pre>",__FILE__." on line ".__LINE__,": "; print_r($stmt->fetch()); echo "</pre>"; 





} catch(PDOException $e){
	echo $e->getMessage();
}



