<!-- header included with php -->

<?php 
	include("inc/header.php"); 
	//uso lo mismo que use en el index para leer la info
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
	//tomo el dato para saber que productoes:
	$ID= 'Producto'.$_GET["ID"];
?>

<!-- product section -->
	<section class="product-section">
        <div class="container">
            <div class="row mt-5 justify-content-center">    

<!--Slides-->
                <div id="carousel-thumb" class="carousel slide carousel-fade col-lg-7" data-ride="carousel" data-interval="2000">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                           <img class="d-block w-100" src="<?php echo $dataArray['Productos'][$ID]['Img']; ?>" alt="First slide">
                        </div>
                    </div>
                       
                         <ol class="carousel-indicators">
                            <li data-target="#carousel-thumb" data-slide-to="0" class="active"></li>
                         </ol>
                </div>         
<!--/Slides-->            
     <div class="col-lg-5 card">   
 <!-- Product Name -->  
         <div class="row justify-content-center my-2 pt-3">
             <h2 class="product-name">
              <strong><?php echo $dataArray['Productos'][$ID]['Tipo']; ?></strong>
            </h2>
            <h4 class="h4-responsive ml-3">
              <span class="green-text">
                <strong><?php echo $dataArray['Productos'][$ID]['Valor']; ?></strong>
              </span>
              <span class="grey-text">
                <small> <s><?php echo $dataArray['Productos'][$ID]['Antes']; ?></s> </small>
              </span>
            </h4>
         </div> 
        
<!-- Description Card -->
              <div class="card my-2">       
                  <div class="card-body">
                    <?php echo $dataArray['Productos'][$ID]['Descr']; ?><br />
                    Marca: <strong><?php echo $dataArray['Productos'][$ID]['Marca']; ?></strong><br />
                    Categoria: <strong><?php echo $dataArray['Productos'][$ID]['Genero']; ?></strong>
                  </div>
                </div>
<!-- Opcions Selectors -->
              <div class="row mt-3">
                <div class="col-md-6">
                  <select class="md-form dropdown-primary">
                    <option value="" disabled selected>Seleccione una Color</option>
                    <option value="1">Blanca</option>
                    <option value="2">Negra</option>
                    <option value="3">Rosada</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <select class="md-form dropdown-primary">
                    <option value="" disabled selected>Seleccione un Tamaño</option>
                    <option value="1">XS</option>
                    <option value="2">S</option>
                    <option value="3">L</option>
                  </select>
                </div>
             </div>
<!-- Add to Cart -->
            <div class="text-center mb-3">
                <div class="checkout_button"><a href="#">Agregar al Carrito</a></div>
             </div> 
				<div class="row pt-5 px-3">

                <form action="" method="post">
                	<input type="text" name="nombre" id="checkout_name" class="checkout_input" placeholder="Nombre" >
                    <input type="hidden" name="Producto" value="<?php echo $ID; ?>"  />
                    <textarea class="checkout_input" style="height:150px;" name="comentario" placeholder="Escriba su Mensaje"></textarea>
                                
                                    <div class="btn-group mr-5">
                                     
                                    </div>
                                    <button class="btn" style="margin-left:140px;" name="enviar" type="submit">Enviar</button>
                                </form>
                            </div>
                        </div>            	
                    </div>
            <div class="back-link mt-3">
				<button class="btn btn-outline-dark" onclick="goBack()"><i class="fa fa-angle-left"></i> Volver a la Pagina Anterior</button>
				<script> function goBack() { window.history.back();} </script>
			
         </div>
    </div>
</section>
	
<!-- footer included with php -->           
           
<?php include("inc/footer.php"); ?>