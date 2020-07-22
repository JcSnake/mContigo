<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mis Pagos</title>
    <?php include_once('template/head.php')?>
</head>
<body class="mp-main-container bg-pagos">
    <?php include_once('template/nav_menu.php'); ?>
    <section class="mp-main-container">
        <div class="uk-width-1-1 mp-margin-top-tab">
            <ul class="uk-subnav uk-subnav-pill uk-margin-remove">
                <li class="uk-active uk-margin-medium-left">
                    <a class="mp-encabezados-tab uk-text-center" href=""><span class="txt-15em mp-bld-text uk-container">MIS PAGOS</span></a>
                </li>
            </ul>
            <div class="mp-bg-white mp-height-100">
                <div class="uk-container">
                    <ul class="uk-switcher uk-margin">
                        <li class="uk-active">
                            <div class="uk-margin-top uk-flex uk-flex-right uk-width-1-1">
                                <ul class="uk-breadcrumb">
                                    <li class="uk-disabled"><a>Inicio</a></li>
                                    <li><span class="mp-txt-red">Mis pagos</span></li>
                                </ul>
                            </div>
                            <div class="mp-bg-navy-gray mp-radius-all uk-width-1-1">
                                <div class="uk-margin-left uk-padding-small">
                                    <div class="uk-margin-small-bottom">
                                        <label class="mp-txt-red mp-bld-text">AVISO</label>
                                    </div>
                                    <p class="uk-margin-remove">
                                        Tu póliza de Autos en 3 días. Recuerda que es mejor renovarla con tiempo para seguir contando con la
                                        tranquilidad de que todo estará bien ante cualquier imprevisto.
                                    </p>
                                    <span class="mp-txt-red txt-9em">
                                        Contactar a mi agente <span class="mp-txt-red" uk-icon="icon: chevron-right"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="uk-margin-top">
                                <label class="mp-bld-text txt-9em">Selecciona tu producto</label><br>
                                <select class="uk-select uk-form-small mp-radius-all uk-margin-small-top uk-width-1-4" name="producto" id="producto">
                                    <option value="0">Todos</option>
                                    <option value="1">Autos</option>
                                    <option value="2">Vida</option>
                                </select>
                            </div>
                            <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                <label class="txt-9em">Pagos correspondientes a tu póliza de Autos</label>
                            </div>
                            <div class="uk-grid uk-width-1-1" uk-grid>
                                <div class="uk-width-5-6 uk-margin-small-top">
                                    <div class="uk-width-1-1">
                                        <label class="mp-txt-red txt-9em">17 de Septiembre de 2018</label>
                                    </div>
                                    <div class="uk-width-1-1 uk-margin-small-top">
                                        <label class="mp-bld-text txt-9em">Ingreso a taller</label>
                                    </div>
                                    <div class="uk-width-1-1 uk-margin-small-top">
                                        <img src="assets/images/pagopendiente.svg" alt="pendiente">
                                        <label class="uk-margin-left txt-9em">Pago Pendiente ($500.00)</label>
                                    </div>
                                </div>
                                <div class="uk-width-1-6 uk-divider-vertical uk-text-center">
                                    <button class="uk-button mp-button-bg-red txt-75em uk-text-capitalize uk-width-1-2 uk-margin-bottom mp-lh-20 uk-text-center mp-padding-0">Pagar</button><br>
                                    <label class="mp-bld-txt txt-8em uk-text-center mp-bld-text">Generar ficha referenciada</label>
                                </div>
                            </div>
                            <hr>
                            <div class="uk-grid uk-width-1-1" uk-grid>
                                <div class="uk-width-5-6 uk-margin-small-top">
                                    <div class="uk-width-1-1">
                                        <label class="mp-txt-red txt-9em">10 de Septiembre de 2018</label>
                                    </div>
                                    <div class="uk-width-1-1 uk-margin-small-top">
                                        <label class="mp-bld-text txt-9em">Renovación de tu póliza de Autos</label>
                                    </div>
                                    <div class="uk-width-1-1 uk-margin-small-top uk-grid" uk-grid>
                                        <div class="uk-margin-small-top">
                                            <img src="assets/images/pagorealizado.svg" alt="realizado">
                                        </div>
                                        <div class="uk-padding-remove">
                                            <label class="uk-margin-left txt-9em">Pago Pendiente ($500.00)</label><br>
                                            <label class="uk-margin-left txt-9em">Visa Débito Bancomer ternonada en 5678</label>
                                        </div>
                                        <div class="uk-width-1-4 uk-text-right">
                                            <label class="uk-margin-left mp-bld-text txt-9em">Número de póliza</label><br>
                                            <label class="uk-margin-left txt-9em">1782375747848</label>
                                        </div>
                                        <div class="uk-width-1-4 uk-text-right">
                                            <label class="uk-margin-left mp-bld-text txt-9em">Renovación automática</label><br>
                                            <div class="onoffswitch mp-height-10 mp-position-7 uk-text-center mp-position-50l">
                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch3">
                                                <label class="onoffswitch-label" for="myonoffswitch3"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-1-6 uk-divider-vertical uk-grid uk-grid-collapse uk-padding-remove" uk-grid>
                                    <div class="uk-width-1-2 uk-text-center mp-position-25 uk-align-center">
                                        <span class="icon-pdf mp-font-icon"></span><br>
                                        <label class="txt-8em">Ver Factura</label>
                                    </div>
                                    <div class="uk-width-1-2 uk-text-center mp-position-25">
                                        <span class="icon-pdf mp-font-icon"></span><br>
                                        <label class="txt-8em">Ver Factura</label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="uk-grid uk-width-1-1" uk-grid>
                                <div class="uk-width-5-6 uk-margin-small-top">
                                    <div class="uk-width-1-1">
                                        <label class="mp-txt-red txt-9em">17 de Septiembre de 2018</label>
                                    </div>
                                    <div class="uk-width-1-1 uk-margin-small-top">
                                        <label class="mp-bld-text txt-9em">Ingreso a taller</label>
                                    </div>
                                    <div class="uk-width-1-1 uk-margin-small-top">
                                        <img src="assets/images/pagopendiente.svg" alt="pendiente">
                                        <label class="uk-margin-left txt-9em">Pago Pendiente ($500.00)</label>
                                    </div>
                                </div>
                                <div class="uk-width-1-6 uk-divider-vertical uk-text-center">
                                    <button class="uk-button mp-button-bg-red txt-75em uk-text-capitalize uk-width-1-2 uk-margin-bottom mp-lh-20 uk-text-center mp-padding-0">Pagar</button><br>
                                    <label class="mp-bld-txt txt-8em uk-text-center mp-bld-text">Generar ficha referenciada</label>
                                </div>
                            </div>
                            <hr>
                            <div class="uk-grid uk-width-1-2 uk-align-center uk-flex uk-flex-center uk-container uk-margin-medium-bottom" uk-grid>
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
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>    
    <?php include_once('template/footer.php'); ?>
</body>
</html>