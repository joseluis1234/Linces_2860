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
                                <img clas="img-responsive imgreceta" src="img_recetas/croquetas_queos.png"
                                     style="width: 90%" id="img_croquetas">
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 22px;">Croquetas de Queso </p>
                        <div class="col-md-12 ratingStar text-right nopadding">

                        </div>
                    </div>
                </div>
            </div>

            <!-- The Modal -->
            <div class="modal fade" id="modalCroquetas">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h4 class="modal-title text-lg-left" style="font-family: Century;">Croquetas de Queso</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="modal_contenido"
                             style="background-image: url('img/video_games.jpg)">

                            <div class="text-center text-sm text-dark" id="croquetas">
                                <h2 class="h2 text-xl-center text-danger">Ingredientes</h2>
                                <p>1 kg de papas, peladas y en trozos</p>
                                <p>Sal y pimienta, al gusto</p>
                                <p>1 cucharada de mantequilla</p>
                                <p>2 cucharadas de Queso Manchego Esmeralda rallado</p>
                                <p>2 huevos</p>
                                <p>1 yema de huevo</p>
                                <p>1 cucharada de perejil, picado</p>
                                <p>1 pizca de nuez moscada</p>
                                <p>Pan molido</p>
                                <p>Aceite</p>
                                <h2 class="text-lg-center text-warning">Preparación</h2>
                                <p>
                                    Hierve las papas en una olla con agua y sal hasta que estén bien suaves. Machácalas
                                    y mézclalas con
                                    la mantequilla, el Queso Manchego Esmeralda, el huevo, la yema, perejil, sal,
                                    pimienta y nuez
                                    moscada. La pasta debe quedar compacta, de lo contrario, agrega pan molido.
                                </p>
                                <p>
                                    Bate el huevo
                                </p>
                                <p>
                                    Forma las croquetas, mójalas con huevo batido, empanízalas y fríelas en una sartén
                                    con un poco de
                                    aceite caliente hasta que se hayan dorado.

                                </p>

                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-4 shake-rotate" id="">
                <div class="card-body">
                    <div class="col-md-22 bwhite center-block shadow  margin-right-10">
                        <a href="" data-toggle="modal" data-target="#modalEnsalada">
                            <div class="" align="center">
                                <br>
                                <img clas="img-responsive imgreceta" src="img_recetas/tornillo.png" style="width: 90%"
                                     id="img_ensalada">
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 22px;">Ensalada de fusilli con Queso
                            Panela </p>
                        <div class="col-md-12 ratingStar text-right nopadding">
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="modalEnsalada">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h4 class="modal-title text-lg-left" style="font-family: Century;">Ensalada de fusilli con
                                Queso
                                Panela</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="modal_contenido"
                             style="background-image: url('img/fondo_modal.jpg')">

                            <div class="text-center text-sm text-dark" id="croquetas">
                                <h2 class="h2 text-xl-center text-danger">Ingredientes</h2>
                                <p>500 g de fusilli</p>
                                <p>1 pimiento rojo</p>
                                <p>1 pimiento amarillo</p>
                                <p>150 g de tomates cherry</p>
                                <p>175 g de aceitunas negras</p>
                                <p>1 diente de ajo picado finamente</p>
                                <p>Sal y pimienta</p>
                                <p>Queso Panela Esmeralda en cubitos</p>

                                <h2 class="text-lg-center text-warning">Preparación</h2>
                                <p>
                                    Cuece la pasta en abundante agua hirviendo con sal hasta que esté al dente.
                                </p>
                                <p>
                                    Corta los pimientos en cuadritos de 2 cm, rebana los tomates por la mitad y pica
                                    finamente el ajo.
                                </p>
                                <p>
                                    En una sartén dora el ajo y cuando despida su aroma, los pimientos.

                                </p>
                                <p>
                                    Añade la pasta, previamente escurrida, mezcla todo, salpimenta y sirve con el Queso
                                    Panela Esmeralda.
                                </p>

                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                                <img clas="img-responsive imgreceta" src="img_recetas/pay.png" style="width: 90%"
                                     id="img_pay">
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 22px;">Pay de almendras</p>
                        <div class="col-md-12 ratingStar text-right nopadding">

                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="modalPay">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h4 class="modal-title text-lg-left" style="font-family: Century;">Pay de almendras</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="modal_contenido"
                             style="background-image: url('img/fondo_modal.jpg')">

                            <div class="text-center text-sm text-dark" id="croquetas">
                                <h2 class="h2 text-xl-center text-danger">Ingredientes</h2>
                                <p>200 g de Queso Crema Esmeralda</p>
                                <p>4 huevos grandes</p>
                                <p>Yogurth natural</p>
                                <p>1 vaso de nata líquida</p>
                                <p>1 vaso de leche entera</p>
                                <p>1 taza de harina</p>
                                <p>1 ½ tazas de azúcar</p>
                                <p>1 sobrecito de levadura</p>
                                <p>Almendras al gusto</p>
                                <p>Azúcar glas al gusto</p>
                                <p>Frutos secos al gusto</p>

                                <h2 class="text-lg-center text-warning">Preparación</h2>
                                <p>
                                    Engrasa el molde con un poco de mantequilla.
                                </p>
                                <p>
                                    Vierte en un tazón los huevos, el queso crema, el yogur natural, azúcar, la leche y
                                    la nata, y bátelo bien hasta formar como una crema.

                                </p>
                                <p>
                                    Añade después la levadura y la harina tamizadas, viértelas poco a poco y sin dejar
                                    de remover, ya que así se facilita la integración de las mismas a la crema anterior.

                                </p>
                                <p>

                                    Deposita la masa en el molde y hornea durante 45 minutos.
                                </p>
                                <p>

                                    Cuando el pay se enfríe totalmente, desmolda, coloca en una charola y adorna por
                                    encima con almendras, azúcar glas y frutos del bosque.
                                </p>

                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

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
                                <img clas="img-responsive imgreceta" src="img_recetas/tamales.png" style="width: 90%"
                                     id="img_tamal">
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 22px;">Tamales de Queso Doble Crema</p>
                        <div class="col-md-12 ratingStar text-right nopadding">


                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="modalTamal">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h4 class="modal-title text-lg-left" style="font-family: Century;">Tamales de Queso Doble
                                Crema</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="modal_contenido"
                             style="background-image: url('img/fondo_modal.jpg')">

                            <div class="text-center text-sm text-dark" id="croquetas">
                                <h2 class="h2 text-xl-center text-danger">Ingredientes</h2>
                                <p>1 taza de agua</p>
                                <p>8 cáscaras de tomate verde</p>
                                <p>1 kg de harina para tamales</p>
                                <p>2 cucharadas de sal</p>
                                <p>2 cucharadas de polvo para hornear</p>
                                <p>¼ kg de manteca de cerdo derretida y fría</p>
                                <p>1½ tazas de caldo de pollo tibio</p>
                                <p>Aceite para freír</p>
                                <p>¼ de cebolla, picada</p>
                                <p>1 jitomate picado</p>
                                <p>1 cucharadita de consomé de pollo en polvo</p>
                                <p>25 hojas de maíz, suavizadas (ver nota)</p>
                                <p>½ kg de Queso Doble Crema Esmeralda en rebanadas delgadas</p>

                                <h2 class="text-lg-center text-warning">Preparación</h2>
                                <p>
                                    Vierte el agua en una olla chica y agrega las cáscaras de tomate. Hierve durante 2
                                    minutos, deja enfriar, cuela y vierte 3/4 de taza dentro de un tazón.
                                </p>
                                <p>
                                    Agrega la harina, sal, polvo para hornear, manteca derretida y caldo de pollo al
                                    tazón con el agua. Bate hasta tener una mezcla homogénea esponjada (sabrás que está
                                    lista cuando una bolita de masa flote dentro de un vaso de agua). Deja reposar
                                    durante 15 minutos.

                                </p>
                                <p>
                                    Mientras, calienta el aceite en un sartén y sofríe las cebollas hasta que se vean
                                    transparentes. Agrega las rajas, jitomate y consomé en polvo.

                                </p>
                                <p>

                                    Cocina hasta que los sabores se hayan integrado y la mayor parte del líquido se haya
                                    evaporado.
                                </p>
                                <p>

                                    Forma los tamales colocando en cada hoja 1 cucharada de masa, 1 rebanada de Queso
                                    Doble Crema Esmeralda y un poco de rajas. Envuelve los tamales y colócalos parados
                                    sobre la rejilla de una olla vaporera con agua hirviendo. Tapa y cuece al vapor
                                    durante aproximadamente 1 hora o hasta que los tamales se despeguen fácilmente de la
                                    hoja.
                                </p>
                                <p>
                                    Nota: Para suavizar las hojas secas de tamal, colócalas en un recipiente grande y
                                    cúbrelas con agua caliente. Déjalas remojando hasta que estén suaves y flexibles,
                                    aproximadamente 3 horas. Escurre bien.
                                </p>

                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                                <img clas="img-responsive imgreceta" src="img_recetas/pay_platano.png"
                                     style="width: 90%">
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 22px;">Pay de plátano con cacahuate</p>
                        <div class="col-md-12 ratingStar text-right nopadding">


                        </div>
                    </div>

                </div>
            </div>


            <div class="modal fade" id="modalPlatano">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h4 class="modal-title text-lg-left" style="font-family: Century;">Pay de plátano con
                                cacahuate
                                Crema</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="modal_contenido"
                             style="background-image: url('img/fondo_modal.jpg')">

                            <div class="text-center text-sm text-dark" id="croquetas">
                                <h2 class="h2 text-xl-center text-danger">Ingredientes</h2>
                                <p>1/4 de paquete de galletas Marías</p>
                                <p>20 g cacahuate</p>
                                <p>1/4 de barra de mantequilla</p>
                                <p>½ cda de azúcar morena</p>
                                <p>1/4 de sobre de grenetina</p>
                                <p>1/4 de lata de leche condensada</p>
                                <p>140 g de Queso Crema Esmeralda</p>
                                <p>½ plátano tabasco</p>
                                <p>Crema de cacahuate</p>


                                <h2 class="text-lg-center text-warning">Preparación</h2>
                                <p>
                                    Colocar en un recipiente las galletas, el cacahuate y el azúcar, molerlos y
                                    agregar la mantequilla hasta que quede una pasta homogénea. Distribuir esta mezcla
                                    de manera uniforme en el fondo de un molde para pay y hornear por 15 minutos,
                                    reservar.
                                </p>
                                <p>
                                    Poner a hidratar la grenetina en 2 cucharadas de agua y dejarla reposar hasta que se
                                    esponje. Después disolverla 15 minutos en el microondas hasta que quede líquida.

                                </p>
                                <p>
                                    Acremar el queso crema en la batidora y agregar la leche condensada, enseguida
                                    incorporar la grenetina líquida.

                                </p>
                                <p>

                                    Poner la base de galletas en el fondo del recipiente para pay, poner una cama de
                                    rebanadas de plátano. Alternar capas de base y de plátano y terminar con la crema.
                                    Refrigerar hasta que esté firme para desmoldar.
                                </p>


                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                                <img clas="img-responsive imgreceta" src="img_recetas/burritos_queso.png"
                                     style="width: 90%" id="img_burritos">
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 22px;">Burritos de jamón y queso</p>
                        <div class="col-md-12 ratingStar text-right nopadding">
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalBurritos">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h4 class="modal-title text-lg-left" style="font-family: Century;">Burritos de jamón y
                                queso</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="modal_contenido"
                             style="background-image: url('img/fondo_modal.jpg')">

                            <div class="text-center text-sm text-dark" id="croquetas">
                                <h2 class="h2 text-xl-center text-danger">Ingredientes</h2>
                                <p>2 piezas de tortillas de harina</p>
                                <p>2 rebanadas de Queso Manchego Esmeralda</p>
                                <p>2 rebanadas de jamón</p>
                                <p>lechuga al gusto</p>
                                <p>jitomate al gusto</p>
                                <p>jugo de limón al gusto</p>


                                <h2 class="text-lg-center text-warning">Preparación</h2>
                                <p>
                                    Calentar las tortillas de harina. Poner una rebanada de jamón y otra de queso.
                                    Enrollar para evitar que el queso se salga al derretirse.
                                </p>
                                <p>
                                    Poner en el comal o en el sartén. Voltear constantemente los burritos para que no se
                                    quemen. Retirar del fuego cuando el queso esté totalmente derretido.

                                </p>
                                <p>
                                    Cortar el jitomate y la lechuga y revolver. Agregar jugo de limón a la ensalada para
                                    aderezar. Servir los burritos y acompañar con esta mezcla.

                                </p>

                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                                <img clas="img-responsive imgreceta" src="img_recetas/pambazos.png" style="width: 90%">
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 22px;">Pambazos con Crema y Queso Cotija</p>
                        <div class="col-md-12 ratingStar text-right nopadding">
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalPambazo">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h4 class="modal-title text-lg-left" style="font-family: Century;">Pambazos con Crema y
                                Queso Cotija</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="modal_contenido"
                             style="background-image: url('img/fondo_modal.jpg')">

                            <div class="text-center text-sm text-dark" id="croquetas">
                                <h2 class="h2 text-xl-center text-danger">Ingredientes</h2>
                                <p>4 bolillos o teleras</p>
                                <p>½ kg de papa</p>
                                <p>1 diente de ajo</p>
                                <p>1 cebolla</p>
                                <p>½ lechuga romanita</p>
                                <p>Chorizo</p>
                                <p>100 g de Queso Cotija Esmeralda</p>
                                <p>Frijoles refritos</p>
                                <p>Crema Ácida Esmeralda </p>
                                <p>Aceite</p>


                                <h2 class="text-lg-center text-warning">Preparación</h2>
                                <p>
                                    Lavar y desinfectar la lechuga, apartar en un recipiente.
                                </p>
                                <p>
                                    Lavar y desvenar los chiles para ponerlos a hervir en una olla. Una vez que estén
                                    listos, molerlos en la licuadora con un agua, ajo y un cuarto de cebolla.

                                </p>
                                <p>
                                    Cortar los bolillos o teleras por la mitad y bañarlos en la salsa. Freírlos en un
                                    sartén con aceite hasta que queden dorados.

                                </p>

                                <p>
                                    Cocer las papas y machacarlas hasta obtener un puré. O bien, picarlas en cuadros,
                                    una vez hervidas.
                                </p>
                                <p>
                                    Freír en un sartén el chorizo desmenuzado.
                                </p>
                                <p>
                                    Abrir los pambazos, untarlos con frijoles, agregar las papas y el chorizo. Añadir la
                                    crema y espolvorear el queso rallado. Poner lechuga al gusto.
                                </p>

                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                                <img clas="img-responsive imgreceta" src="img_recetas/chilaquiles.png"
                                     style="width: 90%">
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 44px;">Chilaquiles de salsa morita con Queso
                            Adobera</p>
                        <div class="col-md-12 ratingStar text-right nopadding">


                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="modalChilaquiles">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h4 class="modal-title text-lg-left" style="font-family: Century;">Chilaquiles de salsa
                                morita con Queso
                                Adobera</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="modal_contenido"
                             style="background-image: url('img/fondo_modal.jpg')">

                            <div class="text-center text-sm text-dark" id="croquetas">
                                <h2 class="h2 text-xl-center text-danger">Ingredientes</h2>
                                <p>4 tazas de totopos</p>
                                <p>200g de chile morita</p>
                                <p>10 tomates</p>
                                <p>2 cebollas </p>
                                <p>200g de Queso Adobera Esmeralda</p>
                                <p>4 cdas de Crema Ácida Esmeralda</p>
                                <p>2 aguacates</p>


                                <h2 class="text-lg-center text-warning">Preparación</h2>
                                <p>
                                    Cocer los tomates y los chiles en agua hirviendo junto con 1 cucharada de sal.
                                </p>
                                <p>
                                    Cocinar la salsa durante 10 minutos hirviendo y moler. Sofreír en aceite caliente
                                    posteriormente.

                                </p>
                                <p>
                                    Los totopos se sumergen en la salsa y se sirven calientes.

                                </p>

                                <p>
                                    Se decoran con Queso Adobera, cebolla y Crema Ácida.
                                </p>
                                <p>
                                    TIP: Puedes agregar rebanadas de aguacate o un huevo estrellado.
                                </p>

                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                                <img clas="img-responsive imgreceta" src="img_recetas/salpicón_res.png"
                                     style="width: 90%">
                                <span></span>
                            </div>
                        </a>
                        <p class="text-center tituloReceta" style="height: 44px;">Salpicón de res con Queso Panela</p>
                        <div class="col-md-12 ratingStar text-right nopadding">

                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="modalSalpicon">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h4 class="modal-title text-lg-left" style="font-family: Century;">Salpicón de res con
                                Queso Panela</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="modal_contenido"
                             style="background-image: url('img/fondo_modal.jpg')">

                            <div class="text-center text-sm text-dark" id="croquetas">
                                <h2 class="h2 text-xl-center text-danger">Ingredientes</h2>
                                <p>600 g de carne de res deshebrada</p>
                                <p>300 g de lechuga</p>
                                <p>3 jitomates</p>
                                <p>750 g Queso Panela ESMERALDA</p>
                                <p>6 cucharadas de aceite de olivo</p>


                                <h2 class="text-lg-center text-warning">Preparación</h2>
                                <p>
                                    Lavar y desinfectar el jitomate.
                                </p>
                                <p>
                                    Cortar el Queso Panela Esmeralda en julianas y reservar.

                                </p>
                                <p>
                                    Cortar el jitomate y agregar la carne, aliñar con aceite de olivo.

                                </p>

                                <p>
                                    Servir frío.
                                </p>

                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <br><br>


    </div>

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

    <?php
    #  require "partials/footerVacaciones.php";
    ?>
</body>
</html>