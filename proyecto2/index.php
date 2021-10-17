<?php 
// 1 - Programa basico 

/*
echo "Inicio programa <br/>";
echo "Hola mi nombre es PHP ¿Quieres conocerme? <br/>";
echo "Fin programa";
*/

// 2 - Prograam organizado

/*
include "./includes/inicio.php";
echo "Hola mi nombre es PHP ¿Quieres conocerme? <br/>";
include "./includes/fin.php";
*/

// 3 - Programa organizado con warning

/*
include "inicio.php";
echo "Hola mi nombre es PHP ¿Quieres conocerme? <br/>";
include "fin.php";
Al no poner la ruta de los archivos corectamente, se genera un warning ya que el navegador no los encuentra.
*/
 
// 4 - Programa organizado repeticion

/*
include "./includes/inicio.php";
echo "Hola ¿te gusta mi sintaxis? <br>"; // No
include "./includes/fin.php";
*/

// 5 - Programa organizado require con repeticion

/*
require "./includes/inicio.php";
require "./includes/inicio.php";
echo "Hola ¿te gusta mi sintaxis? <br>"; // No
require "./includes/fin.php";
*/
// 6 - Programa organizado require sin ./includes

/*
require "inicio.php";
require "inicio.php";
echo "Hola ¿te gusta mi sintaxis? <br>"; // No
require "fin.php";

Da un error fatal porque el require detiene la ejecucion del programa si no encuentra el archivo.
*/

// 7 - Programa con include_once
/*
include_once "./includes/inicio.php";
echo "Ejecutando... <br/>";
include "./includes/fin.php";
*/

// 8 - Programa con require_once
/*
require_once "./includes/inicio.php";
echo "Ejecutando... <br/>";
include "./includes/fin.php";
*/
