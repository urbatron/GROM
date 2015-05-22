<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link href="css/main.css" type="text/css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/ajax.js"></script>
<script src="js/script.js"></script>
<title>Форма</title>
</head>
<body>
<div class="center">

	<h2>Subscribe to our newsletter.</h2>
	<hr>
	<p class="text">Subscribe to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>

	<form action="send.php" method="post" id="form">
	<input type="text" placeholder="enter your email adress" name="email" id="email">
	<input type="submit" value="subscribe" id="send">
	</form>

	<p id="red"><img src="images/red.png" alt="">plese enter a valid email address</p>
	<p id="green"><img src="images/green.png" alt="">thanks, your address has been added</p>
	<div id="test_form"></div>

	</div><!--END CENTER-->
	
</body>
</html>
