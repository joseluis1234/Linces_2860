<?php
session_start();
require_once "Models/Crud.php";
require_once "Controllers/Controller.php";

$login = new MvcController();
$login->ingresoUserController();
//var_dump($_SESSION['user']);
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogo</title>
    <script src="https:/code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- AniJS core library -->
    <script src="https://anijs.github.io/lib/anijs/anijs-min.js"></script>

    <!-- Include to use $addClass, $toggleClass or $removeClass -->
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://csshake.surge.sh/csshake.css">
    <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css">

</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top" style="background: #77c5e7">
    <div class="container">
        <a class="navbar-brand" href="principal.php" id="imgLogoLactalis"><img src="img/lactalis_mexico.jpg" alt=""
                                                                               class="float-lg-left w-50"
                                                                               id="img_logo_home"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" style="color: #FFFFFF;font-size: 18px"">
                    Configuración
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="perfil.php">Perfil</a>
                        <a class="dropdown-item" href="Controllers/cerrarSesion.php">Cerrar sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center" style="margin-bottom:0; " id="banner">

    <div id="carouselExampleIndicators" class="carousel slide  justify-content-lg-between" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner w3-center">

            <div class="carousel-item active">

                <img class="col-md-10 col-md-offset-1" src="img/call_of_duty.jpg" alt="">
                <div class="carousel-caption">
                </div>


            </div>

            <div class="carousel-item">

                <img class="col-md-10 col-md-offset-1" src="img/watch_dogs.jpg" alt="">
                <div class="carousel-caption">
                </div>

            </div>
            <div class="carousel-item">

                <img class="col-md-10 col-md-offset-1" src="img/video_games.jpg"
                     alt="">
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon " aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next " href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br><br>
    <div class="container">
        <div class="text-xl-center    shake-little">|
            <h2>Nuestro Catalogo</h2>
        </div>
        <br><br>

        <div class="row">

            <div class="col-4 shake" id="">
                <div class="card-body">
                    <div class="col-md-22 bwhite center-block shadow  margin-right-10">
                        <a href="" data-toggle="modal" data-target="#modalCroquetas">
                            <div class="" align="center">
                                <br>
                               <a href="Informacion_Juegos/Gears4.html">
                                <img clas="img-responsive imgreceta" src="https://store-images.s-microsoft.com/image/apps.11650.13510798887356280.235dc311-b50e-403c-af16-ceffcc2c2399.99b85445-285f-4bc9-a0ec-53e5c36b1ae3?mode=scale&q=90&h=300&w=200"
                                     style="width: 90%" id="img.Gears4"> </a>
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 22px;">Gears of War 4</p>
                        <div class="col-md-12 ratingStar text-right nopadding">

                        </div>
                    </div>
                </div>
            </div>

            <!-- The Modal -->



            <div class="col-4 shake-rotate" id="">
                <div class="card-body">
                    <div class="col-md-22 bwhite center-block shadow  margin-right-10">
                        <a href="" data-toggle="modal" data-target="#modalEnsalada">
                            <div class="" align="center">
                                <br>
                                <a href="Informacion_Juegos/GTAV.html">
                                <img clas="img-responsive imgreceta" src="https://images-na.ssl-images-amazon.com/images/I/71SJqUljaBL._AC_SX215_.jpg" class="rounded" style="width: 90%"
                                     id="img_ensalada"> </a>
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 22px;">GTA V
                             </p>
                        <div class="col-md-12 ratingStar text-right nopadding">
                        </div>
                    </div>
                </div>
            </div>





            <div class="col-4 shake-rotate" id="">
                <div class="card-body">
                    <div class="col-md-22 bwhite center-block shadow  margin-right-10">
                        <a href="" data-toggle="modal" data-target="#modalPay">
                            <div class="" align="center">
                                <br>
                                <a href="Informacion_Juegos/Halo.html">
                                <img clas="img-responsive imgreceta" src="https://i11c.3djuegos.com/juegos/7655/halo_hd/fotos/ficha/halo_hd-1728086.jpg" style="width: 90%"
                                     id="img_pay"> </a>
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 22px;">Halo: Combat Envolved</p>
                        <div class="col-md-12 ratingStar text-right nopadding">

                        </div>
                    </div>
                </div>
            </div>



        <br><br><br>


        <div class="row">

            <div class="col-4 shake-vertical" id="">
                <div class="card-body">
                    <div class="col-md-22 bwhite center-block shadow  margin-right-10">
                        <a href="" data-toggle="modal" data-target="#modalTamal">
                            <div class="" align="center">
                                <br>
                                <a href="Informacion_Juegos/Kinect Adventures.html">
                                <img clas="img-responsive imgreceta" src="https://i11d.3djuegos.com/juegos/6240/kinect_adventures/fotos/ficha/kinect_adventures-1721595.jpg" style="width: 90%"
                                     id="img_tamal"> </a>
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 22px;">Kinect Adventures</p>
                        <div class="col-md-12 ratingStar text-right nopadding">


                        </div>
                    </div>
                </div>
            </div>




            <div class="col-4 shake-vertical" id="">
                <div class="card-body">
                    <div class="col-md-22 bwhite center-block shadow  margin-right-10">
                        <a href="" data-toggle="modal" data-target="#modalPlatano">
                            <div class="" align="center">
                                <br>
                                <a href="Informacion_Juegos/Minecraft.html">
                                <img clas="img-responsive imgreceta" src="https://images-na.ssl-images-amazon.com/images/I/512dVKB22QL.png"
                                     style="width: 90%"> </a>
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 22px;">Minecraft</p>
                        <div class="col-md-12 ratingStar text-right nopadding">


                        </div>
                    </div>

                </div>
            </div>




            <div class="col-4 shake-vertical" id="">
                <div class="card-body">
                    <div class="col-md-22 bwhite center-block shadow  margin-right-10">
                        <a href="" data-toggle="modal" data-target="#modalBurritos">
                            <div class="" align="center">
                                <br>
                                <a href="Informacion_Juegos/Outlast.html">
                                <img clas="img-responsive imgreceta" src="https://www.xoneoff.com/62-large_default/outlast-bundle-of-terror.jpg"
                                     style="width: 90%" id="img_burritos">
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 22px;">Outlast</p>
                        <div class="col-md-12 ratingStar text-right nopadding">
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <br><br><br>


        <div class="row">

            <div class="col-4 shake-horizontal" id="">
                <div class="card-body">
                    <div class="col-md-22 bwhite center-block shadow  margin-right-10">
                        <a href="" data-toggle="modal" data-target="#modalPambazo">
                            <div class="" align="center">
                                <br>
                                <a href="Informacion_Juegos/Planet coaster.html">
                                <img clas="img-responsive imgreceta" src="https://mlstaticquic-a.akamaihd.net/planet-coaster--D_NQ_NP_895254-MLU26546892486_122017-F.jpg" style="width: 90%"> </a>
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 22px;">Planet Coaster</p>
                        <div class="col-md-12 ratingStar text-right nopadding">
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-4 shake-horizontal" id="">
                <div class="card-body">
                    <div class="col-md-22 bwhite center-block shadow  margin-right-10">
                        <a href="" data-toggle="modal" data-target="#modalChilaquiles">
                            <div class="" align="center">
                                <br>
                                <a href="Informacion_Juegos/Pokémon omega rubí.html">
                                <img clas="img-responsive imgreceta" src="https://vignette.wikia.nocookie.net/pokemon/images/a/a0/OmegaRuby-EN.png/revision/latest?cb=20160114215708"
                                     style="width: 90%"> </a>
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 44px;">Pokemon Omega Rubi</p>
                        <div class="col-md-12 ratingStar text-right nopadding">


                        </div>
                    </div>
                </div>
            </div>





            <div class="col-4 shake-horizontal" id="">
                <div class="card-body">
                    <div class="col-md-22 bwhite center-block shadow  margin-right-10">
                        <a href="" data-toggle="modal" data-target="#modalSalpicon">
                            <div class="" align="center">
                                <br>
                                <a href="Informacion_Juegos/Portal 2.html">
                                <img clas="img-responsive imgreceta" src="https://images-na.ssl-images-amazon.com/images/I/51Vgt4pMFTL._SX425_.jpg"
                                     style="width: 90%"> </a>
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 44px;">Portal 2</p>
                        <div class="col-md-12 ratingStar text-right nopadding">

                        </div>
                    </div>
                </div>
            </div>




        </div>
        <br><br>

            <div class="row">

                <div class="col-4 shake-horizontal" id="">
                    <div class="card-body">
                        <div class="col-md-22 bwhite center-block shadow  margin-right-10">
                            <a href="" data-toggle="modal" data-target="#modalPambazo">
                                <div class="" align="center">
                                    <br>
                                    <a href="Informacion_Juegos/VivaPiñata.html">
                                        <img clas="img-responsive imgreceta" src="https://images-na.ssl-images-amazon.com/images/I/71aiRYda4xL._SY445_.jpg" style="width: 90%"> </a>
                                    <span></span>
                                </div>
                            </a>
                            <p class="text-center tituloReceta" style="height: 22px;">Viva Piñata</p>
                            <div class="col-md-12 ratingStar text-right nopadding">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-4 shake-horizontal" id="">
                    <div class="card-body">
                        <div class="col-md-22 bwhite center-block shadow  margin-right-10">
                            <a href="" data-toggle="modal" data-target="#modalChilaquiles">
                                <div class="" align="center">
                                    <br>
                                    <a href="Informacion_Juegos/Alice.html">
                                        <img clas="img-responsive imgreceta" src="https://cdn.gracza.pl/galeria/gry13/grupy/1474.jpg"
                                             > </a>
                                    <span></span>
                                </div>
                            </a>
                            <p class="text-center tituloReceta" style="height: 44px;">Alice</p>
                            <div class="col-md-12 ratingStar text-right nopadding">


                            </div>
                        </div>
                    </div>
                </div>





            </div>


    </div>

    <footer class="page-footer font-small bg-dark" id="footer_dash">

        <!-- Footer Elements -->
        <div class="container">
            <!-- Grid row-->
            <div class="form-row">
                <!-- Grid column -->
                <div class="col-md-12 py-5">
                    <div class="mb-3 flex-center text-md-center">

                        <div class="text-md-left col-md-5">

                            <a href="#" class="col-md-1 " style="color: #FFFFFF; font-size: medium">Soluciones</a>


                            <a href="contactUs.php" class="col-md-3 " style="color: #FFFFFF; font-size: medium">Contáctanos</a>


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
            <a href="http://www.esmeralda.com.mx/" style="color: #FFFFFF"> Trigames.com.mx</a>
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

    <?php
    ##  require "views/footer.php";
    ?>
</body>
</html>