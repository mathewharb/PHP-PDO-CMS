
<?php

include_once('includes/connection.php');
include_once('includes/Article.php');

//instanstiating the article class and ssigning it to a variable

$article=new Article;
//assigning the contents of the method called fetch_all to  the variable $articles
//this fetch_al method is inside the Articles class which is assigned to the above variable $article
$articles=$article->fetch_all();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Simple PDO CMS</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
       <div class="container">
            <a href="index .php" id="logo">CMS</a>
                <ol>
                	<!--Displaying the articles using a foreach loop-->
                	<?php foreach ($articles as $article){ ?>

		                	<li><a href="article.php?id=<?php echo $article['artcle_id']; ?>" >
		                	     <?php echo $article['article_title'];  ?>
		                	</a>
		                       -<small>

		                       Posted on:  <?php echo date('l jS', $article['article_timestamp']); ?>

		                       </small>
		                	</li>

                	<?php } ;?>

                </ol>
                <br/>

                <small><a href="admin">Admin</a></small>
       </div>
</body>
</html>