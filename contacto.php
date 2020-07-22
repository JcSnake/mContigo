<!DOCTYPE html>
<html lang="es">
<head>
    <title>Contacto</title>
    <?php include_once('template/head.php')?>
</head>
<body class="mp-main-container bg-contacto">
    <?php include_once('template/nav_menu.php'); ?>
    <section class="mp-main-container">
        <div class="uk-width-1-1 mp-margin-top-tab">
            <ul class="uk-subnav uk-subnav-pill uk-margin-remove">
                <li class="uk-active uk-margin-medium-left">
                    <a class="mp-encabezados-tab uk-text-center" href=""><span class="txt-15em mp-bld-text uk-container">CONTACTO</span></a>
                </li>
            </ul>
            <div class="mp-bg-white mp-height-100">
                <div class="uk-container">
                    <ul class="uk-switcher uk-margin">
                        <li class="uk-active">
                            <div class="uk-margin-top uk-flex uk-flex-right uk-width-1-1">
                                <ul class="uk-breadcrumb">
                                    <li class="uk-disabled"><a>Inicio</a></li>
                                    <li class="uk-disabled"><a>Ayuda</a></li>
                                    <li><span class="mp-txt-red">Contacto</span></li>
                                </ul>
                            </div>
                            <div class="uk-margin-medium-bottom uk-width-1-1 uk-align-center">
                                <div class="uk-grid">
                                    <div class="mp-width-1-2 uk-align-center mp-shadowbox mp-radius-all">
                                        <div class="uk-margin-top mp-position-3r">
                                            <h5 class="mp-txt-red mp-bld-text uk-text-uppercase uk-text-center uk-margin-remove">¿tienes algún comentario acerca de nuestro servicio?</h5>
                                            <h5 class="uk-text-uppercase mp-txt-red uk-text-center uk-margin-remove">contáctanos</h5>
                                        </div>    
                                        <form class="uk-width-1-1">
                                            <div class="uk-margin-bottom">
                                                <label class="mp-bld-text">Nombre Completo</label>
                                                <input class="uk-input mp-radius-all mp-width-9-10" type="text" placeholder="María García">
                                            </div>
                                            <div class="uk-margin-bottom">
                                                <label class="mp-bld-text">Correo electrónico</label>
                                                <input class="uk-input mp-radius-all mp-width-9-10" type="text" placeholder="maria@gmail.com">
                                            </div>
                                            <div class="uk-margin-bottom">
                                                <label class="mp-bld-text">Teléfono</label>
                                                <input class="uk-input mp-radius-all mp-width-9-10" type="text" placeholder="5544667788">
                                            </div>
                                            <div class="uk-margin-bottom">
                                                <label class="mp-bld-text">Mensaje</label>
                                                <textarea class="uk-textarea mp-radius-all mp-width-9-10" name="mensaje" id="mensaje" cols="30" rows="5"></textarea>
                                            </div>
                                        </form>
                                        <div class="uk-width-1-1 uk-text-center uk-margin-bottom">
                                            <button href="home.php" class="uk-button uk-text-capitalize mp-txt-red mp-button-red-small mp-bld-text uk-width-1-4">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-align-center mp-width-4-10">
                                    <div class="uk-grid mp-width-1-1" uk-grid>
                                        <div class="uk-width-1-2">
                                            <div class="uk-width-1-1 uk-margin-medium-left">
                                                <label class="mp-txt-red mp-bld-text uk-text-uppercase uk-text-center">Contacto</label><br>
                                            </div>
                                            <span class="icon-telefono"></span><span class="uk-margin-small-left txt-8em">01800 062 7373</span><br>
                                            <span class="uk-margin-left txt-8em">&nbsp;&nbsp;52 30 7000</span>
                                        </div>
                                        <div class="uk-width-1-2 uk-text-center uk-grid" uk-grid>
                                            <div class="uk-width-1-1">
                                                <label class="mp-txt-red mp-bld-text uk-text-uppercase">Redes</label><br>
                                            </div>
                                            <div class="uk-width-1-3 uk-margin-remove">
                                                <span uk-icon="icon: facebook">
                                            </div>
                                            <div class="uk-width-1-3 uk-margin-remove">
                                                <span uk-icon="icon: twitter">
                                            </div>
                                            <div class="uk-width-1-3 uk-margin-remove">
                                                <span class="icon-yt txt-15em">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <hr class="">
                <div class="uk-grid uk-width-1-2 uk-align-center uk-flex uk-flex-center uk-container" uk-grid>
                    <div class="uk-width-1-4 uk-text-center">
                        <img src="assets/images/buro.png" width="50" alt="logoBuro">
                    </div>
                    <div class="uk-width-1-4 uk-text-center">
                        <img src="assets/images/gptw.png" width="150" alt="greatPlaceLogo">
                    </div>
                    <div class="uk-width-1-4 uk-text-center">
                        <img src="assets/images/esr.png" width="120" alt="logoESR">
                    </div>
                    <div class="uk-width-1-4 uk-text-center">
                        <img src="assets/images/cert.png" width="50" alt="logoCertificacion">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once('template/footer.php')?>
</body>
</html>