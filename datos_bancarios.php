<!DOCTYPE html>
<html lang="es">
<head>
    <title>Datos Bancarios</title>
    <?php include_once('template/head.php')?>
</head>
<body class="mp-main-container bg-datosbancarios">
    <?php include_once('template/nav_menu.php'); ?>
    <section class="mp-main-container">
        <div class="uk-width-1-1 mp-margin-top-tab">
            <ul class="uk-subnav uk-subnav-pill uk-margin-remove">
                <li class="uk-active uk-margin-medium-left">
                    <a class="mp-encabezados-tab uk-text-center" href=""><span class="txt-15em mp-bld-text uk-container">DATOS BANCARIOS</span></a>
                </li>
            </ul>
            <div class="mp-bg-white">
                <div class="uk-container">
                    <ul class="uk-switcher uk-margin">
                        <li class="uk-active">
                            <div class="uk-margin-top uk-flex uk-flex-right uk-width-1-1">
                                <ul class="uk-breadcrumb">
                                    <li class="uk-disabled"><a>Inicio</a></li>
                                    <li class="uk-disabled"><a>Mis datos</a></li>
                                    <li><span class="mp-txt-red">Datos bancarios</span></li>
                                </ul>
                            </div>
                            <div class="mp-bg-navy-gray mp-radius-all uk-width-1-1">
                                <div class="uk-margin-small-left uk-padding-small">
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
                            <div class="uk-margin-large-top">
                                <ul class="uk-flex-center" uk-tab>
                                    <li class="mp-width-3-10"><a href="#">Facturas</a></li>
                                    <li class="mp-width-3-10"><a href="#">Recibos</a></li>
                                </ul>
                                <ul class="uk-switcher uk-margin">
                                    <li>
                                        <label class="txt-95em">Facturas correspondientes a todos tus productos</label>
                                        <div class="uk-width-1-1 uk-grid uk-margin-top mp-mrg-left-0" uk-grid>
                                            <div class="uk-width-1-4">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">10 de Septiembre</label><br>
                                                <label class="txt-8em">Renovación de póliza de Autos</label>
                                            </div>
                                            <div class="uk-width-1-4">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">5 de Septiembre</label><br>
                                                <label class="txt-8em">Plan MAPFRE</label>
                                            </div>
                                            <div class="uk-width-1-4">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">28 de Agosto</label><br>
                                                <label class="txt-8em">Renovación de póliza de Vida</label>
                                            </div>
                                            <div class="uk-width-1-4">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">5 de Agosto</label><br>
                                                <label class="txt-8em">Renovación de póliza de Vida</label>
                                            </div>
                                            <div class="uk-width-1-4 uk-margin-large-top">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">10 de Septiembre</label><br>
                                                <label class="txt-8em">Renovación de póliza de Autos</label>
                                            </div>
                                            <div class="uk-width-1-4 uk-margin-large-top">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">5 de Septiembre</label><br>
                                                <label class="txt-8em">Plan MAPFRE</label>
                                            </div>
                                            <div class="uk-width-1-4 uk-margin-large-top">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">28 de Agosto</label><br>
                                                <label class="txt-8em">Renovación de póliza de Vida</label>
                                            </div>
                                            <div class="uk-width-1-4 uk-margin-large-top">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">5 de Agosto</label><br>
                                                <label class="txt-8em">Renovación de póliza de Vida</label>
                                            </div>
                                            <div class="uk-width-1-4 uk-margin-large-top">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">10 de Septiembre</label><br>
                                                <label class="txt-8em">Renovación de póliza de Autos</label>
                                            </div>
                                            <div class="uk-width-1-4 uk-margin-large-top">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">5 de Septiembre</label><br>
                                                <label class="txt-8em">Plan MAPFRE</label>
                                            </div>
                                            <div class="uk-width-1-4 uk-margin-large-top">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">28 de Agosto</label><br>
                                                <label class="txt-8em">Renovación de póliza de Vida</label>
                                            </div>
                                            <div class="uk-width-1-4 uk-margin-large-top">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">5 de Agosto</label><br>
                                                <label class="txt-8em">Renovación de póliza de Vida</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <label class="txt-95em">Facturas correspondientes a todos tus productos</label>
                                        <div class="uk-width-1-1 uk-grid uk-margin-top mp-mrg-left-0" uk-grid>
                                            <div class="uk-width-1-4">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">10 de Septiembre</label><br>
                                                <label class="txt-8em">Renovación de póliza de Autos</label>
                                            </div>
                                            <div class="uk-width-1-4">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">5 de Septiembre</label><br>
                                                <label class="txt-8em">Plan MAPFRE</label>
                                            </div>
                                            <div class="uk-width-1-4">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">28 de Agosto</label><br>
                                                <label class="txt-8em">Renovación de póliza de Vida</label>
                                            </div>
                                            <div class="uk-width-1-4">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">5 de Agosto</label><br>
                                                <label class="txt-8em">Renovación de póliza de Vida</label>
                                            </div>
                                            <div class="uk-width-1-4 uk-margin-large-top">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">10 de Septiembre</label><br>
                                                <label class="txt-8em">Renovación de póliza de Autos</label>
                                            </div>
                                            <div class="uk-width-1-4 uk-margin-large-top">
                                                <span class="icon-pdf txt-3em"></span><br>
                                                <label class="txt-8em mp-txt-red">5 de Septiembre</label><br>
                                                <label class="txt-8em">Plan MAPFRE</label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="uk-margin-large-top">
                                <form action="">
                                    <div class="uk-grid" uk-grid>
                                        <div class="uk-width-1-1">
                                            <label class="txt-1em mp-txt-red mp-bld-text">Datos Fiscales</label>
                                            <hr>
                                        </div>
                                        <div class="uk-width-1-2 uk-margin-small-top">
                                            <label class="txt-9em mp-bld-text">Nombre Completo</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="text" name="nombre" id="nombre" placeholder="Juan Carlos Cárdenas Pérez">
                                        </div>
                                        <div class="uk-width-1-2 uk-margin-small-top uk-margin-bottom">
                                            <label class="txt-9em mp-bld-text">Correo Electrónico</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="text" name="correo" id="correo" placeholder="jc.cp@correo.com">
                                        </div>
                                        <div class="uk-width-1-2 uk-margin-small-top uk-margin-bottom">
                                            <label class="txt-9em mp-bld-text">Calle y Número</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="number" name="calle" id="calle" placeholder="Av. Centenario, Número 123, Interior 4">
                                        </div>
                                        <div class="uk-width-1-2 uk-margin-small-top uk-margin-bottom">
                                            <label class="txt-9em mp-bld-text">Colonia</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="text" name="colonia" id="colonia" placeholder="Merced Gómez">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top uk-margin-bottom">
                                            <label class="txt-9em mp-bld-text">Código Postal</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="number" name="codigoP" id="codigoP" placeholder="01600">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top uk-margin-bottom">
                                            <label class="txt-9em mp-bld-text">Estado</label>
                                            <select class="uk-select mp-radius-all uk-form-small" name="estado" id="estado">
                                                <option value="0">Ciudad de México</option>
                                            </select>
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top uk-margin-bottom">
                                            <label class="txt-9em mp-bld-text">Delegación</label>
                                            <select class="uk-select mp-radius-all uk-form-small" name="delegacion" id="delegacion">
                                                <option value="0">Álvaro Obregón</option>
                                            </select>
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top uk-margin-bottom">
                                            <label class="txt-9em mp-bld-text">RFC</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="text" name="rfc" id="rfc" placeholder="AARM850524V89">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top uk-margin-bottom">
                                            <label class="txt-9em mp-bld-text">Teléfono móvil</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="number" name="telMovil" id="telMovil" placeholder="(044) 551122 - 3344">
                                        </div>
                                        <div class="uk-width-1-4 uk-margin-small-top uk-margin-bottom">
                                            <label class="txt-9em mp-bld-text">Teléfono fijo</label>
                                            <input class="uk-input mp-radius-all uk-form-small" type="number" name="telMovil" id="telMovil" placeholder="(55) 5634-3536">
                                        </div>
                                        <div class="uk-width-1-1 uk-grid" uk-grid>    
                                            <div class="uk-width-1-2 uk-flex uk-flex-right">
                                                <button class="uk-button mp-txt-red mp-button-red-medium mp-bld-text uk-width-1-3">Guardar</button>
                                            </div>
                                            <div class="uk-width-1-2 uk-flex uk-flex-left">
                                                <button class="uk-button mp-button-transparent mp-bld-text uk-text-center">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="uk-width-1-1 uk-margin-large-top">
                                <label class="txt-1em mp-txt-red mp-bld-text">Tarjetas de crédito</label>
                                <hr>
                            </div>
                            <div>
                                <table class="uk-table uk-table-divider">
                                    <tbody>
                                        <td class="mp-width-1-10">
                                           <span class="icon-tarjeta1 txt-3em"></span> 
                                        </td>
                                        <td class="uk-width-1-6">
                                            <label class="txt-9em mp-bld-text">Cuentas de cheques</label><br>
                                            <label>...........&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;789</label>
                                        </td>
                                        <td class="mp-width-25-10">
                                            <label class="txt-9em mp-bld-text">Dirección de la tarjeta</label><br>
                                            <label class="txt-9em">Av. Centenario, Número 123, Interior 4</label>
                                        </td>
                                        <td class="uk-table-expand">
                                            <label class="txt-9em mp-bld-text">Fecha de vencimiento</label><br>
                                            <label class="txt-9em">07/2023</label>
                                        </td>                                        
                                        <td class="uk-width-small uk-text-right">
                                            <span class="icon-edit"></span><br>
                                            <span uk-icon="icon: trash"></span>
                                        </td>
                                    </tbody>
                                    <tbody>
                                        <td class="mp-width-1-10">
                                           <span class="icon-tarjeta1 txt-3em"></span> 
                                        </td>
                                        <td class="uk-width-1-6">
                                            <label class="txt-9em mp-bld-text">Cuentas de cheques</label><br>
                                            <label>...........&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;789</label>
                                        </td>
                                        <td class="mp-width-25-10">
                                            <label class="txt-9em mp-bld-text">Dirección de la tarjeta</label><br>
                                            <label class="txt-9em">Av. Centenario, Número 123, Interior 4</label>
                                        </td>
                                        <td class="uk-table-expand">
                                            <label class="txt-9em mp-bld-text">Fecha de vencimiento</label><br>
                                            <label class="txt-9em">07/2023</label>
                                        </td>                                        
                                        <td class="uk-width-small uk-text-right">
                                            <span class="icon-edit"></span><br>
                                            <span uk-icon="icon: trash"></span>
                                        </td>
                                    </tbody>
                                </table>
                                <hr>
                            </div>
                            <div class="uk-width-1-1">
                                <a class="uk-icon-button mp-button-red-small mp-txt-red mp-button-icon-small uk-text-center" uk-icon="icon: plus; ratio: 0.5"></a>
                                <label class="mp-txt-red mp-bld-text">Asociar nueva tarjeta</label>
                            </div>
                            <div class="uk-grid uk-margin-medium-bottom">
                                <div class="uk-width-1-2 uk-flex uk-flex-right">
                                    <button class="uk-button mp-txt-red mp-button-red-medium mp-bld-text uk-width-1-3">Guardar</button>
                                </div>
                                <div class="uk-width-1-2 uk-flex uk-flex-left">
                                    <button class="uk-button mp-button-transparent mp-bld-text uk-text-center">Cancelar</button>
                                </div>
                            </div>
                            <div class="uk-grid uk-width-2-3 uk-align-center uk-flex uk-flex-center uk-container uk-margin-large-top uk-margin-bottom" uk-grid>
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