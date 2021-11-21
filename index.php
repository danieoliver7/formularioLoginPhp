<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuários</title>
<!------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------CSS -------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="css/script.css" rel="stylesheet" />
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
</head>

<body class="text-center">
    <div class="container">     
        <main class="form-signin">
            <form action="src/validacao.php" method="post">
        
                <h1 class="h3 mb-3 fw-normal">Sign in</h1>
    
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="login">
                             <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                            <label for="floatingPassword">Password</label>
                    </div>
    
                    <div class="checkbox mb-3">
                            <label><input type="checkbox" value="remember-me"> Remember me</label>
                    </div>
                    
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

                    <div class="col">
                        <a href="#" class="nav-link link-dark px-2">Sign Up</a>
                    </div>
                     <p class="mt-5 mb-3 text-muted">&copy;  Daniel Oliveira developer</p>
            </form>
        </main>
    </div>
</body>
</html>