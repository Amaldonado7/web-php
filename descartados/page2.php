<?php include("inc/header.php"); ?>

<div class="container">


<?php include("inc/filter.php"); ?>



<?php 
  $file = fopen('csv/male.csv','r');
    for($i=0;$i<18  || feof($file);$i++){

    $datos = fgetcsv($file); ?>
    


<!-- Individual Product full Code -->  


 <div class="col-lg-3 my-4">
    <div class="card" id="productcard">
        <div class="product-item mt-4">
             <figure>
                  <button data-toggle="modal" data-target="#modalproduct"> <img src="photos/<?php echo $datos[4]?>" alt="ropa" class="img-fluid"> </button>                     
            </figure>
              <div class="py-2 text-center" id="product-description">
                <h3><?php echo $datos[2]?></h3>
                <div class="mb-3">
                 <div class="row justify-content-center">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="fa fa-star text-warning"></span></a> 4.0</span>
                    <h6 class="h6-responsive ml-3">
                      <span class="green-text"> <strong><?php echo $datos[7]?></strong> </span>
                      <span class="grey-text"> <small> <s><?php echo $datos[8]?></s> </small> </span>
                    </h6>
                    </div>
                  <a href="#" class="btn btn-dark my-2 px-5 rounded-0" style="width:100%"> Add al Carrito </a>
                </div>
              </div>
            </div>
        </div>
    </div>
    


<!-- /Individual Product full Code -->  



<?php }
fclose($file);
?>
</div>


<?php include("inc/footer.php"); ?>