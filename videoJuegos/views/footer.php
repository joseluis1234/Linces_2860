
<!-- Footer -->
<footer class="page-footer font-small" id="footer_dash">

    <!-- Footer Elements -->
    <div class="container">
        <!-- Grid row-->
        <div class="form-row">
            <!-- Grid column -->
            <div class="col-md-12 py-5">
                <div class="mb-3 flex-center text-md-center">

                    <div class="text-md-left col-md-5">

                        <a href="#" class="col-md-1 " style="color: #FFFFFF; font-size: medium">Soluciones</a>


                        <a href="contactUs.php" class="col-md-3 "
                           style="color: #FFFFFF; font-size: medium">Contáctanos</a>


                        <a href="#exampleModal" data-toggle="modal" style="color: #FFFFFF; font-size: medium"
                           data-target="">Soporte</a>

                    </div>


                    <div class="text-xl-right">
                        <!-- Facebook -->
                        <a class="  col-sm-12" href="https://es-la.facebook.com/">
                            <img src="img/facebook.png" alt="">
                        </a>
                        <!-- Twitter -->
                        <a class=" col-sm-12" href="https://twitter.com/?lang=es">
                            <img src="img/twitter.png">
                        </a>
                        <!-- Google +-->
                        <a class=" col-sm-12" href="https://plus.google.com/discover">
                            <img src="img/google.png">
                        </a>

                        <!--Instagram-->
                        <a class=" col-sm-12" href="https://www.instagram.com/?hl=es-la">
                            <img src="img/instagram.png">
                        </a>

                    </div>


                </div>


            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="color: #FFFFFF">© 2018 Copyright:
        <a href="http://www.esmeralda.com.mx/" style="color: #0b2e13"> Esmeralda.com.mx</a>
        <p>todos los derechos reservados</p>
        <br>
    </div>
    <!-- Copyright -->

    <!--Modal para enviar correo-->
    <!--<a href="#exampleModal" data-toggle="modal" data-target="">Enviar correo</a>-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">


        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <h4 class="modal-title w-100 font-weight-bold text-md-left">Enviar Correo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body mx-sm-5">
                    <form method="POST" action="Controllers/email.php" enctype="multipart/form-data">

                        <div class="md-form ml-xl-5">
                            <label for="name_user" class="col-form-label mx-sm-1">Nombre</label>
                            <input type="text" class="form-control col-lg-10" id="name_user" name="name">
                        </div>

                        <div class="md-form ml-xl-5">
                            <label for="asunto" class="col-form-label col-lg-12">Asunto</label>
                            <input type="text" class="form-control col-lg-10" id="asunto" name="asunto" required>
                        </div>

                        <div class="md-form ml-xl-5">
                            <label for="mail" class="col-form-label col-lg-12">Correo</label>
                            <input type="email" class="form-control col-lg-10" id="mail" name="correo" required>
                        </div>

                        <div class="md-form ml-xl-5">
                            <label for="name_user" class="col-form-label col-lg-12">Con copia</label>
                            <input type="email" class="form-control col-lg-10" id="name_user" name="copyMail">
                        </div>


                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Mensaje</label>
                            <textarea class="form-control" id="message_text" name="comentario"></textarea>
                        </div>

                        <div class="md-form ml-xl-5">
                            <input type="file" class="btn btn-danger" value="Adjuntar" name="adjuntar">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="btnMail">Send message</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


</footer>
<!-- Footer -->


