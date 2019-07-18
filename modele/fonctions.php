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

//liste des commandes
function listCommande()
{
	$bd = connect();
	$query = $bd->prepare("SELECT * FROM orders");

	$query->execute();
	$listCde = $query->fetchAll();
	return $listCde;
}
//liste des produits
function listProduit($detail)
{
	$bd1 = connect();
	$query1 = $bd1->prepare("SELECT products.productName, priceEach, quantityOrdered, round(priceEach * quantityOrdered) AS total
		FROM `orderdetails` 
		INNER JOIN products
		ON products.productCode = orderdetails.productCode
		WHERE orderdetails.orderNumber = '$detail'");

	$query1->execute();
	$listProd = $query1->fetchAll();
	return $listProd;
}
