<!DOCTYPE html>
<html lang="es">

<!-- header --> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">

<!-- Style Css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Icons -->   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Min-d Store</title>
</head>


<!-- BODY --> 

<body>
       
    
    <header class="top-header-bar-container"> 
       
        <div class="top-bar py-1" id=topbar>
           <div class="container">
             <div class="row align-items-center">
  
<!-- CARRITO --->
                              
<div class="col-6 text-left">
    <button type="button" class="btn btn-outline-light fa fa-shopping-cart" data-toggle="modal" data-target="#modalCart" style="font-size: 20px;"> </button>  
</div>
                    
<!-- Modal: Carrito -->

<div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
<!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="carritolabel">Carrito de Compras</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
     
<!--Body-->
      <div class="modal-body">

        <table class="table table-hover" style="color:black;">
          <thead>
            <tr>
              <th></th>
              <th>Nombre del Producto</th>
              <th>Precio</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Product 1</td>
              <td>100$</td>
              <td><a><i class="fa fa-times" style="color:red;"></i></a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Product 2</td>
              <td>100$</td>
              <td><a><i class="fa fa-times" style="color:red;"></i></a></td>
            </tr>
            <tr class="total">
              <th scope="row"></th>
              <td>Total</td>
              <td>200$</td>
              <td></td>
            </tr>
          </tbody>
        </table>

      </div>
<!--Footer-->

     <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Seguir Comprando</button>
        <button  onclick="window.location.href='page5.php'" class="btn btn-primary">Finalizar Compra</button>
      </div>
    </div>
  </div>
</div>

<!-- top line -->
                     
                <div class="col-6 text-right">
                    <a href="tel://#" class="fa fa-phone"> (00) 00 0000 0000</a>
                    <a href="#" class="fa fa-envelope"> Min-d@myshop.com </a>
                </div>
                
            </div>
          </div>
        </div>
        
 <!-- menu y submenu -->  
 <!-- #9c3030 accents colors-->           
        
<nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a href="index.php">  <img src="photos/Logo.png" alt="Min-d Store" width="200" height="100"> </a>

  <div class="collapse navbar-collapse ml-3" id="menu">
    <ul class="navbar-nav mr-auto">
      
       <li class="nav-item">
            <a class="nav-link" href="index.php?Filtro='Mujer'" role="button" > Mujeres </a>
        </li>
      
      <li class="nav-item">
            <a class="nav-link" href="index.php?Filtro='Hombre'" role="button" > Hombres </a>
        </li>
     
      <li class="nav-item">
            <a class="nav-link" href="index.php?Filtro='Chicos'" role="button" > Chicos </a>
        </li>
       
       <li class="nav-item">
            <a class="nav-link" href="contacto.php" role="button" > Contacto </a>
        </li>
     
        
    </ul>
<!-- search menu -->
     


<!-- /search menu -->
    
    
    </div>
</nav>
</header>
