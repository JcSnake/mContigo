<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mis Datos</title>
    <?php include_once('template/head.php')?>
</head>
<body class="bg-infopersonal mp-container">
    <?php include_once('template/nav_menu.php'); ?>
    <section class="mp-main-container">
        <div class="uk-width-1-1 mp-margin-top-tab">
            <ul class="uk-subnav uk-subnav-pill uk-margin-remove">
                <li class="uk-active uk-margin-medium-left">
                    <a class="mp-encabezados-tab uk-text-center" href=""><span class="txt-17em mp-bld-text uk-container">INFORMACIÓN PERSONAL</span></a>
                </li>
            </ul>
            <div class="mp-bg-white mp-height-100">
                <div class="uk-container">
                    <ul class="uk-switcher uk-margin">
                        <li class="uk-active">
                            <div class="uk-margin-top uk-flex uk-flex-right uk-width-1-1">
                                <ul class="uk-breadcrumb">
                                    <li class="uk-disabled"><a>Inicio</a></li>
                                    <li class="uk-disabled"><a>Mis datos</a></li>
                                    <li><span class="mp-txt-red">Información personal</span></li>
                                </ul>
                            </div>
                            <div class="mp-bg-navy-gray mp-radius-all mp-width-4-10">
                                <div class="uk-text-center">
                                    <label class="mp-txt-red txt-9em">¡Compártenos tus datos de interés para que tu perfil esté completo!</label>
                                </div>
                            </div>
                            <div class="uk-grid uk-grid-divider uk-margin-medium-top" uk-grid>
                                <div class="uk-width-1-3 uk-grid" uk-grid>
                                    <div class="uk-width-1-3 uk-text-center">
                                        <img src="assets/images/perfil_photo.png" width="100" alt="subirFoto">
                                        <label class="txt-6em">Subir foto</label>
                                    </div>
                                    <div class="uk-width-2-3">
                                        <label class="mp-txt-red txt-9em mp-bld-text">Juan Carlos Cárdenas Pérez</label><span class="icon-edit uk-margin-small-left"></span>
                                        <label class="txt-8em">jc.cp@correo.com</label>
                                    </div>
                                </div>
                                <div class="uk-width-2-3 uk-grid uk-margin-remove" uk-grid>
                                    <div class="uk-width-1-4 uk-padding-remove uk-grid" uk-grid>
                                        <div class="uk-width-1-2">
                                            <button id="hombre" type="button" class="mp-button-genero-active">
                                                <span class="icon-hombre mp-font-icon"></span><br><br>
                                                <label class="txt-12em uk-margin-large-top">Hombre</label>
                                            </button>
                                        </div>
                                        <div class="uk-width-1-2">
                                            <button id="mujer" type="button" class="mp-button-genero">
                                                <span class="icon-mujer mp-font-icon"></span><br><br>
                                                <label class="txt-12em">Mujer</label>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="uk-width-3-4 uk-grid uk-container uk-margin-left mp-mrg-top-5" uk-grid>
                                        <div class="uk-width-1-4 uk-text-center">
                                            <span class="mp-txt-gray icon-id mp-font-icon"></span><br>
                                            <label class="txt-91em">Mi dirección</label><br>
                                            <a class="uk-margin-small-top uk-icon-button mp-button-green-medium mp-txt-green mp-button-icon-medium" uk-icon="icon: check"></a>
                                        </div>
                                        <div class="uk-width-1-4 uk-text-center">
                                            <span class="mp-txt-gray icon-tarjeta2 mp-font-icon"></span><br>
                                            <label class="txt-91em">Datos bancarios</label><br>
                                            <a class="uk-margin-small-top uk-icon-button mp-button-green-medium mp-txt-green mp-button-icon-medium" uk-icon="icon: check"></a>
                                        </div>
                                        <div class="uk-width-1-4 uk-text-center">
                                            <span class="mp-txt-gray icon-usuario mp-font-icon"></span><br>
                                            <label class="txt-91em">Mi agente</label><br>
                                            <a class="uk-margin-small-top uk-icon-button mp-button-green-medium mp-txt-green mp-button-icon-medium" uk-icon="icon: check"></a>
                                        </div>
                                        <div class="uk-width-1-4 uk-text-center">
                                            <span class="mp-txt-navy-gray icon-categoria mp-font-icon"></span><br>
                                            <label class="txt-91em">Datos de interés</label><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-margin-medium-top">
                                <form class="uk-width-1-1 uk-margin-medium-bottom">
                                    <div class="uk-grid" uk-grid>
                                        <div class="uk-width-1-1">
                                            <label class="txt-1em mp-txt-red mp-bld-text">Mi Dirección</label>
                                        </div>
                                        <div class="uk-width-1-2 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Calle y Número</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="text" name="calleNum" id="calleNum" placeholder="Av. Centenario, Número 123, Interior 4">
                                        </div>
                                        <div class="uk-width-1-2 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Colonia</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="text" name="colonia" id="colonia" placeholder="Merced Gómez">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Código Postal</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="number" name="codigoP" id="codigoP" placeholder="01600">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Estado</label>
                                            <select class="uk-select mp-radius-all uk-form-small" name="estado" id="estado">
                                                <option value="0">Ciudad de México</option>
                                            </select>
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Delegación</label>
                                            <select class="uk-select mp-radius-all uk-form-small" name="delegacion" id="delegacion">
                                                <option value="0">Álvaro Obregón</option>
                                            </select>
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">RFC</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="text" name="rfc" id="rfc" placeholder="AARM850524V89">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Teléfono móvil</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="number" name="telMovil" id="telMovil" placeholder="(044) 551122 - 3344">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Teléfono fijo</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="number" name="telMovil" id="telMovil" placeholder="(55) 5634-3536">
                                        </div>
                                    </div>
                                    <div class="uk-grid uk-margin-large-top" uk-grid>
                                        <div class="uk-width-1-1">
                                            <label class="txt-1em mp-txt-red mp-bld-text">Mis Beneficiarios</label>
                                        </div>
                                        <div class="uk-width-1-1 uk-margin-small-top">
                                            <label class="txt-1em mp-bld-text">BENEFICIARIO <sub>1</sub></label>
                                            <hr>
                                        </div>
                                        <div class="uk-width-1-2 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Calle y Número</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="text" name="calleNum" id="calleNum" placeholder="Av. Centenario, Número 123, Interior 4">
                                        </div>
                                        <div class="uk-width-1-2 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Colonia</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="text" name="colonia" id="colonia" placeholder="Merced Gómez">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Código Postal</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="number" name="codigoP" id="codigoP" placeholder="01600">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Estado</label>
                                            <select class="uk-select mp-radius-all uk-form-small" name="estado" id="estado">
                                                <option value="0">Ciudad de México</option>
                                            </select>
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Delegación</label>
                                            <select class="uk-select mp-radius-all uk-form-small" name="delegacion" id="delegacion">
                                                <option value="0">Álvaro Obregón</option>
                                            </select>
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">RFC</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="text" name="rfc" id="rfc" placeholder="AARM850524V89">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Teléfono móvil</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="number" name="telMovil" id="telMovil" placeholder="(044) 551122 - 3344">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Teléfono fijo</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="number" name="telMovil" id="telMovil" placeholder="(55) 5634-3536">
                                        </div>
                                        <div class="uk-width-1-1 uk-margin-medium-top">
                                            <label class="txt-1em mp-bld-text">BENEFICIARIO <sub>2</sub></label>
                                            <hr>
                                        </div>
                                        <div class="uk-width-1-2 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Calle y Número</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="text" name="calleNum" id="calleNum" placeholder="Av. Centenario, Número 123, Interior 4">
                                        </div>
                                        <div class="uk-width-1-2 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Colonia</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="text" name="colonia" id="colonia" placeholder="Merced Gómez">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Código Postal</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="number" name="codigoP" id="codigoP" placeholder="01600">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Estado</label>
                                            <select class="uk-select mp-radius-all uk-form-small" name="estado" id="estado">
                                                <option value="0">Ciudad de México</option>
                                            </select>
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Delegación</label>
                                            <select class="uk-select mp-radius-all uk-form-small" name="delegacion" id="delegacion">
                                                <option value="0">Álvaro Obregón</option>
                                            </select>
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">RFC</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="text" name="rfc" id="rfc" placeholder="AARM850524V89">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Teléfono móvil</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="number" name="telMovil" id="telMovil" placeholder="(044) 551122 - 3344">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Teléfono fijo</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="number" name="telMovil" id="telMovil" placeholder="(55) 5634-3536">
                                        </div>
                                        <div class="uk-width-1-1">
                                            <a class="uk-icon-button mp-button-red-small mp-txt-red mp-button-icon-small uk-text-center" uk-icon="icon: plus; ratio: 0.5"></a>
                                            <label class="mp-txt-red mp-bld-text">Nuevo beneficiario</label>
                                        </div>
                                        <div class="uk-width-1-2 uk-flex uk-flex-right">
                                            <button class="uk-button mp-txt-red mp-button-red-medium mp-bld-text uk-width-1-3">Guardar</button>
                                        </div>
                                        <div class="uk-width-1-2 uk-flex uk-flex-left">
                                            <button class="uk-button mp-button-transparent mp-bld-text">Cancelar</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="uk-grid" uk-grid>
                                        <div class="uk-width-1-1">
                                            <label class="txt-1em mp-txt-red mp-bld-text">Cambiar Contraseña</label>
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Constraseña actual</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="password" name="contrasenia" id="contrasenia" value="123456789">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Contraseña Nueva</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="password" name="newContrasenia" id="newContrasenia" value="123456789">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Confirmar Contraseña Nueva</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="password" name="confContrasenia" id="confContrasenia" value="123456789">
                                        </div>
                                        <div class="uk-width-1-2 uk-flex uk-flex-right">
                                            <button class="uk-button mp-txt-red mp-button-red-medium mp-bld-text">CAMBIAR CONTRASEÑA</button>
                                        </div>
                                        <div class="uk-width-1-2 uk-flex uk-flex-left">
                                            <button class="uk-button mp-button-transparent mp-bld-text">CANCELAR</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div id="condicion1" class="uk-grid" uk-grid>
                                        <div class="uk-width-1-1">
                                            <label class="txt-1em mp-txt-red mp-bld-text">Datos de interés</label>
                                        </div>
                                        <div class="uk-width-2-3 uk-flex uk-align-center uk-margin-small-top mp-bg-fc mp-radius-all mp-shadowbox">
                                            <div class="uk-padding-small uk-grid">
                                                <p>
                                                    Con el fin de ofrecerte un mejor servicio, MAPFRE solicita tu permiso para recabar la siguiente información. 
                                                    ¿Estás de acuerdo en brindar a Mapfre la información solicitada?
                                                </p>
                                                <div class="uk-width-1-2 uk-flex uk-flex-right uk-margin-medium-top">
                                                    <button id="acuerdo" type="button" class="uk-button mp-txt-red mp-button-red-medium mp-bld-text">SÍ, ESTOY DE ACUERDO</button>
                                                </div>
                                                <div class="uk-width-1-2 uk-flex uk-flex-left uk-margin-medium-top">
                                                    <button type="button" class="uk-button mp-button-transparent mp-bld-text">NO ESTOY DE ACUERDO</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="contenido" class="uk-grid uk-margin-small-top" uk-grid style="display: none;">
                                        <div class="uk-width-1-1">
                                            <label class="txt-1em mp-txt-red mp-bld-text">Datos de interés</label><br>
                                            <span class="txt-9em">La siguiente información nos ayudará a encontrar un paquete de seguros a tu medida</span><br><br>
                                            <span class="mp-txt-red txt-9em">Edad y talla</span>
                                        </div>
                                        <div class="uk-grid uk-width-1-1" uk-grid>
                                            <div class="uk-width-1-4">
                                                <label class="txt-9em">Edad:</label><br>
                                                <img src="assets/images/edad.svg" alt="">
                                            </div>
                                            <div class="uk-width-1-4">
                                                <label class="txt-9em">Peso(kg):</label><br>
                                                <img src="assets/images/altura.svg" alt="">
                                            </div>
                                            <div class="uk-width-1-4">
                                                <label class="txt-9em">Altura(cm):</label><br>
                                                <img src="assets/images/cantidad2.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1 uk-grid" uk-grid>
                                            <div class="uk-width-1-1">
                                                <span class="mp-txt-red txt-9em">Hábitos</span>
                                            </div>
                                            <div class="uk-width-1-4 uk-text-center">
                                                <label class="icon-fumar mp-font-icon"></label><br><br>
                                                <label class="txt-8em">¿Fumas?</label><br><br>
                                                <input class="uk-radio txt-6em mp-border-red" type="radio" name="opcion"><span class="txt-8em uk-margin-small-left">Si</span>
                                                <input class="uk-radio txt-6em mp-border-red uk-margin-left" type="radio" name="opcion"><span class="txt-8em uk-margin-small-left">No</span><br>
                                                <span class="txt-8em uk-margin-small-left">Cantidad de cigarros por semana</span>
                                                <select class="uk-select uk-form-small mp-radius-all uk-width-1-5 txt-8em" name="cigarros" id="cigarros">
                                                    <option value="0">1</option>
                                                </select>
                                            </div>
                                            <div class="uk-width-1-4 uk-text-center">
                                                <label class="icon-deporte mp-font-icon"></label><br><br>
                                                <label class="txt-9em">¿Cuántas veces por semana realizas ejericio?</label><br>
                                                <select class="uk-select mp-radius-all uk-width-1-4 uk-form-small txt-8em" name="number" id="number">
                                                    <option value="0">0</option>
                                                </select>
                                            </div>
                                            <div class="uk-width-1-4 uk-text-center">
                                                <label class="icon-hogar mp-font-icon"></label><br><br>
                                                <label class="txt-9em">Tu vivienda es:</label><br>
                                                <input class="uk-radio txt-9em mp-border-red mp-position-10r" type="radio" name="opcion">
                                                <input class="uk-radio txt-9em mp-border-red " type="radio" name="opcion">
                                                <input class="uk-radio txt-9em mp-border-red mp-position-20l" type="radio" name="opcion"><br>
                                                <span class="txt-8em uk-margin-small-left">Propia</span>
                                                <span class="txt-8em uk-margin-small-left">Hipotecada</span>
                                                <span class="txt-8em uk-margin-small-left">Rentada</span>
                                            </div>
                                            <div class="uk-width-1-4 uk-text-center">
                                                <label class="icon-negocio mp-font-icon"></label><br><br>
                                                <label class="txt-8em">¿Eres empleado o cuentas con negocio propio?</label><br>
                                                <input class="uk-radio txt-6em mp-border-red" type="radio" name="opcion"><span class="txt-8em uk-margin-small-left">Empleado</span>
                                                <input class="uk-radio txt-6em mp-border-red uk-margin-left" type="radio" name="opcion"><span class="txt-8em uk-margin-small-left">Negocio propio</span><br>
                                                <span class="txt-7em">Tipo de negocio</span>
                                                <select class="uk-select uk-form-small mp-radius-all uk-width-2-3 txt-7em" name="cigarros" id="cigarros">
                                                    <option value="0">Selecciona una opción</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1 uk-grid" uk-grid>
                                            <div class="uk-width-1-1">
                                                <span class="mp-txt-red txt-9em">Estilo de vida</span>
                                            </div>
                                            <div class="uk-grid uk-width-1-1" uk-grid>
                                                <div class="uk-width-1-4">
                                                    <label class="txt-9em">Ingreso económico mensual</label><br>
                                                    <img src="assets/images/ingreso.svg" alt="">
                                                </div>    
                                                <div class="uk-width-1-3 uk-text-center uk-grid">
                                                    <div class="uk-width-1-1">
                                                        <label class="icon-auto4 mp-font-icon"></label><br><br>
                                                        <label class="txt-8em">¿Tienes auto propio?</label><br><br>
                                                        <input class="uk-radio txt-6em mp-border-red" type="radio" name="opcion"><span class="txt-8em uk-margin-small-left">Si</span>
                                                        <input class="uk-radio txt-6em mp-border-red uk-margin-left" type="radio" name="opcion"><span class="txt-8em uk-margin-small-left">No</span><br>
                                                    </div>
                                                    <div class="uk-width-2-3">
                                                        <span class="txt-8em uk-margin-small-left">Cuantos integrantes de tu familia cuentan con auto propio</span>
                                                    </div>
                                                    <div class="uk-width-1-3">
                                                        <select class="uk-select uk-form-small mp-radius-all uk-width-1-1 txt-8em" name="cigarros" id="cigarros">
                                                            <option value="0">1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="uk-grid uk-width-2-3 uk-align-center uk-flex uk-flex-center uk-container uk-margin-large-top" uk-grid>
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
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
    </section>    
    <?php include_once('template/footer.php'); ?>
</body>
<script src="assets/js/function.min.js"></script>
</html>