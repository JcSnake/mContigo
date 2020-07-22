<!DOCTYPE html>
<html lang="es">
<head>
    <title>Datos Bancarios</title>
    <?php include_once('template/head.php')?>
</head>
<body class="mp-main-container bg-servicios">
    <?php include_once('template/nav_menu.php'); ?>
    <section class="mp-main-container">
        <div class="uk-width-1-1 mp-margin-top-tab">
            <ul class="uk-subnav uk-subnav-pill uk-margin-remove">
                <li class="uk-active uk-margin-medium-left">
                    <a class="mp-encabezados-tab uk-text-center" href=""><span class="txt-15em mp-bld-text uk-container">MIS SERVICIOS</span></a>
                </li>
            </ul>
            <div class="mp-bg-white mp-height-100">
                <div class="uk-container">
                    <ul class="uk-switcher uk-margin">
                        <li class="uk-active">
                            <div class="uk-margin-top uk-flex uk-flex-right uk-width-1-1">
                                <ul class="uk-breadcrumb">
                                    <li class="uk-disabled"><a>Inicio</a></li>
                                    <li><span class="mp-txt-red">Mis inversiones</span></li>
                                </ul>
                            </div>
                            <div class="">
                                <button class="uk-button mp-bg-red mp-radius-all mp-txt-white mp-button-icon-sin icon-parabrisas mp-padding-0 uk-margin-right"></button><span class="mp-txt-red mp-bld-text">Cristaleras</span>
                                <hr>
                            </div>
                            <div class="uk-width-1-1 uk-grid uk-margin-bottom" uk-grid>
                                <div class="uk-width-1-4">
                                    <div class="uk-width-1-1 mp-bg-red mp-radius-all-5 uk-text-center">
                                        <div class="mp-padding-5">
                                            <span class="mp-txt-white" uk-icon="icon: settings"></span><span class="uk-margin-left mp-txt-white mp-bld-text txt-8em">FILTROS</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-margin-small-top mp-shadowbox mp-radius-all uk-text-center">
                                        <div class="uk-padding-small uk-text-left">
                                            <label class="txt-8em">BUSCAR POR:</label>
                                        </div>
                                        <div class="uk-margin-bottom">
                                            <select class="uk-select uk-width-5-6 mp-button-red-small txt-8em" name="estado" id="estado">
                                                <option class="uk-margin-small-left" value="0">Estado</option>
                                            </select>
                                        </div>
                                        <div class="uk-margin-bottom">
                                            <select class="uk-select uk-width-5-6 mp-button-red-small txt-8em" name="Ciudad" id="Ciudad">
                                                <option class="uk-margin-small-left" value="0">Ciudad</option>
                                            </select>
                                        </div>
                                        <div class="uk-margin-bottom">
                                            <select class="uk-select uk-width-5-6 mp-button-red-small txt-8em" name="Delegacion" id="Delegacion">
                                                <option class="uk-margin-small-left" value="0">Delegación</option>
                                            </select>
                                        </div>
                                        <div class="uk-margin-bottom">
                                            <select class="uk-select uk-width-5-6 mp-button-red-small txt-8em" name="Distancia" id="Distancia">
                                                <option class="uk-margin-small-left" value="0">Distancia</option>
                                            </select>
                                        </div>
                                        <div class="uk-margin-small-top uk-text-left uk-margin-left txt-8em">
                                            <input class="uk-radio uk-margin-small-right" type="radio">Mostrar mapa
                                        </div>
                                        <div class="uk-margin-small-top uk-text-left uk-margin-left txt-8em">
                                            <input class="uk-radio uk-margin-small-right" type="radio">Abierto Ahora
                                        </div>
                                        <div>
                                            &nbsp;
                                        </div>
                                    </div>
                                    <div class="uk-margin-top uk-width-1-2">
                                        <button class="uk-button mp-button-bg-red uk-width-1-1 txt-6em uk-text-capitalize mp-lh-20">Borrar filtros</button>
                                    </div>
                                </div>
                                <div class="uk-width-3-4">
                                    <div class="uk-margin uk-width-1-1">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon mp-txt-red" uk-icon="icon: search"></span>
                                            <input class="uk-input mp-button-red-small" type="text" placeholder="Buscar">
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <span class="icon-premio mp-txt-red txt-11em uk-margin-small-right"></span><label class="mp-bld-text">Embajadores de marca sugeridos</label>
                                        <hr>
                                    </div>
                                    <div class="uk-width-2-3">
                                        <label class="mp-bld-text">Taller Continental, La Viga</label><span class="icon-premio mp-txt-red txt-11em mp-mrg-left-350"></span>
                                        <p class="uk-margin-small-bottom">
                                            Dirección: Tuxpan No. 25 Col. Viga, La Viga, C.P. 04480, A. Madero, Distrito Federal.<br>
                                            Horarios: Lunes a Viernes de 10:00 am a 6:00 pm / Sábados de 10:00 am a 3:00 pm<br>
                                            Teléfono: 56 55 54 53 <br>
                                            <span class="mp-txt-red txt-75em">A 300 Metros de tu ubicación</span><br>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="txt-75em">(76)</span>
                                        </p>
                                        <span class="txt-75em uk-margin-small-top">Ocultar mapa</span><span class="uk-margin-small-left" uk-icon="icon: chevron-up; ratio:0.7"></span>
                                        <div class="uk-width-1-1 uk-margin-small-top">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.6077545357075!2d-99.12461088561862!3d19.386129647189634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce01a249358f95%3A0xf65c4cee5b79209!2sCalz.+de+la+Viga%2C+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses!2smx!4v1562615381773!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                        <div class="uk-width-1-1 uk-margin-top">
                                            <label class="mp-txt-red txt-8em">Comentarios </label><span class="mp-txt-red" uk-icon="icon: chevron-up"></span>
                                            <hr>
                                        </div>
                                        <div class="uk-width-1-1">
                                            <label class="mp-txt-red txt-8em">Califica este servicio: </label>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="uk-width-1-1 uk-margin-top">
                                            <div class="uk-inline uk-width-1-1">
                                                <textarea class="uk-textarea mp-border-gray" name="comentarios" id="comentarios" cols="30" rows="4" placeholder="Agrega un comentario"></textarea>
                                            </div>
                                            <div class="uk-margin-top uk-flex uk-flex-right uk-width-1-1">
                                                <button class="uk-button mp-button-bg-red txt-6em uk-text-capitalize mp-lh-20">Enviar</button>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1">
                                            <label class="mp-bld-text uk-margin-right">1. Guillermo Nuñez 12/02/2016</label>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <p>
                                                Dynamically target professional markets via parallel functionalities. 
                                                Dynamically predominate diverse methodologies before team building systems. 
                                                Efficiently redefine enterprise-wide meta-services via frictionless ideas. 
                                                Compellingly build maintainable collaboration and idea-sharing whereas 2.0 action items.
                                            </p>
                                            <hr>
                                        </div>
                                        <div class="uk-width-1-1">
                                            <label class="mp-bld-text uk-margin-right">2. María Nuñez 12/02/2016</label>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <p>
                                                Dynamically target professional markets via parallel functionalities. 
                                                Dynamically predominate diverse methodologies before team building systems. 
                                                Efficiently redefine enterprise-wide meta-services via
                                            </p>
                                            <hr>
                                        </div>
                                        <div class="uk-width-1-1">
                                            <label class="mp-bld-text uk-margin-right">3. Guillermo Nuñez 12/02/2016</label>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <p>
                                                Dynamically target professional markets via parallel functionalities. 
                                                Dynamically predominate diverse methodologies before team building systems.
                                            </p>
                                            <hr>
                                        </div>
                                        <div class="uk-width-1-1">
                                            <label class="mp-bld-text uk-margin-right">4. María Nuñez 12/02/2016</label>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <p>
                                                Dynamically target professional markets via parallel functionalities. 
                                                Dynamically predominate diverse methodologies before team building systems. 
                                                Efficiently redefine enterprise-wide meta-services via frictionless ideas. 
                                                Compellingly build maintainable collaboration and idea-sharing whereas 2.0 action items.
                                            </p>
                                            <hr>
                                        </div>
                                        <div class="uk-width-1-1">
                                            <label class="mp-bld-text uk-margin-right">5. Guillermo Nuñez 12/02/2016</label>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <p>
                                                Dynamically target professional markets via parallel functionalities. 
                                                Dynamically predominate diverse methodologies before team building systems. 
                                                Efficiently redefine enterprise-wide meta-services via frictionless ideas. 
                                                Compellingly build maintainable collaboration and idea-sharing whereas 2.0 action items.
                                            </p>
                                        </div>
                                        <div class="uk-width-1-1 uk-margin-xlarge-top">
                                            <label class="mp-bld-text">Taller Continental, Asturias</label><span class="icon-premio mp-txt-red txt-11em mp-mrg-left-350"></span>
                                            <p>
                                                Dirección: Tuxpan No. 25 Col. Viga, La Viga, C.P. 04480, A. Madero, Distrito Federal.<br>
                                                Horarios: Lunes a Viernes de 10:00 am a 6:00 pm / Sábados de 10:00 am a 3:00 pm<br>
                                                Teléfono: 56 55 54 53 <br>
                                                <span class="mp-txt-red txt-75em">A 300 Metros de tu ubicación</span><br>
                                            </p>
                                            <span class="mp-txt-red txt-8em uk-margin-right">Ver mapa</span><span class="mp-txt-red" uk-icon="icon: chevron-down"></span><br>
                                            <span class="mp-txt-red txt-8em uk-margin-right">Comentarios</span><span class="mp-txt-red" uk-icon="icon: chevron-down"></span>
                                        </div>
                                        <hr>
                                        <div class="uk-width-1-1 uk-margin-top">
                                            <label class="mp-bld-text">Taller Continental, Asturias</label><span class="icon-premio mp-txt-red txt-11em mp-mrg-left-350"></span>
                                            <p>
                                                Dirección: Tuxpan No. 25 Col. Viga, La Viga, C.P. 04480, A. Madero, Distrito Federal.<br>
                                                Horarios: Lunes a Viernes de 10:00 am a 6:00 pm / Sábados de 10:00 am a 3:00 pm<br>
                                                Teléfono: 56 55 54 53 <br>
                                                <span class="mp-txt-red txt-75em">A 300 Metros de tu ubicación</span><br>
                                            </p>
                                            <span class="mp-txt-red txt-8em uk-margin-right">Ver mapa</span><span class="mp-txt-red" uk-icon="icon: chevron-down"></span><br>
                                            <span class="mp-txt-red txt-8em uk-margin-right">Comentarios</span><span class="mp-txt-red" uk-icon="icon: chevron-down"></span>
                                        </div>
                                        <hr>
                                        <div class="uk-width-1-1 uk-margin-top">
                                            <label class="mp-bld-text">Taller Continental, Los Reyes</label><span class="icon-premio mp-txt-red txt-11em mp-mrg-left-350"></span>
                                            <p>
                                                Dirección: Tuxpan No. 25 Col. Viga, La Viga, C.P. 04480, A. Madero, Distrito Federal.<br>
                                                Horarios: Lunes a Viernes de 10:00 am a 6:00 pm / Sábados de 10:00 am a 3:00 pm<br>
                                                Teléfono: 56 55 54 53 <br>
                                                <span class="mp-txt-red txt-75em">A 300 Metros de tu ubicación</span><br>
                                            </p>
                                            <span class="mp-txt-red txt-8em uk-margin-right">Ver mapa</span><span class="mp-txt-red" uk-icon="icon: chevron-down"></span><br>
                                            <span class="mp-txt-red txt-8em uk-margin-right">Comentarios</span><span class="mp-txt-red" uk-icon="icon: chevron-down"></span>
                                        </div>
                                        <div class="uk-width-1-1 uk-margin-xlarge-top">
                                            <div class="uk-margin-top">
                                                <label class="mp-bld-text">Sugerencias</label>
                                            </div>
                                            <hr>
                                            <label class="mp-bld-text">Taller Continental, Asturias</label>
                                            <p>
                                                Dirección: Tuxpan No. 25 Col. Viga, La Viga, C.P. 04480, A. Madero, Distrito Federal.<br>
                                                Horarios: Lunes a Viernes de 10:00 am a 6:00 pm / Sábados de 10:00 am a 3:00 pm<br>
                                                Teléfono: 56 55 54 53 <br>
                                                <span class="mp-txt-red txt-75em">A 300 Metros de tu ubicación</span><br>
                                            </p>
                                            <span class="mp-txt-red txt-8em uk-margin-right">Ver mapa</span><span class="mp-txt-red" uk-icon="icon: chevron-down"></span><br>
                                            <span class="mp-txt-red txt-8em uk-margin-right">Comentarios</span><span class="mp-txt-red" uk-icon="icon: chevron-down"></span>
                                        </div>
                                        <hr>
                                        <div class="uk-width-1-1 uk-margin-top">
                                            <label class="mp-bld-text">Taller Continental, Asturias</label>
                                            <p>
                                                Dirección: Tuxpan No. 25 Col. Viga, La Viga, C.P. 04480, A. Madero, Distrito Federal.<br>
                                                Horarios: Lunes a Viernes de 10:00 am a 6:00 pm / Sábados de 10:00 am a 3:00 pm<br>
                                                Teléfono: 56 55 54 53 <br>
                                                <span class="mp-txt-red txt-75em">A 300 Metros de tu ubicación</span><br>
                                            </p>
                                            <span class="mp-txt-red txt-8em uk-margin-right">Ver mapa</span><span class="mp-txt-red" uk-icon="icon: chevron-down"></span><br>
                                            <span class="mp-txt-red txt-8em uk-margin-right">Comentarios</span><span class="mp-txt-red" uk-icon="icon: chevron-down"></span>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <hr class="uk-margin-xlarge-top">
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