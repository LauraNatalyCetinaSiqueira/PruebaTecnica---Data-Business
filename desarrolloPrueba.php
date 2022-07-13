<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>Template</title>
</head>
<body>

    <?php
    $numeroPrincipal = ($_POST['num'])*1;

    if($numeroPrincipal > 0 and is_int($numeroPrincipal)){
        echo "<h2> El número ingresado es: $numeroPrincipal</h2>";
        echo "<br>";
        while($numeroPrincipal > 1){
            if(($numeroPrincipal%2) == 0 ){
                $numeroPrincipal = $numeroPrincipal/2;  
            }else{
                $numeroPrincipal = ($numeroPrincipal*3)+1;
            }
            echo "<br>";
            echo "<li>$numeroPrincipal</li>";
            echo "<br>"; 
        }
    }else{
        echo "No has ingresado ningún número o el número no es válido";
    }
    ?>
    <br>
    <br>
    <a href="http://localhost:50/solucionPruebaTecnica/php/template.php" target="_parent"><button>Click aquí, para ingresar otro número</button></a>
</body>
</html>