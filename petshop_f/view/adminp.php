<!DOCTYPE html>
<html>
<head>
	<form align="center">
	<title>Pet shop</title>
</head>
<body>
<body>
<h1 style="background-color:gray;">Welcome To Admin profile</h1>
<br>
	<h2>All User Details</h2>
	<button id="load">Click!</button>
	<div id="main">
	</div>
	<script src="jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("#load").on("click",function(e){
				$.ajax({
					url:"adminp1.php",
					type:"POST",
					success:function(data){
						$("#main").html(data);
					}
				});
			});
		});
	</script>
</body>




</form>
</body>
</html>