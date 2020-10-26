<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a44138683d.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <title>Libreria</title>
    <link rel="stylesheet" href="../css/index.css" >
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
            <div class="tittle-section">Productos destacados</div>
            <div class="product-list" id=space-list>
               
            </div>
        </div>
    </div>
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
                        html+=
                       '<div class="product-box">'+
                            '<a href="producto.php?='+data.datos[i].codigo+'">'+
                                '<div class="product">'+
                                    '<img src="..//assets/'+data.datos[i].imagen+'" >'+
                                    '<div class="detail-title">'+data.datos[i].nombre+'</div>'+
                                    '<div class="detail-description">'+data.datos[i].descripcion+'</div>'+
                                    '<div class="detail-price">'+data.datos[i].precio+'<span>99</span></div>'+
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
    </script>
</body>
</html>