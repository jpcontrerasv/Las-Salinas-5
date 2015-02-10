<?php include 'header.php'; ?>
    <section id="contacto" class="container-fluid no-column">
    	<div id="contacto-head" class="container-fake">
        	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 no-column tit">
            	<div class="h1">
                	<h1>Contacto</h1>
                </div>
                <p>Déjanos tus datos y nos pondremos en contacto contigo</p>
                <div class="box fwidth fleft text-right hidden-sm hidden-xs">
                <img src="img/detalle-contacto-1.jpg"  alt="">
                </div>
            </div>
        	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form">
            	
                <form class="form-horizontal" method="post" action="contactengine.php">
                <fieldset>
                

                <div class="form-group enviado">
                  <div class="col-md-12 text-center">
                  	<br><p><strong>Tu mensaje ha sido envíado</strong></p><br>
                  </div>
                </div>
                <!--gracias-->

                <div class="form-group">
                  <label class="col-md-3 control-label" for="nombre">Nombre</label>  
                  <div class="col-md-8">
                  <input id="textinput" name="nombre" type="text" placeholder="Tu nombre" class="form-control input-md" required="">
                  </div>
                </div>
                <!--nombre-->

                <div class="form-group">
                  <label class="col-md-3 control-label" for="apellidos">Apellidos</label>  
                  <div class="col-md-8">
                  <input id="textinput" name="apellidos" type="text" placeholder="Tus apellidos" class="form-control input-md" required="">
                  </div>
                </div>
                <!--apellidos-->
                
                <div class="form-group">
                  <label class="col-md-3 control-label" for="email">Email</label>  
                  <div class="col-md-8">
                  <input id="textinput" name="email" type="email" placeholder="Tu email" class="form-control input-md" required="">
                  </div>
                </div>
                <!--email-->
                

                <div class="form-group">
                  <label class="col-md-3 control-label" for="telefono">Teléfono</label>  
                  <div class="col-md-8">
                  <input id="textinput" name="telefono" type="text" placeholder="Tu teléfono" class="form-control input-md" required="">
                  </div>
                </div>
                <!--telefono-->

                <div class="form-group">
                  <label class="col-md-3 control-label" for="asunto">Asunto</label>  
                  <div class="col-md-8">
                  <input id="textinput" name="asunto" type="text" placeholder="Asunto de tu mensaje" class="form-control input-md" required="">
                  </div>
                </div>
                <!--email-->

                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="mensaje">Mensaje</label>
                  <div class="col-md-8">                     
                    <textarea class="form-control" id="textarea" name="mensaje">Tu mensaje</textarea>
                  </div>
                </div>
                
                <!-- Button -->
                <div class="form-group text-center">
                  <label class="col-md-3 control-label" for="singlebutton"></label>
                  <div class="col-md-8">
                    
                    <input type="submit" value="Enviar" class="btn btn-primary">
                  </div>
                </div>
                
                </fieldset>
                </form>

            </div>
        	<div class="col-lg-2 col-md-2 hidden-sm hidden-xs no-column text-left img">
                <img src="img/separador-mision.jpg" alt="">
                <img src="img/gotas-contacto.jpg" alt="">
            </div>
            
            <div class="clearfix"></div>
            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 no-column">
            	<div class="iframe-rwd">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3346.0676514114502!2d-71.5472898!3d-33.00199185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2scl!4v1417636877160" width="600" frameborder="0" style="border:0"></iframe>                    
                    
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 no-column">
            	<div class="iframe-rwd">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26641.125618029047!2d-70.57981608672185!3d-33.419575906578686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf3e0685199d%3A0xec631cf3a11c5437!2sEl+Golf+150%2C+Las+Condes%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1417462594075" width="600"  frameborder="0" style="border:0"></iframe>
                </div>
            </div>
            
        </div>
        <!--/container fake-->
    </section>
    
<?php include 'footer.php'; ?> 