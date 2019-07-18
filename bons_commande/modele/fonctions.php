<?php

function connect()
{
	$pdo = new PDO(
		'mysql:host=localhost;dbname=carrouf',
		'root',
		'q9a9ub',
		[
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		]
	);
	$pdo->exec("SET NAMES UTF8");

	return $pdo;
}

//liste de commandes
function listCommande()
{
	$bd = connect();
	$query = $bd->prepare("SELECT * FROM orders LIMIT 50");

	$query->execute();
	$list = $query->fetchAll();
	return $list;
}

// function getProducts()
// {
// 	$bd = connect();
// 	$query = $bd->prepare("SELECT * FROM `products`");

// 	$query->execute();
// 	$list = $query->fetchAll();
// 	return $list;
// };


// $sql = "SELECT * FROM `orderdetails` WHERE ";
// $statement = $bdd->prepare($sql);
// $statement->execute();
// $orderdetails = $statement->fetch(\PDO::FETCH_ASSOC);



