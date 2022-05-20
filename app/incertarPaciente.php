<?php

require_once 'bd.php'; //incluyo la cadena de conexión PHP

//Recibimos la data del formulario

$nombre = filter_var(trim($_POST['nombre']),FILTER_DEFAULT);
$apellidos = filter_var(trim($_POST['apellidos']),FILTER_DEFAULT);
$email = filter_var(trim($_POST['email']),FILTER_VALIDATE_EMAIL);
$telefono = filter_var(trim($_POST['telefono']),FILTER_DEFAULT);
$movil = filter_var(trim($_POST['movil']),FILTER_DEFAULT);
$fecha = filter_var(trim($_POST['fechaNace']),FILTER_DEFAULT);
$eps = filter_var(trim($_POST['eps']),FILTER_DEFAULT);
$usuario = filter_var(trim($_POST['usuarioPaciente']),FILTER_DEFAULT);
$password = filter_var(trim($_POST['passwordPaciente']),FILTER_DEFAULT);


//ENCRIPTAR LA PASSWORD
$password = password_hash($password,PASSWORD_DEFAULT);


//Hacer el proceso de request - response

$sql = 'INSERT INTO pacientes (nombrePaciente,apellidosPacientes,emailPaciente,telefonoPaciente,movilPaciente,
fechaNacePaciente,epsPaciente,usuarioPaciente,passwordPaciente) VALUES (?,?,?,?,?,?,?,?,?)';
$sentencia = $pdo->prepare($sql);   //Prepara la consulta
$sentencia->execute([$nombre,$apellidos,$email,$telefono,$movil,$fecha,$eps,$usuario,$password]);  //Ejecuta la sentencia SQL

//var_dump($sentencia->rowCount());
if($sentencia->rowCount()>=1){
    $_SESSION['tipo'] = "success";
    $_SESSION['mensaje'] = "Operación exitosa";
}else{
    $_SESSION['tipo'] = "danger";
    $_SESSION['mensaje'] = "Ha ocurrido un error en la inserción";
}


header('Location:../frmRegistroPaciente.php');