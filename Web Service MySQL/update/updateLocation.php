<?php

require('../mongodb/database.php');

	if(isset($_GET['infos']))
	{
		$infos = htmlentities($_GET['infos']);
		$arraylist = explode(",", $infos);
		var_dump($arraylist);
	
		$id = $arraylist[0];
		$password = $arraylist[1];	
		$lon = $arraylist[2];
		$lat = $arraylist[3];
		
		
		

  $cursor = $collectionUsers->find(array('_id' => new MongoId($id), 'password' => $password));
	
	
	$curs = iterator_to_array($cursor);
	if(!empty($curs))
	{	
		$update = $collectionUsers->update(array('_id' => new MongoId($id)), array('$set' => array('longitude' => $lon, 'latitude' => $lat)));
		
	}
	else
	{
	echo 'bad credentials';
	}
	}
	
   
	
	
	
	
	 $mongo->close();
	


	
?>