<?php
include("config.php");
session_start();

if(isset($_SESSION['id_usuario'])){
    header("Location: browserPokemon.php");
}

if(isset($_POST["login"])){
    //Obteniendo los valores que se obtuvieron en los inputs y hasheando la contraseña
    $usuario = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $passwordEncripted = sha1($password);

    //realizando la consulta a la base de datos.
    $sqlStatement = "SELECT id FROM user WHERE username = '$usuario' AND password = '$passwordEncripted'";
    $resultStatement = $conn->query($sqlStatement);
    $rows = $resultStatement->num_rows;
    
    if($rows > 0){
        $row = $resultStatement->fetch_assoc();
        $_SESSION['id_usuario'] = $row["id"];
        header("Location: browserPokemon.php");
    }else{
        echo "<script> alert('El usuario no existe o la contraseña es incorrecta');</script>";
    }
}
?>