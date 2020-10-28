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
            "precio":"46.99",
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
            "precio":"64.00",
            "proveedor":"Kiosko",
            "Categoria1":"Literatura infantil",
            "categoria2":"fabula",
            "imagen":"LaPeorSeñoraDelMundo.jpg"
        },
        {
            "id":"3",
            "nombre": "Viajes de gulliver",
            "autor":" Swift Jonathan ",
            "editorial":"Selector",
            "descripcion": "Los viajes de Gulliver es la historia de la travesía comprendida por el capitán Lemuel Gulliver a través de diversas naciones remotas.",
            "cantidad":"200",
            "precio":"19.50",
            "proveedor":"Kiosko",
            "Categoria1":"infantil",
            "categoria2":"fabulaNovela",
            "imagen":"losViajesDeGulliver.jpg"
        },
        {
            "id":"4",
            "nombre": "El misterio de Salem's Lot",
            "autor":"Stephen King ",
            "editorial":"DEBOLSILLO",
            "descripcion": "Veinte años atrás, por una apuesta infantil, Ben Mears entró en la casa de los Marsten. Y lo que vio entonces aún recorre sus pesadillas",
            "cantidad":"300",
            "precio":"319.00",
            "proveedor":"Kiosko",
            "Categoria1":"Terror",
            "categoria2":"misterio",
            "imagen":"ElMisterio.jpg"
        },
        {
            "id":"5",
            "nombre": "El sutil arte de que te importe un carajo",
            "autor":"Mark Manson",
            "editorial":"Sellenium",
            "descripcion": "Durante los últimos años, Mark Manson -en su popular blog- se ha afanado en corregir nuestras delirantes expectativas sobre nosotros mismos y el mundo. Ahora nos ofrece su toda su intrépida sabiduría en este libro pionero.",
            "cantidad":"300",
            "precio":"215.00",
            "proveedor":"Kiosko",
            "Categoria1":"Auto ayuda",
            "categoria2":"Reflexión",
            "imagen":"ElArte.jpg"
        },
        {
            "id":"6",
            "nombre": "Cosas que pasan",
            "autor":"Isol",
            "editorial":"Los primerisimos",
            "descripcion": "Iría a la escuela al galope, si tuviera un caballo. Sería más fuerte, más linda y más alta, si se le cumplieran sus deseos. ",
            "cantidad":"300",
            "precio":"31.99",
            "proveedor":"Kiosko",
            "Categoria1":"Literatura infantil",
            "categoria2":"novela",
            "imagen":"CosasQuePasan.jpg"
        },
        {
            "id":"7",
            "nombre": "It",
            "autor":"Stephen King ",
            "editorial":"DEBOLSILLO",
            "descripcion": "ienvenido a Derry, Maine. Es una ciudad pequeña, un lugar tan conmovedoramente familiar como tu propia ciudad natal. Solo que en Derry ocurren cosas muy extrañas.",
            "cantidad":"300",
            "precio":"149.99",
            "proveedor":"Kiosko",
            "Categoria1":"Terror",
            "categoria2":"misterio",
            "imagen":"it.jpg"
        },
       
        ];
    </script>
    <header>
    <a href="index.php">
            <div class="logo-place"><img src="assets/logo.jpg" ></div>
        </a>
        <div class="search-place">
            <input type="text" id="idbusqueda" placeholder="Encuentra el libro que necesitas">
            <button class="btn-main btn-search"><i class="fas fa-search" aria-hidden="true"></i></button>
        </div>
        <div class="option-place">
            <a href="registro.html">
          <div class="item-option" title="Registrate"><i class="fas fa-user"></i></div>  
          </a>
          <a href="login.php">
          <div class="item-option" title="Ingresar"><i class="fas fa-sign-in-alt"></i></div>
          </a>
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
            <div id="idsection" class="tittle-section">
               <h2 id="idsection"></h2>
            </div>
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
                if(Listalibros[i].id==p){
                    
                    document.getElementById("idimg").src="assets/"+Listalibros[i].imagen;
                    document.getElementById("idtitle").innerHTML=Listalibros[i].nombre; 
                    document.getElementById("idautor").innerHTML=Listalibros[i].autor; 
                    document.getElementById("ideditorial").innerHTML=Listalibros[i].editorial; 
                    document.getElementById("idprecio").innerHTML="$"+ formato_precio(Listalibros[i].precio); 
                    document.getElementById("iddescripcion").innerHTML=Listalibros[i].descripcion;
                }
             }
             document.getElementById("idsection").innerHTML="Mas de: "+Listalibros[p-1].Categoria1;
             console.log(p+2);
            for(var i=0;i<Listalibros.length;i++){
                if(Listalibros[i].Categoria1==Listalibros[p-1].Categoria1 &&  Listalibros[i].id!=Listalibros[p-1].id ){
                    
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
            }
           document.getElementById("space-list").innerHTML=html;
       
        


        function formato_precio(valor){
            let svalor= valor.toString();
            let array=svalor.split(".");
            return ""+array[0]+"<spam>.99</spam>";
        }
        function iniciar_compra(){
            window.location.href="compra.php?id="+p ;
        }
        function open_login(){
           window.location.href="login.php" ;
        }
    </script>
</body>
</html>