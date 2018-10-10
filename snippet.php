<?php 

/*
 * Ejemplo simple de conexion a base de datos para lograr una extracción de datos e imprimirlas.
 * El entorno donde funciona es cualquier entorono con PHP instalado y corriendo.
 * 
 * @author EdgardoT.
 * 
 *  
 */


//Generate a simple connect to DB
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$current_user = get_current_user_id();
$sql = "SELECT * FROM `viajar_users` WHERE `user_id` = " . $current_user . "";
$result = mysqli_query($conn, $sql);
$value = mysqli_fetch_object($result);

// Simple Print about Array → Json
echo json_encode($value);