<!DOCTYPE html>
<html lang="es">
<head>
    <title>MAPFRE CONTIGO</title>
    <?php include_once('template/head.php')?>
</head>
<body class="bg-registro">
    <?php include_once('template/nav.php'); ?>
    <section class="mp-main-container uk-padding-small">
        <div class="uk-grid">
            <div class="uk-width-1-2 uk-margin-xlarge-top">
                <div class="uk-width-4-5 mp-bg-gray-opacity mp-borderradius-br uk-align-center uk-margin-large-top">
                    <div class="">
                        <h1 class="mp-padding-l10 mp-txt-red mp-bld-text">MAPFRE CONTIGO</h1>
                        <p class="mp-txt-white txt-8em mp-padding-head">Podemos atender tus necesidades de aseguramiento en cualquier momento y en cualquier lugar.
                            Tenemos negocio en más de 100 países en los cinco continentes y somos la aseguradora de referencia en el mercado español.
                        </p>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-2 uk-margin-small-top">
                <div class="uk-width-3-4 mp-bg-white-opacity mp-radius-all uk-align-center uk-padding-small uk-padding-remove-bottom">
                    <div class="uk-padding-small">
                        <h3 class="mp-txt-red uk-text-center">¡BIENVENIDO A MAPFRE CONTIGO!</h3>
                        <hr class="uk-divider-small uk-text-center">
                        <p class="txt-6em uk-text-center">Registrate para disfrutar todos los beneficios de ser cliente <span class="mp-txt-red">MAPFRE</span></p>
                        <form>
                            <input class="uk-input uk-form-small mp-radius-all" type="text" placeholder="Correo electrónico">
                            <p class="txt-6em uk-margin-remove-bottom uk-margin-small-top">Selecciona una opción</p>
                            <div class="uk-grid">
                                <div class="uk-width-1-2">
                                    <input class="uk-radio txt-6em mp-border-red" type="radio" name="opcion"><span class="txt-6em">&nbsp;&nbsp;&nbsp;RFC (con homoclave)</span>
                                </div>
                                <div class="uk-width-1-2">
                                    <input class="uk-radio txt-6em mp-border-red" type="radio" name="opcion"><span class="txt-6em">&nbsp;&nbsp;&nbsp;Número de póliza</span>
                                </div>
                            </div>
                            <input class="uk-input uk-form-small mp-radius-all uk-margin-bottom" type="text" placeholder="Número de póliza">
                            <input class="uk-input uk-form-small mp-radius-all uk-margin-bottom" type="password" placeholder="Contraseña (mínimo 8 caracteres)">
                            <input class="uk-input uk-form-small mp-radius-all uk-margin-bottom" type="password" placeholder="Confirmar Contraseña">
                            <input class="uk-radio txt-6em mp-border-red" type="radio" name="terminos"><span class="txt-6em">&nbsp;&nbsp;&nbsp;He leído y acepto la </span> <span class="txt-6em mp-txt-red">Política de Privacidad</span>
                            <a href="#" class="uk-button uk-button-default mp-width-4-10 uk-margin-top mp-radius-all mp-txt-red mp-border-red uk-align-center mp-bld-text uk-text-center">registrarme</a>
                            <a href="index.php" class="uk-flex uk-flex-center uk-margin-bottom mp-txt-gray mp-bld-text">INICIAR SESIÓN</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>