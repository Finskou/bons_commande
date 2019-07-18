<?php


$numCde = $_GET['numcde'];
require('modele/fonctions.php');
$listProd = listProduit($numCde);

include('utilities/header.phtml');
include('template/detailCde.phtml');
include('utilities/footer.phtml');
