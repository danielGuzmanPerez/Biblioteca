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
    <link rel="stylesheet" href="css/estiloModal.css" >
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
        <div class="logo-place"><a href="index.php"></a><img src="assets/logo.jpg" ></div>
        </a>
    </header>
    <div class="main-content">
        <div class="content-page">
            <section>
                <div class="part12">
                    <h2 class="detail-price">Información de compra</h2>
                    <h4 id="idtitle">Titulo: Principito</h4>
                    <img id="idimg"src="assets/principito.jpg" width="150" height="220">
                    <h4 >Cantidad: 1</h4>
                    <h4> envío: 100.00</h4>
                    <h4 id="idprecio">Costo: $ 46.99</h4>
                    

                    <h2 class="detail-price">Información de envío</h2>
                    <h3>Guzman Perez Victor Daniel</h3>
                    <h4>Presa osorio 4022</h4>
                    <h4>Guadalajara, Jalisco</h4>
                    <h4>77670</h4>
                    <h2 class="detail-price">Selecciona una paqueteria</h2>
                    
                    

                    <p>
                    
                        <input type="checkbox"  class="item-paqueteria" name="DHL" value="DHL"><i  class="fab fa-dhl"></i> 
                    
                        <input type="checkbox" class="item-paqueteria"  name="Fedex" value="Fedex"><i class="fab fa-fedex"></i>

                        <input type="checkbox" class="item-paqueteria" name="UPS" value="UPS"><i class="fab fa-ups"></i>
                        
                    
                      </p>

                      <div>
                        <button class="button2" onClick="final()">Finalizar Pago </button>
                        
                    </div>
                </div>   
                <div class="part22">
                    <h4 >Metodo de pago</h4>
                    <div id="smart-button-container">
                        <div style="text-align: center;">
                        <div id="paypal-button-container"></div>
                        </div>
                    </div>
                    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
                    <script>
                    function initPayPalButton() {
                        paypal.Buttons({
                        style: {
                            shape: 'rect',
                            color: 'gold',
                            layout: 'vertical',
                            label: 'paypal',
                            
                        },
                
                        createOrder: function(data, actions) {
                            return actions.order.create({
                            purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
                            });
                        },
                
                        onApprove: function(data, actions) {
                            return actions.order.capture().then(function(details) {
                            alert('Transaction completed by ' + details.payer.name.given_name + '!');
                            });
                        },
                
                        onError: function(err) {
                            console.log(err);
                        }
                        }).render('#paypal-button-container');
                    }
                    initPayPalButton();
                    </script>
                </div>
            </section>


        </div>
    </div>
    
                    
                      
    <script type="text/javascript">
        var p='<?php echo $_GET["id"]; ?>';
    </script>
        <script type="text/javascript">
        
            let html='';
            for(var i=0;i<Listalibros.length;i++){
                console.log(p);
                if(Listalibros[i].id==p){
                    
                    document.getElementById("idimg").src="assets/"+Listalibros[i].imagen;
                    document.getElementById("idtitle").innerHTML=Listalibros[i].nombre; 
                    document.getElementById("idprecio").innerHTML=formato_precio(Listalibros[i].precio); 
                }
                
                }
            document.getElementById("space-list").innerHTML=html;
        
            function formato_precio(valor){
            let svalor= valor.toString();
            let array=svalor.split(".");
            return ""+array[0]+"<spam>.99</spam>";
        }
        function iniciar_compra(){
            window.location.href="compra.html?id=p" ;
        }
        function open_login(){
            window.location.href="login.php" ;
        }
        function final(){
            window.alert("Compra realizada con exito \n Código de rastreo: 12345\n https://www.fedex.com/es-mx/tracking.html");
        }
    </script>
</body>
</html>