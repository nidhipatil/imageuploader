
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Form Tutorial</title>
      <link rel="stylesheet"  href="style.css">
		
</head>
<body class="container_main">
      <div class="container">
      	<h2>SEND E-MAIL</h2>
      	<form class="contact-form" action="contactform.php" method="post">
      		<input type="text" name="name" placeholder="Full name"><br><br>
      		<input type="text" name="mail" placeholder="Your e-mail"><br><br>
      		<input type="text" name="subject" placeholder="subject"><br><br>
      		<textarea name="message" placeholder="message"></textarea><br><br>
      		<button type="submit" name="submit">SEND E-MAIL</button>
      	</form>
      </div>
</body>
</html>