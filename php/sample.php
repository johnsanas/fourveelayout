<!DOCTYPE html>
<html>
<body>

<p>This example uses the addEventListener() method to attach a click event to a button.</p>

<button onClick="displayDate()" id="myBtn">Try it</button>

<p id="demo"></p>

<script>


function displayDate() {
    document.getElementById("demo").innerHTML = '<?php echo "hello"; ?>';
}
</script>

</body>
</html> 
