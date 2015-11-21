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
		      	<li class="active"><a href="#">Write Your Review</a></li>
		        <li><a href="../index.php">News</a></li> 
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
 			 <form class="form-horizontal" role="form" method="post" action="success.php" enctype="multipart/form-data">
			
			    <div class="form-group">
			      <label class="control-label col-sm-2">Title:</label>
			      <div class="col-sm-10">          
			        <input type="text" class="form-control"  placeholder="Title" name="title">
			      </div>
			    </div>

			     <div class="form-group">
			      <label class="control-label col-sm-2">Embed Youtube Video</label>
			      <div class="col-sm-10">          
			        <input type="text" class="form-control" id="pwd" placeholder="Embed here" name="embed">
			      </div>
			    </div>

			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <button type="button" class="btn btn-default" onClick="addText()">Add Text</button>
			        <button type="button" class="btn btn-default" onClick="addImage()">Add Image</button>
			      </div>
			    </div>

			    <div class="col-sm-12" id="canvas" ondrop="drop(event)" ondragover="allowDrop(event)">
			    	
			    	<div id="addImage-container"></div>
			   
				    <div class="col-sm-12" id="canvas" ondrop="drop(event)" ondragover="allowDrop(event)">
				    	<div  draggable="true" ondragstart="drag(event)" id="drag1" width="100" height="31">
				    		<textarea type="text" name="article"></textarea>
				    	</div>
				    </div>

			    </div>
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <button type="submit" class="btn btn-default" name="btn-upload">Submit</button>
			      </div>
			    </div>
			  </form>

 		</div>
 		<div class="col-sm-2">
 			<div class="col-sm-12 write-sidebar bg-color">

 				<div class="col-sm-12">
	 				To make text <b>bold</b>. Insert &ltb&gt &lt/b&gt between text.
	 				<div>e.g. <div>&ltb&gt <b>This is a bold text.</b> &lt/b&gt </div></div>
 				</div>

 				<div class="col-sm-12">
	 				To make an <i>italize</i> text. Insert &lti&gt &lt/i&gt between text.
	 				<div>e.g. <div>&lti&gt <i>This is italize text.</i> &lt/i&gt </div></div>
 				</div>

 				<div class="col-sm-12">Tip: You can embed your youtube video here</div>

 				<div class="col-sm-12">Tip: You can drag to the bottom right corner of textbox to extend its height  </div>

 			</div>
 		</div>
 	</div>
 </div>

</body>
<script>

	
	function addText() {
		var appendTextBox = '<div class="col-sm-12" id="canvas" ondrop="drop(event)" ondragover="allowDrop(event)"><div  draggable="true" ondragstart="drag(event)"id="drag3" width="100" height="31"><textarea type="text"  name="article"></textarea></div></div>';
		 $("#addImage-container").append(appendTextBox);
	}
 	
	function addImage() {
		var image = '<div draggable="true" ondragstart="drag(event)" id="drag1" ><input type="file" name="file"></div>';
		 $("#addImage-container").append(image);
	}
 	
</script>
<footer>

</footer>

</html>