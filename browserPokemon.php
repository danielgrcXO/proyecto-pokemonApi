<?php
include("config.php");
session_start();

if(!isset($_SESSION['id_usuario'])){
    header("Location: main.php");
}

//Obteniendo la variable de sesion.
$iduser =  $_SESSION['id_usuario'];

//Haciendo el request para poder ver si esta o no registrado y poder mostrar el nombre.
$sql = "SELECT id, username FROM user WHERE id = '$iduser'";
$answer = $conn->query($sql);
$row = $answer->fetch_assoc();
?>

<html>
<head>
    <meta charset="UTF-8" />
    <title>Buscador Pokemons Api</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!--Header Menu-->
    <nav class="nav bg-primary">
        <a href="logout.php" class="nav-link active text-white fw-light"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left mb-1" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/><path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/></svg> Logout</a>
        <a class="nav-link text-white fw-light"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill mb-1" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>¡Welcome <?php echo utf8_decode($row['username']); ?>!</a>
    </nav>
    <!--BODY-->
    <div class="container text-center w-25 mt-4 ">
        <form>
            <label for="labelFirst" class="fw-light mb-2 fs-4">All the Pokemos in your hands! </label>
            <input id="labelFirst" class="form-control fw-light" type="text" placeholder="Introduce a pokemon to search!">
            <button type="submit" class="mt-3 btn btn-primary fw-light">Search Pokemon</button>
            <button id="btn2" type="button" class="mt-3 btn btn-danger fw-light">Delete Pokemons</button>
        </form>
        <div class="pokemon-container mt-4"> </div>
    </div>

    <script src="js/practicaApi.js"></script>
</body>
</html>