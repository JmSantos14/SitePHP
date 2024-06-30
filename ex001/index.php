<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joao Marcello</title>
</head>
<body>
    <style> 

    </style>
    <h1> Primeiro</h1 >

     <?php
        //var_dump($_REQUEST); //$_get +$_post +$_cookies
        // $nome = $_get["nome"];
        // $sobrenome = $_get["sobrenome"];
        // echo "<p> Bem Vindo $nome $sobrenome";
        $nome = "Joao";
        $sobrenome = "Marcello";
        $idade = 20;
        const pais = "Brasil \u{1f30E}"; 
        echo "Bem Vindo $nome \"Santos\" $sobrenome com $idade anos, do ". pais; 
        //var_dump($idade);  
        date_default_timezone_set("America/Sao_Paulo");
        echo "<p>Dia: " . date("d/M/Y");
        echo "<p>Hora: " . date("G:i:s T");
        //echo "<p>$nome \"Santos\" $sobrenome ";

        $trabalho = "estagio";
        $tempo = "2022";

    ?> 
</body>
</html>
