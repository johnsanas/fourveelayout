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

  <script>
	function allowDrop(ev) {
	    ev.preventDefault();
	}

	function drag(ev) {
	    ev.dataTransfer.setData("text", ev.target.id);
	}

	function drop(ev) {
	    ev.preventDefault();
	    var data = ev.dataTransfer.getData("text");
	    ev.target.appendChild(document.getElementById(data));
	}
	</script>

	<style>

		#div1, #div2
{float:left; width:100px; height:35px; margin:10px;padding:10px;border:1px solid #aaaaaa;}
	</style>
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
		      	<li class="active"><a href="#">Write a Review</a></li>
		        <li><a href="#">News</a></li> 
		        <li><a href="#">Reviews</a></li> 
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
 		<div class="col-sm-10 bg-color">
 			<h2>Write A Review</h2>
 			 <form class="form-horizontal" role="form">
			
			    <div class="form-group">
			      <label class="control-label col-sm-2">Title:</label>
			      <div class="col-sm-10">          
			        <input type="text" class="form-control" id="pwd" placeholder="Title">
			      </div>
			    </div>

			     <div class="form-group">
			      <label class="control-label col-sm-2">Embed Youtube Video</label>
			      <div class="col-sm-10">          
			        <input type="text" class="form-control" id="pwd" placeholder="Embed here">
			      </div>
			    </div>

			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <button type="button" class="btn btn-default" onClick="addText()">Add Text</button>
			        <button type="button" class="btn btn-default">Add Image</button>
			      </div>
			    </div>

			    <div class="col-sm-12" id="canvas" ondrop="drop(event)" ondragover="allowDrop(event)">
			    	
			    	<div id="add"></div>
			    	<div id="add2"></div>
			    	<div  draggable="true" ondragstart="drag(event)" id="drag1" width="100" height="31">
			    		<textarea type="text"></textarea>
			    	</div>

			    	<div  draggable="true" ondragstart="drag(event)" id="drag1" width="100" height="31">
			    		<textarea type="text"></textarea>
			    	</div>
			    	<div  draggable="true" ondragstart="drag(event)" id="drag1" width="100" height="31">
			    		<textarea type="text"></textarea>
			    	</div>
			    	
					

			    </div>



			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <button type="submit" class="btn btn-default">Submit</button>
			      </div>
			    </div>
			  </form>

 		</div>
 		<div class="col-sm-2"></div>
 	</div>
 </div>




</body>
<script>

	var index = 0;
	var addTextBox = [];	
	function addText() {

		
			
		if ((addTextBox[0]) == null){
			addTextBox[0] = '<div draggable="true" ondragstart="drag(event)" id="drag1" width="100" height="31"><textarea type="text"></textarea></div>';

			document.getElementById("add").innerHTML = addTextBox[0];
			
		}else{
			index+=1;
			addTextBox[index] = '<div draggable="true" ondragstart="drag(event)" id="drag1" width="100" height="31"><textarea type="text"></textarea></div>';
			
		}

		document.getElementById("add").innerHTML = addTextBox;
	}
 	

</script>
<footer>



</footer>

</html>