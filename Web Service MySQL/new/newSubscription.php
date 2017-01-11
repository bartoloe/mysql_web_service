<?php

require('../database/database.php');
require('../verifs/verifs.php');

if(isset($_GET['infos'])){
$inscription = htmlspecialchars($_GET['infos']);
	$arraylist = explode(",", $inscription);
	var_dump($arraylist);
	
	$prenom = verifPrenom($arraylist[0]);
	$password = $arraylist[1];
	$email = verifMail($arraylist[2]);
	$langue = verifLangue($arraylist[3]);
	$sexe = verifSexe($arraylist[4]);
	$birth = verifBirth($arraylist[5]);
	echo $birth;
   	
if($prenom != "false" && $password != "false" && $email != "false" && $langue != "false"&& $sexe != "false"&& $birth != "false"){
	
   
   $infos = array( 
      "prenom" => $prenom,
      "password" => $password, 
	  "email" => $email,
      "langue" => $langue,
      "sexe" => $sexe,
      "birth" => $birth
   );
	
	
$insert = $connexion->prepare("INSERT INTO users(id, prenom, password, email, langue, sexe, birth, date_inscription) VALUES ('', :prenom, :password, :email, :langue, :sexe, :birth, NOW())");

$insert->execute($infos);
$id = $connexion->lastInsertId();
	echo $id;

}
}