<!DOCTYPE html>
<html>
<head>
	<title>Form Output</title>
    <link href="style.css" rel ="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,500;0,600;1,200;1,300&family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="container">
<div class="navbar">
<h1>RentACar.AK</h1>
<button class="btn" button onclick = "window.location.href='Untitled-1.html'">Home Page</button>
</div>
</div>
 <div class="line"></div>
          
            

</div>


</section>
       
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = $_POST["name"];
			$email = $_POST["email"];
			$subject = $_POST["subject"];
			$message = $_POST["message"];

			echo "<center><p>Name: $name</p>";
			echo "<p>Email: $email</p>";
			echo "<p>Subject: $subject</p>";
			echo "<p>Message: $message</p>";
		}
	?>
</body>
</html>
