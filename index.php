<!DOCTYPE html>
<html lang="es">
<head>
    <title>MAPFRE CONTIGO</title>
    <?php include_once('template/head.php')?>
</head>
<body class="bg-home">
    <?php include_once('template/nav.php'); ?>
    <section class="mp-main-container">
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
            <div class="mp-width-40 uk-margin-large-top mp-pr-10l">
                <div class="uk-width-3-4 mp-bg-white-opacity mp-radius-all uk-align-center">
                    <div class="uk-padding-small">
                        <h3 class="mp-txt-red uk-text-center">¡BIENVENIDO A MAPFRE CONTIGO!</h3>
                        <hr class="uk-divider-small uk-text-center">
                        <p class="txt-6em">Inicia sesión para disfrutar todos los beneficios de ser cliente <span class="mp-txt-red">MAPFRE</span></p>
                        <form>
                            <input class="uk-input uk-form-small mp-radius-all uk-margin-bottom" type="text" placeholder="Correo electrónico">
                            <input class="uk-input uk-form-small mp-radius-all uk-margin-bottom" type="password" placeholder="Contraseña">
                            <input class="uk-checkbox uk-margin-left" type="checkbox"> <span class="txt-6em">&nbsp;Recordar usuario y contraseña </span><br>
                            <a class="txt-6em uk-margin-medium-left mp-txt-gray" href="">Recuperar contraseña</a>
                            <a href="home.php" class="uk-button uk-width-1-2 mp-bld-text uk-button-default uk-margin-top mp-radius-all mp-txt-red mp-border-red uk-align-center" onclick="location.href='home.php'">INICIAR SESIÓN</button>
                            <a class="uk-flex uk-flex-center uk-margin-bottom mp-txt-gray mp-bld-text" href="registro.php">REGISTRATE</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>