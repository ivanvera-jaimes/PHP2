<html>
    <head>
    <title>Taller N°1 PHP</title>
    </head>
    <body>
    <?php
        $Nombre="Jaider Ivan";
        $Apellido="Vera Jaimes";
        $Edad=18;
        $Soltero=true;
        $FechaNacimiento="08/10/2002";
        echo "<h1>Nombre: $Nombre $Apellido</h1>";
        echo "<h2>Edad: $Edad</h2>";
        echo "<h1>Estado soltero:$Soltero</h1>";
        echo "<h1>Fecha de nacimiento: $FechaNacimiento</h1>";
    ?>
    <?php
        $Vector=[10,11,12,13,14];
        for($i=0;$i<count($Vector);$i++){
            echo "Imprimiendo vector pos:".$i." igual a:".$Vector[$i]."<br>";
        }
    ?>
    </body>

</html>