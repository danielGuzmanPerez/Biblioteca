<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a44138683d.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <title>Libreria</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<script>
        //libros: id,nombre,autor,editorial,precio,descripcion,cantidad,proveedor,categoria1,categoria2
        var Listalibros=[{
            "id":"1",
            "nombre": "principito",
            "autor":" Antoine de Saint-Exupéry",
            "editorial":"Editions Gallimard",
            "descripcion": "El principito es una novela corta y la obra más famosa del escritor y aviador francés Antoine de Saint-Exupéry.",
            "cantidad":"128",
            "precio":"46",
            "proveedor":"Kiosko",
            "Categoria1":"Literatura infantil",
            "categoria2":"fabula",
            "imagen":"principito.jpg"
        },
        {
            "id":"2",
            "nombre": "La peor señora del mundo",
            "autor":" Francisco Hinojosa",
            "editorial":"Editions Gallimard",
            "descripcion": "En el norte de Turambul viv a la peor se ora del mundo. a sus hijos los castigaba cuando se portaban bien y cuando se portaban mal..",
            "cantidad":"200",
            "precio":"64",
            "proveedor":"Kiosko",
            "Categoria1":"ficcion",
            "categoria2":"fabula",
            "imagen":"LaPeorSeñoraDelMundo.jpg"
        },
        ];
     </script>
    <header>
        <div class="logo-place"><a href="index.html"></a><img src="assets/logo.jpg" ></div>
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
                  <img id="idimg" src="assets/principito.jpg">  
                </div>
                <div class="part2">
                    <h2 img id="idtitle">Principito </h2>
                    <h2 img id="idautor">Autor: Antoine de Saint-Exupéry"</h2>
                    <h2 img id="ideditorial">Editorial: Editions Gallimard </h2>
                    <h1 img id="idprecio">$ 46.99</h1>
                    <h4 img id="iddescripcion">El principito es una novela corta y la obra más famosa del escritor y aviador francés Antoine de Saint-Exupéry.</h4>
                    <button onClick="iniciar_compra()">comprar</button>

                </div>
            </section>
            <div class="tittle-section">Productos recomendados</div>
            <div class="product-list" id=space-list>
               
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var p='<?php echo $_GET["p"]; ?>';
    </script>
    <script type="text/javascript">
       
           
           let html='';
           
           for(var i=0;i<Listalibros.length;i++){
               /* if(Listalibros[i].id==p){
                    document.getElementByid("idimg").src="assets/"+Listalibros[i].imagen;
                    document.getElementByid("idtitle").innerHTML=Listalibros[i].nombre; 
                    document.getElementByid("idautor").innerHTML=Listalibros[i].autor; 
                    document.getElementByid("ideditorial").innerHTML=Listalibros[i].editorial; 
                    document.getElementByid("idprecio").innerHTML=formato_precio(Listalibros[i].precio); 
                    document.getElementByid("iddescripcion").innerHTML=Listalibros[i].descripcion;
                }*/
               html+=
              '<div class="product-box">'+
                   '<a href="producto.php?p='+Listalibros[i].codigo+'">'+
                       '<div class="product">'+
                           '<img src="assets/'+Listalibros[i].imagen+'" >'+
                           '<div class="detail-title">'+Listalibros[i].nombre+'</div>'+
                           '<div class="detail-price">'+Listalibros[i].precio+"."+'<span>99</span></div>'+
                       '</div>'+
                    '</a>'+
               '</div>';
           }
           document.getElementById("space-list").innerHTML=html;
       
        


        function formato_precio(valor){
            let svalor= valor.toString();
            let array=svalor.split(".");
            return ""+array[0]+"<spam>"+array[1]+"</spam>";
        }
        function iniciar_compra(){
            window.location.href="compra.html" ;
        }
        function open_login(){
           window.location.href="login.php" ;
        }
    </script>
</body>
</html>