<html>
   <head>
   <title></title>
   		<link rel="stylesheet" href="css/chat.css" type="text/css">
   </head>
   <body>
   	  <div class="container">


   	  	<center>
   	  	<div class="superior">
   	  		<?php

   	  		include 'connect.php';

   	  		$msg = mysqli_query($con, "SELECT * FROM mensagens ");

   	  		while($line = mysqli_fetch_array($msg)) {
   	  			$usuario = $line['usuario'];
   	  			$mensagem = $line['mensagem'];


   	  			echo "$usuario : $mensagem <br>";
   	  		}

   	  		 ?>
   	  	</div>


   	  	<div class="campos">
   	  		<form action="enviar.php" method="post">
   	  			<input type="text" name="usuario" placeholder="Usuario">
   	  			<input type="text" name="msg" placeholder="Mensagem">
   	  			<input type="submit" value="Enviar">
   	  		</form>
   	  	</div>


   	  </center>
   	  </div>
   </body>
 </html>
