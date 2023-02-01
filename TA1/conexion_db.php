<?php

function conexion(){
    $conex = mysqli_connect("localhost","root","","usuarios"); 
    return $conex;
}

?>