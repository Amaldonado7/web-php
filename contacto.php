<?php include("inc/header.php"); ?>
<div>
<div class="container">
    <div class="home_title">Contactate con nosotros</div> </div>
    <div class="site-blocks-cover inner-page-cover" data-aos="fade" value""></div>
</div>    
<br>
          
<!-- Contact us -->
<div class="container py-5 ">
				<div class="row">
					<div class="col-lg-6">
<!-- Form -->			
						<div class="billing">
							<div class="checkout_title">Envie su Mensaje</div>
							<div class="checkout_form_container">
								<form method="POST" action="email.php" id="checkout_form" class="checkout_form">
									<div class="row">
<!-- Name -->
										<div class="col-lg-6">
											<input type="text" name="nombre" id="checkout_name" class="checkout_input" placeholder="Nombre" required>
                                            </div>
<!-- Last Name -->									
										<div class="col-lg-6">
											<input type="text" name="apellido" id="checkout_last_name" class="checkout_input" placeholder="Apellido" required>
										</div>
									</div>
									<div>
<!-- Country -->
										<select name="checkout_country" name="pais" id="checkout_country" class="dropdown_item_select checkout_input" optional>
											<option>Argentina</option>
											<option>Brasil</option>
											<option>Chile</option>
                                            <option>Uruguay</option>
											<option>Otro</option>
										</select>
									</div>
<!-- Address -->									
									<div>
										<input type="text" name="domicilio" id="checkout_address" class="checkout_input" placeholder="Direccion" required>
									</div>
<!-- Phone # -->									
									<div>
										<input type="phone" name="telefono" id="checkout_phone" class="checkout_input" placeholder="Telefono" required>
									</div>
<!-- Email -->									
									<div>
										<input type="phone" name="email" id="checkout_email" class="checkout_input" placeholder="Email" required>
									</div>
									
                                    <div id="mensaje">
                                         <textarea class="checkout_input" name="mensaje" placeholder="Escriba su Mensaje"></textarea>
                                      <input type="submit" class="checkout_button" value="Enviar">
                                         
                                          
                                       
									</div>
									
								</form>
							</div>
						</div>
					</div>

<!-- Cart Total -->
					<div class="col-lg-6 cart_col">
						<div class="cart_total">
							<div class="cart_extra_content cart_extra_total">
								<div class="checkout_title">Total del Carrito</div>
								<ul class="cart_extra_total_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Subtotal</div>
										<div class="cart_extra_total_value ml-auto">$299.90</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Envio</div>
										<div class="cart_extra_total_value ml-auto">Gratis</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total</div>
										<div class="cart_extra_total_value ml-auto">$299.90</div>
									</li>
								</ul>
								<div class="payment_options">
									<div class="checkout_title">Modo de Pago</div>
									<ul>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_1" name="payment_radio" class="payment_radio">
												<span class="radio_mark"></span>
												<span class="radio_text">Paypal</span>
											</label>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_2" name="payment_radio" class="payment_radio">
												<span class="radio_mark"></span>
												<span class="radio_text">Mercado Pago</span>
											</label>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_3" name="payment_radio" class="payment_radio" checked>
												<span class="radio_mark"></span>
												<span class="radio_text">Credit Card</span>
											</label>
										</li>
									</ul>
								</div>
								<div class="cart_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
								</div>
								<div class="checkout_button"><a href="#">Finalizar Compra</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php include("inc/footer.php"); ?>