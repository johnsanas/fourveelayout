<?php 

$con = mysqli_connect("localhost","root","","fourvee");

if(isset($_GET['article_id'])){
	$article_id = $_GET['article_id'];
	//header('location:../index.php');
}

$query = "SELECT * FROM articles where article_id = $article_id limit 1";
$result = mysqli_query($con,$query);

$articles = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fourvee | Latest Technology Trends, Newest Technology News</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../js/bootstrap.js"></script>
  <link rel="stylesheet" href="../css/font-awesome.css" type="text/css" >
  <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<nav class="navbar navbar-default">
  	
  		<div class="col-sm-1">
  		</div>
  		<div class="col-sm-3">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span> 
		      </button>
		      <a class="navbar-brand text-center" href="../index.php"><div class="header-logo"></div></a>
		    </div>
	    </div>

	    <div class="col-sm-8" id="header-right">
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right">
		      	<li><a href="write.php">Write Your Review</a></li>
		        <li><a href="../index.php">News</a></li> 
		        <li class="active"><a href="#">Reviews</a></li> 
		        <li><a href="#">Entertainment</a></li> 
		        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		      </ul>
		    </div>
	     </div>
</nav>

<!--body-->
 <div class="container">
 	<div class="row">
 		<div class="col-sm-8" id="articles" >
 			<div class="article-container bg-color" id="review">
 				<div id="title"><a href="#"><h1><?php  echo $articles['title']; ?></h1></a></div>
 				<div><?php  echo $articles['embed_link']; ?></div>
 				<div id="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $articles['image'] ).'' . ");'"; ?> ></div>
 				<div id="author"><?php  echo "by " . $articles['author']. " | " . $articles['datepublished']; ?></div>
 				<div id="preview"><?php echo $articles['article']; ?></div>
 				<div id="social">
					<i class="fa fa-facebook"></i>
					<i class="fa fa-twitter"></i>
					<i class="fa fa-google-plus"></i>
				</div>
 			</div>
 		</div>
 		
 		<div class="col-sm-4" id="sidebar"></div>
 	</div>
</div>

<script>


	function viewReview(article_id) {
		
		<?php $_SESSION['article_id'] = 1; ?>
		  

	}
 
 	
</script>
</body>
</html>