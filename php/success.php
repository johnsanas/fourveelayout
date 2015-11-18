 <?php 

$title = $_GET['title'];	
$embed = $_GET['embed'];
$article = $_GET['article'];
$author = "John Villete";

$con = mysqli_connect("localhost","root","","fourvee");

$sql = "INSERT INTO articles(title,embed_link,author,description,datepublished)
VALUES('$title','$embed','$author','$article','now()')";

if (mysqli_query($con,$sql)){
	echo "<h2>Your article is successfully created !</h2>";
}else{
	echo "<h1>There's an error :( </h1> " . mysqli_error($con);
}


function filterInput($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;

}

?>