<?php

if (empty($_GET['nombre'])|| empty($_GET['Apellidos']) || empty($_GET['DNI']) || empty($_GET['Genero'])){
    echo "Por favor, completa todos los campos <br/>";
} else {
    //Recogemos los datos del Formulario.
    $Nombre = $_GET['nombre']; //$_GET es un metodo para enviar informacion de forma visible a través de una URL de una página a otra.
    $apellido = $_GET['Apellidos']; 
    $DNI = $_GET['DNI'];
    $Genero = $_GET['Genero'];
    // mostrar datos 
    echo "<p>Nombre:".$Nombre."</p><br/>";
    echo "<p>Apellido:".$apellido."</p><br/>";
    echo "<p>DNI:".$DNI."</p><br>";
    echo "<p>Genero:".$Genero."</p><br/>";
}
//Almacenamos en un array los valores de los checkbox.
if(isset($_GET['actividad'])){
    var_dump($_GET['actividad']); //Recorremos el array con var_dump, mostrando el numero de elementos y su posicion en el array.
echo"<br/>";
}else {}
//Verificamos si existe el parámetro 'condiciones' en la URL mediante el uso de isset().
if (isset($_GET['condiciones'])){
    echo "Aceptastes los terminos y condiciones.<br/>";// si existe ponemos esto.
} 
else {
    echo "Tienes que aceptar los terminos y condiciones.<br/>";// si no existe ponemos esto.
}
?> 