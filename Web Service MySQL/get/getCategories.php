<?php

require('../database/database.php');

	if(isset($_GET['infos']))
	{
		$infos = htmlspecialchars($_GET['infos']);
		$arraylist = explode(",", $infos);
		var_dump($arraylist);
	
		$id = $arraylist[0];
		$password = $arraylist[1];		
	
	
   $infos = array( 
      "id" => $id,
      "password" => sha1($password), 
	  );
	
	
	$users = $connexion->prepare("SELECT * FROM users WHERE id = :id AND password = :password");
	$users->execute($infos);
	$user = $users->fetch();
	
$cats = $connexion->prepare("SELECT * FROM categories");
$cats->execute($infos);
$cat = $cats->fetch();
echo $cat['id'];

}

?>
	