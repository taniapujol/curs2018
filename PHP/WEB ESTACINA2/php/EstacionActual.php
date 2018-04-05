<?php
    // Creamos unas array de estaciones donde guardamos el los numeros de los meses de cada estacion
                // (invierno[“enero”,”febrero”,”marzo”]) 
                // (primavera[“abril,”mayo”,”junio”])
                // (verano[“julio”,agosto”,”setiembre”])
                // (otoño[“noviembre”,”octubre”,”diciembre”])
        $invierno= array('1','2','3');
        $primavera= array('4','5','6');
        $verano= array('7','8','9');
        $otono= array('10','11','12');

        // Recogemos en la variable mesActual con la función date(), el mes en que nos encontramos.
        $mesActual= date("n");
        
        // Crear una estructura de control de flujo que en función del contenido de $mesactual almacene el nombre de la estación correspondiente
        switch (true) {
            case in_array($mesActual,$primavera):
                $estacion = 'primavera';
                break;
            case in_array($mesActual,$verano):
                $estacion = 'verano';
                break;
            case in_array($mesActual,$invierno):
                $estacion = 'invierno';
                break;
            case in_array($mesActual,$otono):
                $estacion = 'otono';
                break;
        }
?>