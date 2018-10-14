<?php  

session_start();

include_once('../includes/connection.php');

//checking if the user is logged in

if (isset($_SESSION['logged_in'])) {
	//then display the add article form
	if (isset($_POST['title'], $_SESSION['content'])) {
		$title=$_POST['title'];
		$content=nl2br($_POST['content']);

		//if the title and content fields are empty
		//then display error message
	      if (empty($title) or empty($content)) {
	      	$error='Please Fill in all Fields!';
	      }else{

	      	$query=$pdo->prepare("INSERT INTO articles(article_title, article_content, article_timestamp) VALUES(?,?,?)");

	      	$query->bindValue(1, $title);
	      	$query->bindValue(2, $content);
	      	$query->bindValue(3, time());

	      	$query-execute();

	      	header('Location:indes.php');
	      }
	}
?>
   
   <!--add article form-->
			     <!DOCTYPE html>
							<html>
							<head>
								<title>Simple PDO CMS</title>
								<link rel="stylesheet" type="text/css" href="../assets/style.css">
							</head>
							<body>
							       <div class="container">
							            <a href="index .php" id="logo">CMS</a>

							              	<br/>

							                <h4>Add Article</h4>
                                               <!--displaying error message if the form is empty-->
				                               <?php if (isset($error)) { ?>
				              	
				                             	<small style="color: #aa0000;"><?php echo $error; ?></small>
				              	                 <br/><br/>

                                                  <?php }  ?>

							                 <form action="add.php" method="post" autocomplete="off">
							                 	<input type="text" name="title" placeholder="Article Title"><br/><br/>

							                 	<textarea rows="15" cols="50" placeholder="Article Content" name="content" >
							                 		
							                 	</textarea><br/><br/>

							                 	<input type="submit" value="Add Article">

							                 </form>

							       </div>
							</body>
							</html>


<?php

}else{
	//if theuser is not logged in
	//then redirrect to index page
	header('Location:index.php');
}


?>