<?php

   try{
   $pdo=new PDO('mysql:host=localhost;dbname=pdocms', 'root', 'controlpass123');

}catch(PDOException $e){
	exit('Error could not connect');
}




?>