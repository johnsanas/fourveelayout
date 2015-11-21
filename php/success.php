 <?php 

$title = $_POST["title"];
$title = htmlspecialchars($title);

$embed = $_POST['embed'];
$article = $_POST['article'];
$author = "John Villete";

$con = mysqli_connect("localhost","root","","fourvee");

$sql = "INSERT INTO articles(title,author,article,embed_link)
VALUES('$title','$author','$article','$embed')";


if(isset($_POST['btn-upload']))
{    
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="../img/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$query_image="INSERT INTO articles(image,type,size) VALUES('$final_file','$file_type','$new_size')";
		mysqli_query($con,$query_image);
		echo "Upload Success";
	}
	else
	{
		echo "Error Uploading";
	}
}

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