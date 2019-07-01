<!-- header included with php -->

<?php 
include("inc/header.php"); 

	//abro el archivo TXT con la info de los productos
	$fp = fopen('productos.txt','r');
	//verifico si esta vacio
	if(filesize('productos.txt') > 0){
			//Leo el archivo
			$dataJson = fread($fp,filesize('productos.txt'));
			//lo decodifico con json:
			$dataArray = json_decode($dataJson,true);
			//si quiero ver la estructura del array:  echo '<pre>';var_dump($dataArray);echo '</pre>';
	}else{
		//si esta en blanco el txt
		echo 'No hay productos cargados en PRODUCTOS.TXT......';
	}
	fclose($fp);

$Filtro = $_GET["Filtro"];
//no logro filtras el array con filter...

//$dataArray = array_filter($dataArray, $Filtro);
?>
<!-- Poster -->
      
            <div class="site-blocks-cover overlay pt-5 pb-5" id="poster" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="500">
                        
            <div class="row mb-4">
              <div class="col-md-7" id="initialtext">
               <span>Recién llegados</span>
               <h1>Addidas Basic</h1>
                <p class="mb-5 lead">Nunca es demasiado tarde, Addidas Basic Volvio! Confort y estilo siempre contigo. </p>
                <div>
                  <a href="#" class="btn btn-light btn-outline-light py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">Compre</a>
                  <a href="#" class="btn btn-light py-3 px-5 rounded-0 d-block d-sm-inline-block">Ver mas</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>        
       
<!-- product bla bla bla section -->       
        
    
    <br>
    
    <div class="container col-md-5 text-center" id="offer-text">
           <span>Ofertas de la Semana</span>
        <h2 class=" text-center strong"> Nuestros Productos</h2>
        <p>Los 9 mas buscados: a continuacion te m,ostraostramos nuestros destacados de la semana:</p>
    </div>
    
    <br>
    
<!-- Products Carousel -->  
	
	<div class="site-section " id="products-section">
    <div class="container">
    
     <div class="carousel slide hidden-xs" data-ride="carousel" id="myCarousel" data-interval="3000">
     
        <!-- Carousel indicators -->   
         <ol class="carousel-indicators " id="indicador">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        
       <!-- Wrapper for carousel items -->
         <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="row">
                                 
                          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto1']['ID']; ?>">  <img src="<?php echo $dataArray['Productos']['Producto1']['Img']; ?>" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="px-4">
                <h3> <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto1']['ID']; ?>"><?php echo $dataArray['Productos']['Producto1']['Tipo']; ?></a></h3>
                 <h6 class="h6-responsive mb-3 text-center">
                      <span class="green-text"> <strong><?php echo $dataArray['Productos']['Producto1']['Valor']; ?></strong> </span>
                      <span class="grey-text"> <small> <s><?php echo $dataArray['Productos']['Producto1']['Antes']; ?></s> </small> </span>
                    </h6>
                <div>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto1']['ID']; ?>" class="btn btn-dark mr-1 rounded-0">Carrito</a>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto1']['ID']; ?>" class="btn btn-dark btn-outline-dark ml-1 rounded-0">Ver mas</a>
                </div>
              </div>
            </div>
          </div>

		
        <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto2']['ID']; ?>"> <img src="<?php echo $dataArray['Productos']['Producto2']['Img']; ?>" alt="Image" class="img-fluid"> </a>
              </figure>
              <div class="px-4">
                <h3><a href="product.php?ID=<?php echo $dataArray['Productos']['Producto2']['ID']; ?>"><?php echo $dataArray['Productos']['Producto2']['Tipo']; ?></a></h3>
                 <h6 class="h6-responsive mb-3 text-center">
                     <span class="green-text"> <strong><?php echo $dataArray['Productos']['Producto2']['Valor']; ?></strong> </span>
                      <span class="grey-text"> <small> <s><?php echo $dataArray['Productos']['Producto2']['Antes']; ?></s> </small> </span>
                    </h6>
                <div>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto2']['ID']; ?>" class="btn btn-dark mr-1 rounded-0">Carrito</a>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto2']['ID']; ?>" class="btn btn-dark btn-outline-dark ml-1 rounded-0">Ver mas</a>
                </div>
              </div>
            </div>
          </div>
    
                          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto3']['ID']; ?>"> <img src="<?php echo $dataArray['Productos']['Producto3']['Img']; ?>" alt="Image" class="img-fluid"> </a>
              </figure>
              <div class="px-4">
                <h3><a href="product.php?ID=<?php echo $dataArray['Productos']['Producto3']['ID']; ?>"><?php echo $dataArray['Productos']['Producto3']['Tipo']; ?></a></h3>
                 <h6 class="h6-responsive mb-3 text-center">
                     <span class="green-text"> <strong><?php echo $dataArray['Productos']['Producto3']['Valor']; ?></strong> </span>
                      <span class="grey-text"> <small> <s><?php echo $dataArray['Productos']['Producto3']['Antes']; ?></s> </small> </span>
                    </h6>
                <div>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto3']['ID']; ?>" class="btn btn-dark mr-1 rounded-0">Carrito</a>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto3']['ID']; ?>" class="btn btn-dark btn-outline-dark ml-1 rounded-0">Ver mas</a>
                </div>
              </div>
            </div>
          </div>
                      </div>
               </div>       
                            
           <div class="carousel-item">
                    <div class="row">
                    
                          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto4']['ID']; ?>"> <img src="<?php echo $dataArray['Productos']['Producto4']['Img']; ?>" alt="Image" class="img-fluid"> </a>
              </figure>
              <div class="px-4">
                <h3><a href="product.php?ID=<?php echo $dataArray['Productos']['Producto4']['ID']; ?>"><?php echo $dataArray['Productos']['Producto4']['Tipo']; ?></a></h3>
                 <h6 class="h6-responsive mb-3 text-center">
                     <span class="green-text"> <strong><?php echo $dataArray['Productos']['Producto4']['Valor']; ?></strong> </span>
                      <span class="grey-text"> <small> <s><?php echo $dataArray['Productos']['Producto4']['Antes']; ?></s> </small> </span>
                    </h6>
                <div>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto4']['ID']; ?>" class="btn btn-dark mr-1 rounded-0">Carrito</a>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto4']['ID']; ?>" class="btn btn-dark btn-outline-dark ml-1 rounded-0">Ver mas</a>
                </div>
              </div>
            </div>
          </div>

                          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto5']['ID']; ?>"> <img src="<?php echo $dataArray['Productos']['Producto5']['Img']; ?>" alt="Image" class="img-fluid"> </a>
              </figure>
              <div class="px-4">
                <h3><a href="product.php?ID=<?php echo $dataArray['Productos']['Producto5']['ID']; ?>"><?php echo $dataArray['Productos']['Producto5']['Tipo']; ?></a></h3>
                 <h6 class="h6-responsive mb-3 text-center">
                     <span class="green-text"> <strong><?php echo $dataArray['Productos']['Producto5']['Valor']; ?></strong> </span>
                      <span class="grey-text"> <small> <s><?php echo $dataArray['Productos']['Producto5']['Antes']; ?></s> </small> </span>
                    </h6>
                <div>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto5']['ID']; ?>" class="btn btn-dark mr-1 rounded-0">Carrito</a>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto5']['ID']; ?>" class="btn btn-dark btn-outline-dark ml-1 rounded-0">Ver mas</a>                </div>
              </div>
            </div>
          </div>
    
                          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto6']['ID']; ?>"> <img src="<?php echo $dataArray['Productos']['Producto6']['Img']; ?>" alt="Image" class="img-fluid"> </a>
              </figure>
              <div class="px-4">
                <h3><a href="product.php?ID=<?php echo $dataArray['Productos']['Producto6']['ID']; ?>"><?php echo $dataArray['Productos']['Producto6']['Tipo']; ?></a></h3>
                 <h6 class="h6-responsive mb-3 text-center">
                     <span class="green-text"> <strong><?php echo $dataArray['Productos']['Producto6']['Valor']; ?></strong> </span>
                      <span class="grey-text"> <small> <s><?php echo $dataArray['Productos']['Producto6']['Antes']; ?></s> </small> </span>
                    </h6>
                <div>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto6']['ID']; ?>" class="btn btn-dark mr-1 rounded-0">Carrito</a>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto6']['ID']; ?>" class="btn btn-dark btn-outline-dark ml-1 rounded-0">Ver mas</a>                </div>
              </div>
            </div>
          </div>
                    
                     </div>      
                  </div>
                  
                   <div class="carousel-item">
                    <div class="row">
                    
                          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto7']['ID']; ?>"> <img src="<?php echo $dataArray['Productos']['Producto7']['Img']; ?>" alt="Image" class="img-fluid"> </a>
              </figure>
              <div class="px-4">
                <h3><a href="product.php?ID=<?php echo $dataArray['Productos']['Producto7']['ID']; ?>"><?php echo $dataArray['Productos']['Producto7']['Tipo']; ?></a></h3>
                 <h6 class="h6-responsive mb-3 text-center">
                     <span class="green-text"> <strong><?php echo $dataArray['Productos']['Producto7']['Valor']; ?></strong> </span>
                      <span class="grey-text"> <small> <s><?php echo $dataArray['Productos']['Producto7']['Antes']; ?></s> </small> </span>
                    </h6>
                <div>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto7']['ID']; ?>" class="btn btn-dark mr-1 rounded-0">Carrito</a>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto7']['ID']; ?>" class="btn btn-dark btn-outline-dark ml-1 rounded-0">Ver mas</a>                </div>
              </div>
            </div>
          </div>

                          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto8']['ID']; ?>"> <img src="<?php echo $dataArray['Productos']['Producto8']['Img']; ?>" alt="Image" class="img-fluid"> </a>
              </figure>
              <div class="px-4">
                <h3><a href="product.php?ID=<?php echo $dataArray['Productos']['Producto8']['ID']; ?>"><?php echo $dataArray['Productos']['Producto8']['Tipo']; ?></a></h3>
                 <h6 class="h6-responsive mb-3 text-center">
                     <span class="green-text"> <strong><?php echo $dataArray['Productos']['Producto8']['Valor']; ?></strong> </span>
                      <span class="grey-text"> <small> <s><?php echo $dataArray['Productos']['Producto8']['Antes']; ?></s> </small> </span>
                    </h6>
                <div>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto8']['ID']; ?>" class="btn btn-dark mr-1 rounded-0">Carrito</a>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto8']['ID']; ?>" class="btn btn-dark btn-outline-dark ml-1 rounded-0">Ver mas</a>
                                  </div>
              </div>
            </div>
          </div>
    
                          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto9']['ID']; ?>"> <img src="<?php echo $dataArray['Productos']['Producto9']['Img']; ?>" alt="Image" class="img-fluid"> </a>
              </figure>
              <div class="px-4">
                <h3><a href="product.php?ID=<?php echo $dataArray['Productos']['Producto9']['ID']; ?>"><?php echo $dataArray['Productos']['Producto9']['Tipo']; ?></a></h3>
                 <h6 class="h6-responsive mb-3 text-center">
                     <span class="green-text"> <strong><?php echo $dataArray['Productos']['Producto9']['Valor']; ?></strong> </span>
                      <span class="grey-text"> <small> <s><?php echo $dataArray['Productos']['Producto9']['Antes']; ?></s> </small> </span>
                    </h6>
                <div>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto9']['ID']; ?>" class="btn btn-dark mr-1 rounded-0">Carrito</a>
                  <a href="product.php?ID=<?php echo $dataArray['Productos']['Producto9']['ID']; ?>" class="btn btn-dark btn-outline-dark ml-1 rounded-0">Ver mas</a>
                </div>
              </div>
            </div>
          </div>
                   
                   <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
                    
                     </div>      
                  </div>          
              </div>
          </div>  
    </div>
</div>
    
<!-- Updates Notifications -->    
    
    <div class="site-block pt-5 pb-5"  style="background-image: url(photos/Poster.jpg); background-attachment: fixed;" data-aos="fade">
      <div class="container" style="color: white;">

        <div class="row align-items-center justify-content-center">
          <form class="col-md-7" method="post">
            <h2>Recibe notificaciones en cada actualización.</h2>
            <div class="d-flex mb-4">
              <input type="text" class="form-control rounded-0" placeholder="Enter your email address">
              <input type="submit" class="btn btn-white btn-outline-white rounded-0" value="Subscribe">
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat commodi veniam doloremque ducimus tempora.</p>
          </form>
        </div>
      </div>
    </div>
        <br>
        
        
<!-- footer included with php -->           
           
<?php include("inc/footer.php"); ?>