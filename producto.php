<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a44138683d.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <title>Libreria</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <header>
        <div class="logo-place"><a href="index.php"></a><img src="../assets/logo.jpg" ></div>
        <div class="search-place">
            <input type="text" id="idbusqueda" placeholder="Encuentra el libro que necesitas">
            <button class="btn-main btn-search"><i class="fas fa-search" aria-hidden="true"></i></button>
        </div>
        <div class="option-place">
          <div class="item-option" title="Registrate"><i class="fas fa-user"></i></div>  
          <div class="item-option" title="Ingresar"><i class="fas fa-sign-in-alt"></i></div>
          <div class="item-option" title="Mis compras"><i class="fas fa-shopping-cart"></i></div>
        </div>
    </header>
    <div class="main-content">
        <div class="content-page">
            <section>
                <div class="part1">
                  <img id="idimg" src="">  
                </div>
                <div class="part2">
                    <h2 img id="idtitle">NONBRE PRINCIPAL </h2>
                    <h2 img id="idautor">AUTOR </h2>
                    <h2 img id="ideditorial">EDITORIAL </h2>
                    <h1 img id="idprecio">PRECIO</h1>
                    <h4 img id="iddescripcion">DESCRIPCION</h4>
                    <button onClick="iniciar_compra()">comprar</button>

                </div>
            </section>
            <div class="tittle-section">Productos destacados</div>
            <div class="product-list" id=space-list>
               
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var p='<?php echo $_GET["p"]; ?>';
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
           /* var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                
                }
                console.log(this.status);
            };
            xhttp.open("GET","https://danielguzman27.000webhostapp.com/Libreria/getAllBooks.php",true);
            xhttp.send();
            console.log(xhttp.responseText);*/
            $.ajax({
                url:'servicios/php/getAllBooks.php',
                type:'POST',
                data:{},
                success:function(data){ 
                    console.log(data);
                    let html'';
                    for(var i=0;i<data.datos.lenght;i++){
                        if(data.datos[i].id==p){
                            document.getElementByid("idimg").src=.."//assets/"+data.datos[i].imagen;
                            document.getElementByid("idtitle").innerHTML=data.datos[i].nombre; 
                            document.getElementByid("idautor").innerHTML=data.datos[i].autor; 
                            document.getElementByid("ideditorial")innerHTML=data.datos[i].editorial; 
                            document.getElementByid("idprecio")innerHTML=formato_precio(data.datos[i].precio); 
                            document.getElementByid("iddescripcion")innerHTML=data.datos[i].descripcion;
                        }
                        html+=
                       '<div class="product-box">'+
                             '<a href="producto.php?='+data.datos[i].codigo+'">'+
                                '<div class="product">'+
                                    '<img src="..//assets/'+data.datos[i].imagen+'" >'+
                                    '<div class="detail-title">'+data.datos[i].nombre+'</div>'+
                                    '<div class="detail-description">'+data.datos[i].descripcion+'</div>'+
                                    '<div class="detail-price">'+formato_precio(data.datos[i].precio)+</div>'+
                                '</div>'+
                             '</a>'+
                        '</div>';
                    }
                    document.getElementById("space-list").innerHTML=html;
                },
                error:function(err){
                    console.error(err);
                }
            });
        });
        function formato_precio(valor){
            let svalor= valor.toString();
            let array=svalor.split(".");
            return ""+array[0]+"<spam>"+array[1]+"</spam>";
        }
        function iniciar_compra(){
            $.ajax({
                url:'servicios/compra/validar_inicio_compra.php',
                type:'POST',
                data:{
                    id:p
                },
                success:function(data){ 
                    console.log(data);
                   if(data.state){

                   }else{
                       alert(data.detail);
                       if(data_open_login){
                           open_login();
                       }
                   }
                },
                error:function(err){
                    console.error(err);
                }
            });
        }
        function open_login(){
           window.location.href"login.php" ;
        }
    </script>
</body>
</html>