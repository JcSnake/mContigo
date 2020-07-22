<!DOCTYPE html>
<html lang="es" class="mp-bg-white">
<head>
    <title>Error</title>
    <?php include_once('template/head.php')?>
</head>
<body class="mp-bg-white">
    <?php include_once('template/nav_menu.php'); ?>
    <section class="mp-main-container">
        <div class="uk-grid">
            <div class="uk-width-1-2 uk-margin-xlarge-top">
                <div class="uk-width-1-1">
                    <div class="uk-padding-small uk-text-center">
                        <h1 class="mp-txt-gray">Oops!</h1>
                        <p class="txt-12em">
                            La página que buscas no pudo ser encontrada.<br>
                            ¡Lo siento!
                        </p>
                    </div>
                    <div class="uk-width-3-4 uk-align-center">
                        <div class="uk-grid uk-width-1-1" uk-grid>                
                            <div class="uk-width-1-2 uk-text-center">
                                <a href="home.php" class="uk-button mp-txt-red mp-button-red-medium mp-bld-text uk-width-2-3">inicio</a>
                            </div>
                            <div class="uk-width-1-2 uk-text-center">
                                <a href="#" class="uk-button mp-button-transparent mp-bld-text uk-width-1-1">tal vez después</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-2">
                <img src="assets/images/error.png" width="500" alt="error">
            </div>
        </div>
    </section>
</body>
</html>