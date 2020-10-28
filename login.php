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
    <link rel="stylesheet" href="css/estiloRegistrar.css" >
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
    form buttons{
        padding: 10px 15px;
        width: calc(100%);
        background: var(--main-red);
        border: none;
        color:#fff;
    }
    form controls{
        whidth: 100%;
        border: 1px, solid #017bab;
        margin-bottom: 15px;
        padding: 11px 10px;
        background: #252323;
        font-weight:bold;
    }
    </style>
</head>
<body>
    <header>
    <a href="index.php">
            <div class="logo-place"><img src="assets/logo.jpg" ></div>
        </a>
    </header>
    
        <div class="dos">
            <form class="controls">
                <section class="form-register">
                    <h3>Iniciar Sesión</h3>
                    
                   
                    <input class="controls"  type="text"  id="correo" placeholder="Correo">
                    <input class="controls"  type="password" id="contraseña" placeholder="Contraseña">
                   
                    <p>Estoy de acuerdo con <a href="#">Terminos y condiciones</a></p>
                    <a href="Admin.html">
                    <button class="botonRegistrar" onClick="iniciar()">Iniciar sesión</button>
                    </a>
                    <p> <a href="registro.html">Registrarse</a></p>
            </section>
            </form>
        </div>
    
</body>
<script>
    function iniciar(){
       console.log("Sí");
            window.location.href="Admin.html" ;
       
    }
</script>
</html>