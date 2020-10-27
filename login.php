<!DOCTYPE html>
<html lang="en">
<head>
   //me quede en el minuto 16:24 parte 4
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a44138683d.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <title>Libreria</title>
    <link rel="stylesheet" href="css/index.css" >
    <style type="text/css">
    form{
        max-width:460px;
        width:calc(100% - 40px);
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        margin: auto;
    }
    form h3{
        margin: 5px 0;
    }
    form input{
        padding: 7px 10px;
        width: calc(100%-22px);
        margin-bottom: 10px;
    }
    form button{
        padding: 10px 15px;
        width: calc(100%);
        background: var(--main-red);
        border: none;
        color:#fff;
    }
    </style>
</head>
<body>
    <header>
        <div class="logo-place"><a href="index.php"></a><img src="assets/logo.jpg" ></div>
       
    </header>
    <div class="main-content">
        <div class="content-page">
            <form action="">
                <h3>Iniciar sesión</h3>
                <input type="text" name="emausu" placeholder="correo">
                <input type="password" name="pasusu" placeholder="contraseña">
                <button type="submit">Ingresar</button>
            </form>
        </div>
    </div>
</body>
</html>