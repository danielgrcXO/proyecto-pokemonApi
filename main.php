<html>
<head>
    <meta charset="UTF-8" />
    <title>Buscador Pokemons Api</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!--Header Menu-->
    <nav class="nav bg-primary">
        <a class="nav-link active text-white fw-light" aria-current="page" href="main.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill mb-1" viewBox="0 0 16 16"><path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/></svg>   Home</a>
    </nav>
    <!--Body-->
    <div class="container-img text-center"> 
        <img class="mx-auto d-block mt-5" src="img/logo.png">
        <h2 class="fw-light mt-3">This website has the objetive to give you all the resources </h2>
        <h2 class="fw-light"> to know a little bit more about pokemons!</h2>
        <form>
            <button  class="mt-3 btn btn-primary fw-light " onclick="window.location='singUp.php'"> Sing up here</button>
            <input type="button" value="Login here" class="mt-3 btn btn-primary fw-light " onclick="window.location='login.php'"/>      
        </form>
    </div>
    
    <script src="js/practicaApi.js"></script>
</body>
</html>

