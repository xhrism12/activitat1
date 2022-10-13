<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquesta</title>
    <link rel="stylesheet" href="/public/css/sylelogin.css">
    <style>
    body {
        background-color: #DFC5F4;

    }
    </style>
</head>

<body>
    <header>
        <h1><?=$title;?></h1>
    </header>
    <div class="signupFrm">
        
        <br>
        <form class="form" action="?url=regaction" method="POST">
            <h2 class="title">Formulari</h2>
            <div class="inputContainer">
                <input class="input" type="text" name="username" placeholder="username">
                <label for="" class="label">User</label>
            </div>
            
            <div class="inputContainer">
                <input class="input" type="password" name="password" placeholder="password">
                <label for="" class="label">Password</label> 
            </div>

            <div class="inputContainer">
                <input class="input" type="email" name="email" placeholder="email">
                <label for="" class="label">Email</label> 
            </div>
            <button class="submitBtn" type="submit">Registrar</button>
        </form>
    </div>
    <script src=""></script>
</body>

</html>