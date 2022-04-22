<?php
include("singUpConection.php");
?>

<html>
<head>
    <meta charset="UTF-8" />
    <title>Buscador Pokemons Api</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!--Header-->
    <nav class="nav bg-primary">
        <a class="nav-link active text-white fw-light" aria-current="page" href="main.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill mb-1" viewBox="0 0 16 16"><path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/></svg>   Home</a>
    </nav>
    <!--body-->
    <div class="container text-center w-25 mt-4 fw-light">
        <label  class="fw-light mb-2 fs-4">Create an account </label>
        <form action="" method="POST">
            <label for="username">Username</label>
            <input type="text" class="form-control mb-4" name="username" placeholder="Username" required>
            <label for="email">Email address</label>
            <input type="email" class="form-control mb-4" name="email" placeholder="name@example.com" required>
            <label for="password">Password</label>
            <input type="password" class="form-control mb-4" name="password" placeholder="Password" required>
            <label for="cpassword">Password</label>
            <input type="password" class="form-control mb-4" name="cpassword" placeholder="Confirm Password" required>
            <button type="submit" name="register" class="mt-3 btn btn-primary fw-light"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill mb-1" viewBox="0 0 16 16"><path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/></svg> Register</button>
        </form>
    </div>
</body>
</html>