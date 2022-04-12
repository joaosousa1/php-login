<?php
function secure_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

# A função secure_imput impede ataques Cross-site scripting (XSS)
# <img src="nao_existe" onclick="alert('hacked')">

# Troque
# echo $_POST["name"]
# por 
# echo secure_input($_POST["name"])

// Autenticação
$p = md5(secure_input($_POST["pass"]));

//  Exemplo obter a hash numa consola
//  php -r 'echo md5("admin") . PHP_EOL;'

$user = "admin";
$secure = "21232f297a57a5a743894a0e4a801fc3";

if ( secure_input($_POST["name"]) == $user and $p == $secure ) {
    ini_set( 'session.cookie_httponly', 1 );
    session_start();
    $_SESSION['logado'] = true;
    $_SESSION['name'] = secure_input($_POST["name"]);

    // log file
    date_default_timezone_set("Europe/Lisbon");
    $t = date('Y-m-d H:i:s') . "\n";
    $log = fopen('login-log.txt', 'a');
    fwrite($log, 'login ' . $_SESSION['name'] . ' | IP: ' . $_SERVER['REMOTE_ADDR'] . ' | ' . $t);  
    fclose($log);

    header('Location: dashboard.php');
} else {

    // log file
    date_default_timezone_set("Europe/Lisbon");
    $t = date('Y-m-d H:i:s') . "\n";
    $log = fopen('login-log.txt', 'a');
    fwrite($log, 'tentativa de login falhada | IP: ' . $_SERVER['REMOTE_ADDR'] . ' | ' . $t);  
    fclose($log);

    header('Location: erro.php');
}

?>
