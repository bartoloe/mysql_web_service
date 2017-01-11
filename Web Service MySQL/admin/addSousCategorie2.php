<?php
require('../mongodb/database.php');

if(isset($_GET['categorie'])){
	
$categorie = htmlspecialchars($_GET['categorie']);
		$arraylist = explode(",", $categorie);
	$libcat = array('libelle' => $arraylist[0], 'id_cat' => $arraylist[1], 'id_souscat' => $arraylist[2]);   
    $collectionSousCategories2->insert($libcat);
    $ID = $libcat['_id'];
	echo $ID;
}

?>