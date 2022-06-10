<?php
// Encerrando a sessão
session_start();
$_SESSION['logado'] = false;
session_unset();
session_destroy();

header('Location: index.php');
?>
