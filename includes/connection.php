<?php

   try{
   $pdo=new PDO('mysql:host=localhost;dbname=pdocms', 'root', '123');

}catch(PDOException $e){
	exit('Error could not connect');
}




?>
