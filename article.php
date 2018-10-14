<?php

include_once('includes/connection.php');
include_once('includes/Article.php');

//instanstiating the article class and ssigning it to a variable
$article=new Article;

//checking if the user clicked the article id link 
if (isset($_GET['id'])) {
	//the display the article content
	$id=$_GET['id'];

	$data=$article->fetch_data($id);

?>

<!--CREATING THE ACTUAL PAGE  -->

			<!DOCTYPE html>
			<html>
			<head>
				<title>Simple PDO CMS</title>
				<link rel="stylesheet" type="text/css" href="assets/style.css">
			</head>
			<body>
			       <div class="container">
			            <a href="index .php" id="logo">CMS</a>
			                <h4><?php echo $data['article_title']; ?></h4>-
			                <small>
			                	Posted on: <?php echo date('l jS', $data['article_timestamp']);   ?>
			                </small>
			                <p><?php echo $data['article_content']; ?></p>

			                <!--back button-->
			                <a href="index.php">&larr; Back</a>
			       </div>
			</body>
			</html>
<?php

}else{
	//otherwise
	header('Location:index.php');
	exit();
}

?>