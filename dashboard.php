<?php
header_remove("X-Powered-By");
// sessão
session_start();

// verificaçao
if (!isset($_SESSION['logado'])) {
	header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<link rel="stylesheet" href="/css/main.css">
</head>
<body>
	<div class="content">
		<h1>Dashboard</h1>
		<br>
		<br>
		<?php echo "Olá ". $_SESSION[name]. PHP_EOL; ?>
		<br>
		<br>
		<!-- <a href="logout.php" rel="noopener noreferrer">Logout</a> -->
		<button onClick="window.location = 'logout.php'" >Logout</button>
		<br>
		<br>
		<?php
            echo $_SERVER['HTTP_USER_AGENT'] . '<br>';
			echo '<br>';
			// Data e hora
			date_default_timezone_set("Europe/Lisbon");
			echo "Portugal Lisboa" . '<br>';
			echo '<br>';
			echo date('Y-m-d H:i:s') . '<br>';
			echo '<br>';
			echo 'Seu ip: ' . $_SERVER['REMOTE_ADDR'] . '<br>';
        ?>
	</div>
</body>
</html>
