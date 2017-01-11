<?php

function verifLangue($langue){
	
	$listLangue = array('fr', 'en', 'es', 'nl');
	
	if(in_array($langue, $listLangue)){
		return $langue;
	}else{		
		echo json_encode(array("error" => 'langue'));
		return "false";
	}
}

function verifBirth($birth){
	
	if(preg_match("/[0-9]{4}\-[0-9]{2}\-[0-9]{2}/", $birth)){
return $birth;		
		} else{
		
		echo json_encode(array("error" => 'birth'));
		return "false";
	}
}


function verifPrenom($prenom){
	if(strlen($prenom) > 20){
		
		echo json_encode(array("error" => 'prenom'));
		return "false";
	}else{
		return $prenom;
	}
	
}

	
function verifMail($email)
{
	global $collectionUsers;
	
		$email = htmlentities($email);
		
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
		echo json_encode(array("error" => 'invalid email'));
		return "false";
	}else{
	
		return $email;
		
	}
}


function verifSexe($sexe){
	
	$listSex = array('M', 'F', 'm', 'f');
	if(in_array($sexe, $listSex))
	{	
		return $sexe;
	}
	else
	{
		echo json_encode(array("error" => 'sexe'));	
		return "false";
	}	
}




?>