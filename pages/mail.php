<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
		
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="../assets/scss/main.css">
	<link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
<title>Contacto</title>
</head>

<body class="novedades">

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
   <a class="navbar-brand" href="https://wa.me/message/7LW7ZWQO3YAPD1" target="_blank"><img src="../assets/images/wapp.png" class="fluid"></a>
	     <a class="navbar-brand" href="https://www.instagram.com/mercadito_cool" target="_blank"><img src="../assets/images/igIconWhite.png" class="fluid"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
        </li>
		     <li class="nav-item">
          <a class="nav-link" href="../pages/productos.html">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/nosotros.html">Nosotros</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="../pages/novedades.html">Novedades</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="../pages/contacto.html">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	
<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'MC Contacto'; 
		$to = 'mechucz@gmail.com'; 
		$subject = 'Mensaje desde Mercadito Cool ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Hubo un error al enviar el menaje, por favor reintentar luego.</div>';
	}
}
	}
?>

		<footer>
		<h6>©2022 Mercedes Cachaza - Todos los derechos reservados</h6>
	</footer>
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>