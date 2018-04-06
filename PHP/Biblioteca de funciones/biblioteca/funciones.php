<?php
    class funciones 
    {
        // funcion imprimir por pantalla el string pasado
            function printM()
            {   
                $texto = "mensaje que todo funciona bien";
                echo($texto);
            }

        // funcion que apartir d'un string se devuelve encapsulado en tag <p>
            function tag_p($string)
            {
                $texto = "<p>".$string."</p>";
                return $texto;
            }

        // funcion que apartir d'un string se devuelve encapsulado en tag <h1>
            function tag_h1($string)
            {
                $texto = "<h1>".$string."</h1>";
                return $texto;
            }

        // funcion que apartir d'un string se devuelve encapsulado en tag <p> con enlace
            function tag_p_a($string)
            {
                $texto = "<p><a>".$string."</a></p>";
                return $texto;
            }

        // funcion devuelve la estación -estrictamente teniendo en cuenta los dias en la que estamos
            function estacion()
            {   
                // Primavera: 21 marzo hasta 20 junio --> $diaActual <172;
                // Verano: 21 junio hasta 20 septiembre --> $diaActual < 265
                // Otoño: 21 septiembre hasta 20 diciembre --> $diaActual < 352
                // Invierno: 21 diciembre hasta 20 marzo --> $diaActual < invierno
                // obtengo el dia actual
                $diaActual= date("z");
                
                switch ($diaActual) {
                    case ($diaActual <172) :
                        $estacion = 'primavera';
                        break;
                    case ($diaActual < 265):
                        $estacion = 'verano';
                        break;
                    case ($diaActual <352 ):
                        $estacion = 'otoño';
                        break;
                    default: 
                        $estacion = 'invierno';
                }
                
                return $estacion;
            }
    
        // funcion distancia entre dos puntos
            function distancia($P1,$P2)
            {
                $x_p1 = $P1[0]; 
                $y_p1 = $P1[1];

                $x_p2 = $P2[0];
                $y_p2 = $P2[1];

            // formula de la distancia es : 
            // distancia = raiz cuadrada (sqrt) de: (x_p2-x_p1)al cuadrado (pow) mas (y_p2 - y_p1)al cuadrado
                $distX = $x_p2 - $x_p1;
                $distY = $y_p2 - $y_p1;
                $xMasY = pow($distX,2)+pow($distY,2);
                $distancia = sqrt($xMasY);
                return $distancia;
            }
        // Funcion sumatorio (sumar todos los elementos de una array)
        function sumatorio($array)
        {
            $sumatorio = 0;
            for ($i=0; $i < (count($array)-1) ; $i++) { 
                $sumatorio += $array[i];
            }
            return $sumatorio;
        }

    }
    
    
?>