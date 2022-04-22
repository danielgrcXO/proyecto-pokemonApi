<?php
include("config.php");

if(isset($_POST["register"])){
    //Obteniedo los datos escritos desde el formulario
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirmPasword = mysqli_real_escape_string($conn, $_POST["cpassword"]);
    
    if( $password !== $confirmPasword ){
        echo "<script> alert('Password doesnt match, please write it again'); </script>";
    }else{
        //Hasheando la password para el registro, y haciendo  el query y verificando que no haya usuarios existente
        $passwordEncripted = sha1($password);
        $sqlRequest = "SELECT id FROM user WHERE username = '$username'";
        $resultRequest = $conn->query($sqlRequest);
        $filasDevueltas = $resultRequest->num_rows;

        if($filasDevueltas > 0 ){
            echo "<script> alert('This user already exist');</script>";
        }else{      
            //Realizando el insert 
            $sqlInsert = "INSERT INTO user(username,email,password) VALUES('$username','$email','$passwordEncripted')";
            $resultInsert = $conn->query($sqlInsert);

            if($resultInsert > 0){
                echo "<script> alert('User register successfully'); window.location='main.php'</script>";
            }else{
                echo "<script> alert('Register error');</script>";
            }
        } 
    }   
}

?> 