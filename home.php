<!DOCTYPE html>
<html lang="es">
<head>
    <title>MAPFRE CONTIGO</title>
    <?php include_once('template/head.php')?>
</head>
<body class="bg-home">
    <?php include_once('template/nav_menu.php'); ?>
    <section class="mp-main-container">
        <div class="uk-width-1-1 uk-flex uk-flex-right uk-margin-xlarge-top">
            <div class="uk-width-1-2">
                <div class="uk-width-4-5 mp-bg-gray-opacity mp-borderradius-br uk-margin-large-left">
                    <div class="">
                        <h1 class="mp-padding-l10 mp-txt-red mp-bld-text">MAPFRE CONTIGO</h1>
                        <p class="mp-txt-white txt-8em mp-padding-head">Podemos atender tus necesidades de aseguramiento en cualquier momento y en cualquier lugar.
                            Tenemos negocio en más de 100 países en los cinco continentes y somos la aseguradora de referencia en el mercado español.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-grid uk-grid-collapse uk-width-1-1 uk-flex-center uk-text-center mp-pos-bottom">
            <div class="uk-width-1-5 uk-margin-right mp-bg-white mp-radius-top">
                <div class="uk-margin-top">
                    <span class="mp-txt-red uk-margin-top"><i class="icon-archivo mp-bld-text mp-font-icon"></i></span>
                    <h4 class="uk-margin-small-top uk-margin-bottom"><a class="mp-txt-red" href="mis_polizas.php">Mis pólizas</a></h4>
                </div>
            </div>
            <div class="uk-width-1-5 uk-margin-right mp-bg-white mp-radius-top">
                <div class="uk-margin-top">
                    <span class="mp-txt-red uk-margin-top"><i class="icon-datospersonales mp-bld-text mp-font-icon"></i></span>
                    <h4 class="uk-margin-small-top uk-margin-bottom"><a class="mp-txt-red" href="">Mis datos</a></h4>
                </div>
            </div>
            <div class="uk-width-1-5 uk-margin-right mp-bg-white mp-radius-top">
                <div class="uk-margin-top">
                    <span class="mp-txt-red uk-margin-top"><i class="icon-warning mp-bld-text mp-font-icon"></i></span>
                    <h4 class="uk-margin-small-top uk-margin-bottom"><a class="mp-txt-red" href="mis_siniestros.php">Mis siniestros</a></h4>
                </div>
            </div>
            <div class="uk-width-1-5 uk-margin-right mp-bg-white mp-radius-top">
                <div class="uk-margin-top">
                    <span class="mp-txt-red uk-margin-top"><i class="icon-costo mp-bld-text mp-font-icon"></i></span>
                    <h4 class="uk-margin-small-top uk-margin-bottom"><a class="mp-txt-red" href="mis_pagos.php">Mis pagos</a></h4>
                </div>
            </div>
        </div>
        <div class="mp-button-help">
            <a href="" class="uk-icon-button mp-txt-white mp-bg-red mp-btn-help-hover icon-atencion"></a>
        </div>
    </section>
    <?php include_once('template/modal.php')?>
</body>
<script>
        UIkit.modal("#codigo").show();
    </script>
</html>