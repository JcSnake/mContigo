<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mis siniestros</title>
    <?php include_once('template/head.php')?>
</head>
<body class="mp-main-container bg-historial">
    <?php include_once('template/nav_menu.php'); ?>
    <section class="mp-main-container">
        <div class="uk-width-1-1 mp-margin-top-tab">
            <ul class="uk-subnav uk-subnav-pill uk-margin-remove">
                <li class="uk-active uk-margin-medium-left">
                    <a class="mp-encabezados-tab uk-text-center" href=""><span class="txt-15em mp-bld-text uk-container">HISTORIAL DE SINIESTROS</span></a>
                </li>
            </ul>
            <div class="mp-bg-white mp-height-100">
                <div class="uk-container mp-width-14">
                    <ul class="uk-switcher uk-margin">
                        <li class="uk-active">
                            <div class="uk-margin-top uk-flex uk-flex-right uk-width-1-1">
                                <ul class="uk-breadcrumb">
                                    <li class="uk-disabled"><a>Inicio</a></li>
                                    <li class="uk-disabled"><a>Mis siniestros</a></li>
                                    <li><span class="mp-txt-red">Historial de siniestros</span></li>
                                </ul>
                            </div>
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-1-4 uk-flex uk-flex-center">
                                    <div class="uk-button mp-bg-white mp-shadowbox mp-txt-red mp-radius-all uk-width-1-2 mp-bld-text uk-text-capitalize txt-10em">
                                        <button class="uk-button mp-bg-red mp-radius-all mp-txt-white mp-button-icon-sin icon-auto2 mp-padding-0"></button>&nbsp;&nbsp;Autos
                                    </div>
                                </div>
                                <div class="uk-width-1-4 uk-flex uk-flex-center">
                                    <div class="uk-button mp-bg-white mp-txt-red mp-radius-all uk-width-1-2 mp-bld-text uk-text-capitalize txt-10em">
                                        <button class="uk-button mp-bg-red mp-radius-all mp-txt-white mp-button-icon-sin icon-vida mp-padding-0"></button>&nbsp;&nbsp;Vida
                                    </div>
                                </div>
                                <div class="uk-width-1-4 uk-flex uk-flex-center">
                                    <div class="uk-button mp-bg-white mp-txt-red mp-radius-all uk-width-1-1 mp-bld-text uk-text-capitalize txt-10em">
                                        <button class="uk-button mp-bg-red mp-radius-all mp-txt-white mp-button-icon-sin icon-medico mp-padding-0"></button>&nbsp;&nbsp;Accidentes y enfermedades
                                    </div>
                                </div>
                                <div class="uk-width-1-4 uk-flex uk-flex-center">
                                    <div class="uk-button mp-bg-white mp-txt-red mp-radius-all uk-width-1-1 mp-bld-text uk-text-capitalize txt-10em">
                                        <button class="uk-button mp-bg-red mp-radius-all mp-txt-white mp-button-icon-sin icon-flash mp-padding-0"></button>&nbsp;&nbsp;Siniestros
                                    </div>
                                </div>
                            </div>
                            <div class="uk-grid uk-margin-large-top" uk-grid>
                                <div class="uk-width-1-6 uk-text-center uk-margin-top">
                                    <span class="icon-reporte txt-3em"></span><br>
                                    <label class="mp-bld-text">Ajuste</label>
                                </div>
                                <hr class="uk-divider-vertical mp-padding-0 mp-height-150">
                                <div class="uk-width-5-6 uk-grid uk-margin-bottom" uk-grid>
                                    <div class="uk-width-1-1 uk-margin-left">
                                        <img class="uk-margin-right" src="assets/images/simboloverde.svg" width="20" alt="check"><label class="txt-9em">Realizado el 26/08/2015</label>
                                        <hr class="uk-width-5-6 mp-mrg-top-15">
                                    </div>
                                    <div class="uk-width-1-3 uk-margin-large-left uk-margin-remove-top">
                                        <label class="txt-9em">Ajustador: Juan Carlos Quintero</label><br>
                                        <label class="txt-9em">Teléfono: 55 2345 5678</label>
                                    </div>
                                    <div class="uk-width-1-5 uk-margin-remove">
                                        <label class="txt-9em">Grua: Gruas Reyes</label><br>
                                        <label class="txt-9em">Teléfono: 55 2345 5678</label>
                                    </div>
                                    <div class="uk-width-1-5 uk-margin-remove">
                                        <label class="txt-9em"></label><br>
                                        <label class="txt-9em mp-txt-red">Contactar un taller<span uk-icon="icon: chevron-right; ratio: 0.7"></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-right mp-hr-position-25">
                                <hr class="uk-width-5-6">
                            </div>
                            <div class="uk-grid mp-hr-position" uk-grid>
                                <div class="uk-width-1-6 uk-text-center uk-margin-top">
                                    <span class="icon-taller3 txt-3em"></span><br>
                                    <label class="mp-bld-text">Valuación</label>
                                </div>
                                <hr class="uk-divider-vertical mp-padding-0 mp-height-150">
                                <div class="uk-width-5-6 uk-grid uk-margin-medium-top uk-margin-medium-bottom" uk-grid>
                                    <div class="uk-width-1-4 uk-margin-left">
                                        <img class="uk-margin-right" src="assets/images/simboloverde.svg" width="20" alt="check"><label class="mp-bld-text txt-9em">Inicio</label><br>
                                        <div class="mp-mrg-left-27">
                                            <label class="txt-9em">&nbsp;&nbsp;&nbsp;Realizado el 27/08/2018</label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-4 uk-margin-remove">
                                        <img class="uk-margin-right" src="assets/images/simboloverde.svg" width="20" alt="check"><label class="mp-bld-text txt-9em">Fin</label><br>
                                        <div class="mp-mrg-left-27">
                                            <label class="txt-9em">&nbsp;&nbsp;&nbsp;Realizado el 28/08/2018</label>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-4 uk-margin-remove">
                                        <img class="uk-margin-right" src="assets/images/simboloverde.svg" width="20" alt="check"><label class="mp-bld-text txt-9em">Autorizado por MAPFRE</label><br>
                                        <div class="mp-mrg-left-27">
                                            <label class="txt-9em">&nbsp;&nbsp;&nbsp;Realizado el 28/08/2018</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-right mp-hr-position-25 mp-hr-position">
                                <hr class="uk-width-5-6">
                            </div>
                            <div class="uk-grid mp-position-40" uk-grid>
                                <div class="uk-width-1-6 uk-text-center uk-margin-top">
                                    <span class="icon-taller2 txt-3em"></span><br>
                                    <label class="mp-bld-text">Reparación</label>
                                </div>
                                <hr class="uk-divider-vertical mp-padding-0 mp-height-150">
                                <div class="uk-width-5-6 uk-grid uk-margin-medium-top uk-margin-medium-bottom" uk-grid>
                                    <div class="uk-width-1-5 uk-margin-large-left">
                                        <label class="mp-bld-text txt-9em">Automóvil</label><br>
                                        <label class="txt-9em">Seat León</label>
                                    </div>
                                    <div class="uk-width-1-4 uk-margin-medium-left">
                                        <label class="mp-bld-text txt-9em">Día de inicio de la reparación</label><br>
                                        <label class="txt-9em">29/08/2018</label>
                                    </div>
                                    <div class="uk-width-1-4 uk-margin-remove">
                                        <label class="mp-bld-text txt-9em">Día de termino de la reparación</label><br>
                                        <label class="txt-9em">-</label>
                                    </div>
                                    <div class="uk-width-1-6 uk-margin-remove">
                                        <label class="mp-bld-text txt-9em"></label><br>
                                        <label class="txt-6em mp-txt-red">Ver estado de la reparación<span uk-icon="icon: chevron-right; ratio: 0.7"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-right mp-hr-position-25 mp-position-40">
                                <hr class="uk-width-5-6">
                            </div>
                            <div class="uk-grid mp-position-60" uk-grid>
                                <div class="uk-width-1-6 uk-text-center uk-margin-top">
                                    <span class="icon-taller txt-3em"></span><br>
                                    <label class="mp-bld-text">Taller</label>
                                </div>
                                <hr class="uk-divider-vertical mp-padding-0 mp-height-150">
                                <div class="uk-width-5-6 uk-grid uk-margin-medium-top uk-margin-medium-bottom" uk-grid>
                                    <div class="uk-width-1-3 uk-margin-large-left">
                                        <label class="txt-9em">Taller Continental</label><br>
                                        <label class="txt-9em">La Viga, Número 1876, Col. La Viga,</label><br>
                                        <label class="txt-9em">C.P. 04489, 55 4534 7890</label>
                                    </div>
                                    <div class="uk-width-1-6 uk-margin-remove">
                                        <label class="txt-9em"></label><br>
                                        <label class="txt-9em"></label><br>
                                        <label class="txt-9em mp-txt-red">Contactar un taller<span uk-icon="icon: chevron-right; ratio: 0.7"></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-right mp-hr-position-25 mp-position-60">
                                <hr class="uk-width-5-6">
                            </div>
                            <div class="uk-grid mp-hr-position mp-position-83" uk-grid>
                                <div class="uk-width-1-6 uk-text-center uk-margin-top">
                                    <span class="icon-auto1 txt-3em mp-txt-navy-gray"></span><br>
                                    <label class="mp-bld-text mp-txt-navy-gray">Entrega</label>
                                </div>
                                <hr class="uk-divider-vertical mp-padding-0 mp-height-150">
                                <div class="uk-width-5-6 uk-grid uk-margin-medium-top uk-margin-medium-bottom" uk-grid>
                                    <div class="uk-width-1-1 uk-margin-large-left">
                                        <label class="mp-bld-text">Fecha compromiso</label><br>
                                        <label>20/09/2018</label><br>
                                    </div>
                                </div>
                            </div>            
                        </li>
                    </ul>
                </div>
                <hr class="uk-width-1-1">
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
    <?php include_once('template/footer.php'); ?>
</body>
</html>