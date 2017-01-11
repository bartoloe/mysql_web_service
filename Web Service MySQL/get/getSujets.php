<?php

require('../mongodb/database.php');

	if(isset($_GET['infos']))
	{
		$infos = htmlentities($_GET['infos']);
		$arraylist = explode(",", $infos);
		var_dump($arraylist);
	
		$id = $arraylist[0];
		$password = $arraylist[1];	
		
		
		

  $cursor = $collectionUsers->find(array('_id' => new MongoId($id), 'password' => $password));
	
	
	$curs = iterator_to_array($cursor);
	if(!empty($curs))
	{	
		
		$sujet = $collectionSujets->find();
		$arraysujet = iterator_to_array($sujet);
		var_dump($arraysujet);
	
	}
	else
	{
	echo 'bad credentials';
	}
	}
	
   
	
	
	
	
	 $mongo->close();
	


	
?>