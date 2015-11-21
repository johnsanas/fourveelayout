<?php 

$con = mysqli_connect("localhost","root","","fourvee");

$query = "SELECT * FROM articles where (day(now()) - day(datepublished) < 3 ) order by datepublished limit 1";
$result = mysqli_query($con,$query);
$featured = mysqli_fetch_assoc($result);

//limits the preview text on article 
$countString = strlen($featured['article']);
$limitString = $countString * 0.5;


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fourvee | Latest Technology Trends, Newest Technology News</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <link rel="stylesheet" href="css/font-awesome.css" type="text/css" >
  <link rel="stylesheet" href="css/style.css">

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
		      <a class="navbar-brand text-center" href="#"><div class="header-logo"></div></a>
		    </div>
	    </div>

	    <div class="col-sm-8" id="header-right">
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right">
		      	<li><a href="php/write.php">Write Your Review</a></li>
		        <li class="active"><a href="#">News</a></li> 
		        <li><a href="php/review.php">Reviews</a></li> 
		        <li><a href="#">Entertainment</a></li> 
		        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		      </ul>
		    </div>
	     </div>
</nav>

<!--body-->
 <div class="container">
 	<div class="row" >
 		<div class="col-sm-8 bg-color" id="head-article">
 			<div id="image"  <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $featured['image'] ).'' . ");'"; ?> ></div>
 			<div id="title"><a href="php/review.php?article_id=<?php echo $featured['article_id']; ?>"><h1><?php  echo $featured['title']; ?></h1></a></div>
 			<div id="author"><?php  echo "by " .$featured['author'] ." | "; ?><span><?php  echo $featured['datepublished']; ?></span></div>
			<div id="preview"><?php echo substr($featured['article'], 0 ,$limitString); ?></div>
			<div id="social">
				<i class="fa fa-facebook"></i>
				<i class="fa fa-twitter"></i>
				<i class="fa fa-google-plus"></i>	
			</div>
 		</div>	

 		<!--
	     <div>
	     	<div id="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $featured['image'] ).'' . ");'"; ?> ></div>
			<div id="title"><a href="php/page.php"><?php  echo $featured['title']; ?></a></div>
			<div id="author"><?php  echo "by " .$featured['author'] ." | "; ?><span><?php  echo $featured['datepublished']; ?></span></div>
			<div id="preview"><?php echo substr($featured['article'], 0 ,$limitString); ?></div>
			<div id="social">
				<i class="fa fa-facebook"></i>
				<i class="fa fa-twitter"></i>
				<i class="fa fa-google-plus"></i>
			</div>

	     </div>
		-->

 		<div class="col-sm-4" id="sub-article">
 			<div class="bg-color" id="sub-article-bg"></div>
 		</div>
 	</div>

 	<hr class="line">

 	<div class="row">
 		<div class="col-sm-8" id="articles" >
 			<div class="article-container bg-color">
 				<div id="image" class="col-sm-12 bg-color"></div>
 				<div id="title"><a href="#">Simulated brain cells give robot instinctive navigation skills</a></div>
 				<div id="preview">A team of researchers at Singapore's Agency for Science, Technology and Research (A*STAR) announced on Wednesday that they had taught a robot how to navigate on its own, in much the same way that humans and other animals do. They reportedly accomplished this feat by digitally replicating two types of neurons that help animals geolocate naturally. These cells are known as known as "grid" and "place" cells. Place cells were first discovered in the 1970s by Nobel-winning Neuroscientist John O'Keefe. They fire whenever an animal passes a familiar spot in its environment. Grid cells, which were discovered in 2005, provide a detailed sense of position in three-dimensional space and help build mental maps. "Artificial g</div>
 				<div id="author">by Roelito Craballo | 2015-10-22 00:00:00.000000</div>
 				<div id="social">
					<i class="fa fa-facebook"></i>
					<i class="fa fa-twitter"></i>
					<i class="fa fa-google-plus"></i>
				</div>
 			</div>

 			

 		</div>
 		
 		<div class="col-sm-4" id="sidebar">
 			<div class="bg-color" id="sidebar-bg">
 				<div id="highlights"><span id="high">High</span><span id="lights">lights</span></div>
 				<div id="highlights-article">
 					<div class="col-sm-3">
 						<div id="image"></div>
 					</div>
 					<div class="col-sm-9">
	 					<div id="title">Computer Science is the most popular major for women at Stanford</div>
	 					<div id="preview">Stanford reportedly has 214 female students enrolled in its Computer Science major -- that's 30 percent</div>
 					</div>
 				</div>
 			</div>
 		</div>
 		
 	</div>

 </div>
<script>


	function viewReview(article_id) {
		
		<?php $_SESSION['article_id'] = 1; ?>
		  

	}
 
 	
</script>
</body>
</html>