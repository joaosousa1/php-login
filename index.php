<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Incio</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
<div class="center">
    <div class="content">
        <form action="login.php" method="post">
                
            <div>Nome: </div>
            <div><input type="text" name="name"></div>       
        
            <div>Password:</div>
            <div><input type="password" name="pass"></div>
        
            <div></div>
            <div><button style="width:100%"type="submit">Login</button>

        </form>
        </div>
        <br>
        <div style="text-align: center;">
            <?php header_remove("X-Powered-By");?>
            &copy João Sousa <?php  echo date("Y"); ?>
            <br>
            <?php 
                date_default_timezone_set("Europe/Lisbon");
            ?>
            <br>
            <?php
                echo date("Y-m-d H:i:s")
            ?>
        </div>
    </div>
</div>
</body>
</html>
