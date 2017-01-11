<?php
require('../mongodb/database.php');

if(isset($_GET['categorie'])){
$categorie = htmlspecialchars($_GET['categorie']);
	
	$libcat = array('libelle' => $categorie);   
    $collectionCategories->insert($libcat);
    $ID = $libcat['_id'];
	echo $ID;
}

?>