<?php
  /**
The Article Class
  */
  class Article{
  	 //method to fetch all the articles
  	public function fetch_all()
  	{
  		//using global because with functions you cannot access the con variable directly
  		global $pdo;
        //selecting everything from the articles table
        //and assigning it a variable called $query
  		$query=$pdo->prepare("SELECT * FROM articles");
  		$query->execute();
        
        //returnins all rows inside the table articles
  		return $query->fetchAll();
  	}

    //displays the article details when a user clicks the article link
  	public function fetch_data($article_id)
  	{
         global $pdo;
           

         $query=$pdo->prepare("SELECT * FROM articles WHERE artcle_id=?");
          //selecting all from the articles table where the article id = the parameter we passed in the method
         $query->bindValue(1, $article_id);

         $query->execute();

         return $query->fetch();

  	}


  }



?>