<?php
// Define o tempo de vida do cookie (10 segundos)
//$expire = time() + 10;
 $expire = time() + 1 * 60 * 60;

// Define o valor do cookie
$cookie_value = md5(uniqid());

// Define o nome do cookie
$cookie_name = "bloqueador";

// Define o caminho do cookie (neste caso, todo o site)
$path = "/";

// Define o domínio do cookie (opcional, se o site for subdomínio, etc)
$domain = "";

// Define se o cookie deve ser acessível apenas via HTTPS (true ou false)
$secure = false;

// Configura o cookie
setcookie($cookie_name, $cookie_value, $expire, $path, $domain, $secure);

// Redireciona para a página secreta após definir o cookie
header("Location: ../");
exit;
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carregando</title>
</head>
<body>
    <h1 style=display:flex;align-items:center;justify-content:center;>carregando site...</h1>
    <h2 style=display:flex;align-items:center;justify-content:center;>Devido a erros tecnicos o site estar indisponível agora.</h2>

</body>
</html>