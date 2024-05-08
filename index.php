<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>

<?php 
const MYCAR = "henricao car";
echo MYCAR;

define("carros", [
    "Alfa Romeo",
    "BMW",
    "Toyota",
]);
echo "<br>" . carros[1];

define("HENRIQUE", "Seja bem vindo ao codigo");

function myHen() {
    echo HENRIQUE;
}

echo "<br>" . myHen();

define("coco","muito bem cagado");
if (5>2) {
    echo(coco);
}

$var = "var2";
switch ($var) {
    case "var1": 
        echo("<br> variavel 1 setada com sucesso");
        break;
        case "var2": 
            echo("<br> variavel 2 setada com sucesso");
            break;
            case "var3": 
                echo("<br> variavel 3 setada com sucesso");
                break;
}


?>


    
</body>
</html>