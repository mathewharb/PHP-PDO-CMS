<?php

//the first thing to do in the admin panel is to start a session
session_start();

include_once('../includes/connection.php');

//now checking if the user is logged in before accessing the admin panel
if (isset($_SESSION['logged_in'])) {
	//if the user is logged in then display the admin index page
?>
<!--admin index page-->

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

				              	<!-- navigation  -->
				              	<ol>
				              		<li><a href="add.php">Add Article</a></li>
				              		<li><a href="delete.php">Delete Article</a></li>
				              		<li><a href="logout.php">Logout</a></li>
				              	</ol>

				               
				       </div>
				</body>
				</html>



<?php

}else{
	//if the user is not logged in then display the login form

	//now checking if the user has licked the submit button
	if (isset($_POST['username'], $_POST['password'])) {
		$username=$_POST['username'];
		$password=md5($_POST['password']);

		//checking if the user typed anything in the form fields
		if (empty($username) or empty($password)) {
			$error='Please Fill in all Fields!';
		}else{
			//checking if the user has entered the correct credentials
			$query=$pdo->prepare("SELECT * FROM users WHERE user_name=? AND user_password=? ");

			$query->bindValue(1, $username);
			$query->bindValue(2, $password);

			$query->execute();

			$num=$query->rowCount();

			  if ($num==1) {
			  	//then the user has enterd the correct credentials
			  	//therefore start up a session
			  	$_SESSION['logged_in']=true;
			  	//then redirrect to hthe admin index page
			  	header('Location:index.php');
			  	//and then exit to prevent any of the code below being shown
			  	exit();

			  }else{
			  	//the user has entered wrong credentials, therefore we echo the errror mesage
			  	$error='Incorrect credentials';

			  }
		}
	}
}

?>

<!-- the login form  -->
				<!DOCTYPE html>
				<html>
				<head>
					<title>Simple PDO CMS</title>
					<link rel="stylesheet" type="text/css" href="../assets/style.css">
				</head>
				<body>
				       <div class="container">
				            <a href="index .php" id="logo">CMS</a>

				              <br/><br/>

				              <!--displaying error message if the form is empty-->
				              <?php if (isset($error)) { ?>
				              	
				              	<small style="color: #aa0000;"><?php echo $error; ?></small>
				              	<br/><br/>

				               <?php }  ?>

				                    <form action="index.php" method="post" autocomplete="off">
				                	
				                	<input type="text" name="username" placeholder="Enter your username">
				                	<input type="password" name="password" placeholder="Enter Password">

				                	<input type="submit" value="Login" />

				                </form>
				       </div>
				</body>
				</html>


<?php


?>