

<?php

include 'connect.php';
$usuario= $_POST['usuario'];
$msg = $_POST['msg'];

$sql = mysqli_query($con, "INSERT INTO mensagens (usuario, mensagem) VALUES('$usuario', '$msg')");



if($sql > 0){
	echo "Mensagens enviadas";
}else {
	echo "ops, algo deu errado";
}

header('location: index.php');
 ?>

