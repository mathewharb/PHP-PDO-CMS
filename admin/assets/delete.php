<?php

session_start();

include_once('../includes/connection.php');
include_once('../includes/Article.php');

$article=new Article;

if (isset($_SESSION['logged_in'])) {
	//display the delete page

	   if (isset($_GET['id'])) {
		  	//if the user has selected an article to delete
	   	   $id=$_GET['id'];
	   	   
	   	   $query=$pdo->prepare("DELETE FROM articles WHERE artcle_id=?");

	   	   $query->bindValue(1, $id);

	   	   $query->execut();
           
           header('Location:delete.php');

		  }

	$articles=$article->fetch_all();

	?>

				       <html>
								<head>
									<title>Simple PDO CMS</title>
									<link rel="stylesheet" type="text/css" href="../assets/style.css">
								</head>
								<body>
								       <div class="container">
								            <a href="index .php" id="logo">CMS</a>

								             
								              	<br/>

								              	<h4>Select An Article to delete</h4>

								              	<!--dropdown select -->
								              	<form action="delete.php" method="get" name="id" >
								              		
								              		<select onchange="this.form.submit();">

								              		  <?php foreach($articles as $article) {?>

								              		       <option value="<?php echo $article['artcle_id']; ?>">
								              		       	<?php echo $article['article_title']; ?>
								              		       </option>
								              			
								              		  <?php } ?>
								              		</select>

								              	</form>
								               
								       </div>
								</body>
								</html>


	<?php

}else{
	//redirrect user to index page
	header('Location:index.php');
}




?>