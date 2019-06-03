<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/sliderDash.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/perfilStyle.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

</head>
<body>
<div class="container">
    <div class="row flex-lg-nowrap">
        <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
            <div class="card p-3">
                <div class="e-navlist e-navlist--active-bg">
                    <ul class="nav">
                        <!--<li class="nav-item"><a class="nav-link px-2 active" href="./overview.html"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>-->
                        <li class="nav-item"><a class="nav-link px-2" href="principal.php"><i
                                        class="fa fa-fw fa-th mr-1"></i><span>Principal</span></a></li>
                        <!--<li class="nav-item"><a class="nav-link px-2" href="./settings.html"><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>-->
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="row">
                <div class="col mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="e-profile">
                                <div class="row">
                                    <div class="col-12 col-sm-auto mb-3">
                                        <div class="mx-auto" style="width: 140px;">
                                            <!--<div class="d-flex justify-content-center align-items-center rounded"
                                                 style="height: 140px; background-color: rgb(233, 236, 239);">
                                                <img src="/intranet/uploads" alt="">
                                            </div>-->
                                        </div>
                                    </div>
                                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                                            <!--<h4 class="pt-sm-2 pb-1 mb-5 text-center">PERFIL</h4>-->
                                            <div class="text-muted">
                                                <small><?php ?></small>
                                            </div>
                                            <div class="mt-2">
                                                <!--<button class="btn btn-primary" type="file"
                                                        enctype="multipart/form-data">
                                                    <i class="fa fa-fw fa-camera"></i>
                                                    <span>Change Photo</span>
                                                </button>-->
                                            </div>
                                        </div>
                                        <div class="text-center text-sm-right">
                                            <span class="badge badge-secondary">administrator</span>
                                            <div class="text-muted">
                                                <small>Se unió el <?php echo $arregloInfo[6] ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="" class="active nav-link">Mi Perfil</a></li>
                                </ul>
                                <div class="tab-content pt-3">
                                    <div class="tab-pane active">
                                        <form class="form" method="post" novalidate="" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Nombre Completo</label>
                                                                <input class="form-control form-control-md" type="text"
                                                                       name="nameUserProfile" placeholder="Nombre"
                                                                       value="<?php echo $arregloInfo[1] . ' ' . $arregloInfo[2] . ' ' . $arregloInfo[3] ?>"
                                                                       style="width: 270px" required id="idName">
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div class="form-group col-md-12">
                                                                <label>No. Empleado</label>
                                                                <input class="form-control" type="text"
                                                                       name="numUserProfile"
                                                                       placeholder="No. empleado"
                                                                       value="<?php echo $arregloInfo[0] ?>"
                                                                       style="width: 90px" required id="idNum">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="form-group col-lg-11">
                                                                <label>Curp</label>
                                                                <input class="form-control" type="text"
                                                                       name="curpUserProfile"
                                                                       placeholder="Curp"
                                                                       value="<?php echo $arregloInfo[5] ?>"
                                                                       required id="idCurp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Empresa</label>
                                                                <input class="form-control" type="text"
                                                                       name="enterpriseUserProfile"
                                                                       placeholder="Empresa"
                                                                       value="<?php echo $arregloInfo[12] ?>"
                                                                       id="idEnter">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Fecha de Ingreso</label>
                                                                <input class="form-control" type="text"
                                                                       name="fechaIngreso"
                                                                       placeholder="Fecha de ingreso"
                                                                       value="<?php echo $arregloInfo[6] ?>"
                                                                       id="idDate">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input class="form-control" type="text"
                                                                       placeholder="user@example.com"
                                                                       name="emailProfile" value="<?php
                                                                echo $arregloInfo[11] ?>" id="idEmail">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <div class="form-group">
                                                                <label>Acerca</label>
                                                                <textarea class="form-control" rows="5"
                                                                          placeholder="My Bio"
                                                                          name="aboutUs"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-6 mb-3">
                                                    <div class="mb-2"><b>Cambie su contraseña</b></div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Contraseña Actual</label>
                                                                <input class="form-control" type="text" placeholder=""
                                                                       value="<?php echo $arregloInfo[7] ?>"
                                                                       name="actualPass" id="idCurrentPass">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>New Password</label>
                                                                <input class="form-control" type="password"
                                                                       placeholder="••••••" name="newPass"
                                                                       id="idNewPass">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Confirm <span
                                                                            class="d-none d-xl-inline">Password</span></label>
                                                                <input class="form-control" type="password"
                                                                       placeholder="••••••" name="confirmPass"
                                                                       id="idConfirmPass"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--<div class="col-12 col-sm-5 offset-sm-1 mb-3">
                                                    <div class="mb-2"><b>Keeping in Touch</b></div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label>Email Notifications</label>
                                                            <div class="custom-controls-stacked px-2">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="notifications-blog" checked="">
                                                                    <label class="custom-control-label" for="notifications-blog">Blog posts</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="notifications-news" checked="">
                                                                    <label class="custom-control-label" for="notifications-news">Newsletter</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="notifications-offers" checked="">
                                                                    <label class="custom-control-label" for="notifications-offers">Personal Offers</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->


                                            </div>
                                            <div class="row">
                                                <div class="w3-bar ">

                                                    <button type="button" class="btn-lg btn-dark" value="Editar"
                                                            id="btnLogin"
                                                            onclick="inputsDisable()">
                                                        Editar
                                                    </button>


                                                    <button type="submit" class="btn-lg btn-primary" value="Enviar"
                                                            id="btnLogin"
                                                            onsubmit="this.disabled=false; this.value='Enviando..!!';this.form.submit(); return validarRegistro()"
                                                            onclick="inputsDisable()">
                                                        Guardar Cambios
                                                    </button>

                                                </div>
                                            </div>


                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3 mb-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="px-xl-2">
                                <i class="fa fa-sign-out"></i>
                                <span><a href="Controllers/cerrarSesion.php" class="col-sm-6">Cerrar Sesión</a></span>


                            </div>
                        </div>
                    </div>
                    <!--<div class="card">
                        <div class="card-body">
                            <h6 class="card-title font-weight-bold">Soporte</h6>
                            <p class="card-text">Para obtener soporte y asesoría contactenos.</p>



                        </div>
                    </div>-->

                </div>

            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>
</div>
</body>
</html>