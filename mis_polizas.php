<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mis pólizas</title>
    <?php include_once('template/head.php')?>
</head>
<body class="bg-polizas mp-main-container">
    <section class="mp-main-container">
    <?php include_once('template/nav_menu.php'); ?>
        <div class="uk-width-1-1 mp-margin-top-tab">
            <ul class="uk-subnav uk-subnav-pill uk-margin-remove">
                <li class="uk-active uk-margin-medium-left">
                    <a class="mp-encabezados-tab uk-text-center"><span class="txt-17em mp-bld-text uk-container">Mis Pólizas</span></a>
                </li>
            </ul>
            <div class="mp-bg-white mp-height-100">
                <div class="uk-container">
                    <ul class="uk-switcher uk-margin">
                        <li class="uk-active">
                            <div class="uk-margin-top uk-flex uk-flex-right uk-width-1-1">
                                <ul class="uk-breadcrumb">
                                    <li class="uk-disabled"><a>Inicio</a></li>
                                    <li><span class="mp-txt-red">Mis polizas</span></li>
                                </ul>
                            </div>
                            <div class="uk-grid uk-grid-divider" uk-grid>
                                <div class="uk-width-1-3 uk-grid-collapse" uk-grid>
                                    <div class="uk-width-1-4 uk-text-center">
                                        <img src="assets/images/perfil_photo.png" width="80" alt="subirFoto">
                                        <label class="txt-6em">Editar foto</label><br>
                                        <label class="txt-6em">Completar mis datos</label>
                                    </div>
                                    <div class="uk-width-2-3 uk-margin-small-top uk-margin-left">
                                        <label class="mp-txt-red txt-9em mp-bld-text">Juan Carlos Cárdenas Pérez</label><span class="uk-margin-left icon-edit"></span><br>
                                        <label class="txt-8em">jc.cp@correo.com</label>
                                    </div>
                                </div>
                                <div class="uk-width-2-3 uk-grid uk-margin-small-top" uk-grid>
                                    <div class="uk-width-1-3 uk-padding-remove">
                                        <label class="txt-8em"><span class="mp-txt-red">Paquete:&nbsp;&nbsp;&nbsp;&nbsp;</span>Plan MAPFRE a tu medida</label><br>
                                        <label class="txt-8em"><span class="mp-txt-red">Estatus:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Vigente</label>
                                    </div>
                                    <div class="uk-width-2-3 mp-bg-navy-gray mp-radius-all uk-margin-bottom">
                                        <div class="">
                                            <label class="mp-txt-red txt-8em mp-bld-text">AVISO</label><br>
                                            <p class="uk-margin-remove txt-8em uk-padding-small uk-padding-remove-top uk-padding-remove-left uk-padding-remove-bottom">
                                                Tú póliza de Autos vence en 3 días. Recuerda que es mejor renovarla con tiempo para seguir contando
                                                con la tranquilidad de que todo estará bien ante cualquier imprevisto.
                                            </p>
                                            <a class="mp-txt-red txt-8em">Contactar a mi agente <span uk-icon="icon: chevron-right; ratio:0.75"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> 
                    </ul>
                    <div class="uk-margin-top">
                        <label class="txt-75em">Selecciona tu póliza por producto</label><br>
                        <select class="txt-75em uk-select uk-width-1-4 uk-margin-small-top mp-radius-all uk-form-small" name="tipoPoliza" id="tipoPoliza">
                            <option value="0">Todos</option>
                        </select>
                    </div>
                    <div class="uk-margin-top">
                        <h5 class="mp-txt-red mp-bld-text">Mis pólizas</h5>
                        <hr class="mp-mrg-top-13">
                    </div>
                    <div class="uk-grid" uk-grid>
                        <div class="uk-width-1-2">
                            <a href="" class="mp-bg-red mp-txt-white uk-icon-button mp-button-icon uk-margin-small-left icon-auto2"></a>
                            <label class="txt-9em mp-txt-red uk-margin-small-left mp-bld-text">Autos</label>
                        </div>
                        <div class="uk-width-1-2 uk-flex uk-flex-right">
                            <a href="" class="mp-bg-gray mp-txt-white uk-icon-button mp-button-icon" uk-icon="icon: file-text; ratio: 1"></a>
                            <label class="txt-9em uk-margin-left mp-bld-text">Condiciones generales</label>
                        </div>
                    </div>
                    <hr class="mp-brd-red">
                    <div class="uk-grid uk-margin-medium-top" uk-grid>
                        <div class="mp-width-5-10 uk-text-right uk-text-middle">
                            <label class="mp-txt-red mp-number-poliza txt-12em mp-bld-text">1</label>
                        </div>
                        <div class="mp-width-9-10">
                            <table class="uk-table uk-table-divider uk-divider-vertical">
                                <thead>
                                    <tr>
                                        <th class="uk-width-1-4 mp-bld-text">Descripción del producto</th>
                                        <th class="uk-text-center uk-width-1-5 mp-bld-text">Mi póliza</th>
                                        <th class="uk-text-center uk-width-1-5 mp-bld-text">Vigencia</th>
                                        <th class="uk-text-center uk-width-1-4 mp-bld-text">Estatus</th>
                                        <th class="uk-text-center uk-width-1-5 mp-bld-text">Factura</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="txt-10em">Mazda 3</td>
                                        <td class="uk-text-center">
                                            <span class="icon-pdf mp-font-icon"></span><br>
                                            <label class="txt-75em">4101500011223</label>
                                        </td>
                                        <td class="uk-text-center">
                                            <label class="txt-8em">Inicio:&nbsp;&nbsp;&nbsp;26/08/2015</label><br>
                                            <label class="txt-8em">Fin:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;26/08/2016</label>
                                        </td>
                                        <td class="uk-text-center">
                                            <span class="uk-icon-button mp-bg-green mp-txt-white  mp-button-icon" uk-icon="icon: check; ratio: 1.5"></span><br>
                                            <label class="txt-8em">Vigente</label>
                                        </td>
                                        <td class="uk-text-center">
                                            <span class="icon-pdf mp-font-icon"></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="mp-hr-position">
                            <div class="uk-flex uk-flex-right uk-margin-bottom uk-grid">
                                <span class="txt-8em">Renovación automática</span>
                                <div class="onoffswitch mp-height-10 mp-position-7">
                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
                                    <label class="onoffswitch-label" for="myonoffswitch"></label>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-right uk-width-1-1">
                                <button class="uk-button mp-btn-red-medium mp-bg-red mp-txt-white mp-radius-all txt-6em mp-lh-20 uk-padding-remove mp-width-8">V<span class="uk-text-lowercase">er más</span><span uk-icon="icon: chevron-down; ratio:0.8"></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid uk-margin-medium-top" uk-grid>
                        <div class="mp-width-5-10 uk-text-right uk-text-middle">
                            <label class="mp-txt-red mp-number-poliza txt-12em mp-bld-text">2</label>
                        </div>
                        <div class="mp-width-9-10">
                            <table class="uk-table uk-table-divider uk-divider-vertical">
                                <thead>
                                    <tr>
                                        <th class="uk-width-1-4 mp-bld-text">Descripción del producto</th>
                                        <th class="uk-text-center uk-width-1-5 mp-bld-text">Mi póliza</th>
                                        <th class="uk-text-center uk-width-1-5 mp-bld-text">Vigencia</th>
                                        <th class="uk-text-center uk-width-1-4 mp-bld-text">Estatus</th>
                                        <th class="uk-text-center uk-width-1-5 mp-bld-text">Factura</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="txt-10em">Aveo</td>
                                        <td class="uk-text-center">
                                            <span class="icon-pdf mp-font-icon"></span><br>
                                            <label class="txt-75em">4101500011223</label>
                                        </td>
                                        <td class="uk-text-center">
                                            <label class="txt-8em">Inicio:&nbsp;&nbsp;&nbsp;26/08/2015</label><br>
                                            <label class="txt-8em">Fin:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;26/08/2016</label>
                                        </td>
                                        <td class="uk-text-center">
                                            <span class="uk-icon-button mp-bg-green mp-txt-white mp-button-icon" uk-icon="icon: check; ratio: 1.5"></span><br>
                                            <label class="txt-8em">Vigente</label>
                                        </td>
                                        <td class="uk-text-center">
                                            <span class="icon-pdf mp-font-icon"></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="mp-hr-position">
                            <div class="uk-flex uk-flex-right uk-margin-bottom uk-grid">
                                <span class="txt-8em">Renovación automática</span>
                                <div class="onoffswitch mp-height-10 mp-position-7">
                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch1">
                                    <label class="onoffswitch-label" for="myonoffswitch1"></label>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-right uk-width-1-1">
                                <button class="uk-button mp-btn-red-medium mp-bg-red mp-txt-white mp-radius-all txt-6em mp-lh-20 uk-padding-remove mp-width-8">V<span class="uk-text-lowercase">er más</span><span uk-icon="icon: chevron-down; ratio:0.8"></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid" uk-grid>
                        <div class="uk-width-1-2">
                            <a href="" class="mp-bg-red mp-txt-white uk-icon-button mp-button-icon uk-margin-small-left icon-vida"></a>
                            <label class="txt-9em mp-txt-red uk-margin-small-left mp-bld-text">Vida</label>
                        </div>
                        <div class="uk-width-1-2 uk-flex uk-flex-right">
                            <a href="" class="mp-bg-gray mp-txt-white uk-icon-button mp-button-icon" uk-icon="icon: file-text; ratio: 1"></a>
                            <label class="txt-9em uk-margin-left mp-bld-text">Condiciones generales</label>
                        </div>
                    </div>
                    <hr class="mp-brd-red">
                    <div class="uk-grid uk-margin-medium-top" uk-grid>
                        <div class="mp-width-5-10 uk-text-right uk-text-middle">
                            <label class="mp-txt-red mp-number-poliza txt-12em mp-bld-text">1</label>
                        </div>
                        <div class="mp-width-9-10">
                            <table class="uk-table uk-table-divider uk-divider-vertical">
                            <thead>
                                    <tr>
                                        <th class="uk-width-1-4 mp-bld-text">Descripción del producto</th>
                                        <th class="uk-text-center uk-width-1-5 mp-bld-text">Mi póliza</th>
                                        <th class="uk-text-center uk-width-1-5 mp-bld-text">Vigencia</th>
                                        <th class="uk-text-center uk-width-1-4 mp-bld-text">Estatus</th>
                                        <th class="uk-text-center uk-width-1-5 mp-bld-text">Factura</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="txt-10em">Juan Carlos Cárdenas Pérez</td>
                                        <td class="uk-text-center">
                                            <span class="icon-pdf mp-font-icon"></span><br>
                                            <label class="txt-75em">4101500011223</label>
                                        </td>
                                        <td class="uk-text-center">
                                            <label class="txt-8em">Inicio:&nbsp;&nbsp;&nbsp;26/08/2015</label><br>
                                            <label class="txt-8em">Fin:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;26/08/2016</label>
                                        </td>
                                        <td class="uk-text-center">
                                            <span class="mp-bg-red mp-txt-white uk-icon-button mp-button-icon" uk-icon="icon: close; ratio: 1.5"></span><br>
                                            <label class="txt-8em">Expirada</label>
                                        </td>
                                        <td class="uk-text-center">
                                            <span class="icon-pdf mp-font-icon"></span>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="uk-width-1-4 mp-bld-text uk-text-center">Cobertura</th>
                                        <th class="uk-text-center uk-width-1-5 mp-bld-text">Suma asegurada</th>
                                        <th class="uk-text-center uk-width-1-5 mp-bld-text">Forma de pago</th>
                                        <th class="uk-text-center uk-width-1-4 mp-bld-text">Domiciliada</th>
                                        <th class="uk-text-center uk-width-1-5 mp-bld-text">Recibo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="txt-10em uk-text-center">Total</td>
                                        <td class="uk-text-center txt-10em">$1,000,000 <sub class="txt-6em">MXN</sub></td>
                                        <td class="uk-text-center txt-10em">Contado</td>
                                        <td class="uk-text-center txt-10em">Sí</td>
                                        <td class="uk-text-center">
                                            <span class="icon-pdf mp-font-icon"></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="uk-flex uk-flex-right uk-margin-bottom uk-grid">
                                <span class="txt-8em">Renovación automática</span>
                                <div class="onoffswitch mp-height-10 mp-position-7">
                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch2">
                                    <label class="onoffswitch-label" for="myonoffswitch2"></label>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-right uk-width-1-1">
                                <button class="uk-button mp-btn-red-medium mp-bg-red mp-txt-white mp-radius-all txt-6em mp-lh-20 uk-padding-remove mp-width-8">V<span class="uk-text-lowercase">er más</span><span uk-icon="icon: chevron-down; ratio:0.8"></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin-top">
                        <h5 class="mp-txt-red mp-bld-text">Pólizas familiares</h5>
                        <hr class="mp-mrg-top-13">
                    </div>
                    <div class="uk-grid" uk-grid>
                        <div class="uk-width-1-2">
                            <a href="" class="mp-bg-red mp-txt-white uk-icon-button mp-button-icon uk-margin-small-left icon-vida"></a>
                            <label class="txt-9em mp-txt-red uk-margin-small-left mp-bld-text">Vida</label>
                        </div>
                        <div class="uk-width-1-2 uk-flex uk-flex-right">
                            <a href="" class="mp-bg-gray mp-txt-white uk-icon-button mp-button-icon" uk-icon="icon: file-text; ratio: 1"></a>
                            <label class="txt-9em uk-margin-left mp-bld-text">Condiciones generales</label>
                        </div>
                    </div>
                    <hr class="mp-brd-red">
                    <div class="uk-grid uk-margin-medium-top" uk-grid>
                        <div class="mp-width-5-10 uk-text-right uk-text-middle">
                            <label class="mp-txt-red mp-number-poliza txt-12em mp-bld-text">1</label>
                        </div>
                        <div class="mp-width-9-10">
                            <table class="uk-table uk-table-divider uk-divider-vertical">
                                <thead>
                                    <tr>
                                        <th class="uk-width-1-4 mp-bld-text">Nombre del asegurado</th>
                                        <th class="uk-text-center uk-width-1-5 mp-bld-text">Mi póliza</th>
                                        <th class="uk-text-center uk-width-1-5 mp-bld-text">Vigencia</th>
                                        <th class="uk-text-center uk-width-1-4 mp-bld-text">Estatus</th>
                                        <th class="uk-text-center uk-width-1-5 mp-bld-text">Factura</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="txt-10em">Luis Alberto Hernández Rivera</td>
                                        <td class="uk-text-center">
                                            <span class="icon-pdf mp-font-icon"></span><br>
                                            <label class="txt-75em">4101500011223</label>
                                        </td>
                                        <td class="uk-text-center">
                                            <label class="txt-8em">Inicio:&nbsp;&nbsp;&nbsp;26/08/2015</label><br>
                                            <label class="txt-8em">Fin:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;26/08/2016</label>
                                        </td>
                                        <td class="uk-text-center">
                                            <span class="uk-icon-button mp-bg-red mp-txt-white  mp-button-icon" uk-icon="icon: close; ratio: 0.8"></span><br>
                                            <label class="txt-8em">Expirada</label>
                                        </td>
                                        <td class="uk-text-center">
                                            <span class="icon-pdf mp-font-icon"></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="mp-hr-position">
                            <div class="uk-flex uk-flex-right uk-margin-bottom uk-grid">
                                <span class="txt-8em">Renovación automática</span>
                                <div class="onoffswitch mp-height-10 mp-position-7">
                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch3">
                                    <label class="onoffswitch-label" for="myonoffswitch3"></label>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-right uk-width-1-1">
                                <button class="uk-button mp-btn-red-medium mp-bg-red mp-txt-white mp-radius-all txt-6em mp-lh-20 uk-padding-remove mp-width-8">V<span class="uk-text-lowercase">er más</span><span uk-icon="icon: chevron-down; ratio:0.8"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-grid uk-width-1-2 uk-align-center uk-flex uk-flex-center uk-container uk-margin-large-top" uk-grid>
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
    <?php include_once('template/modal.php'); ?>
</body>
<script>
    UIkit.modal("#renueva").show();
</script>
</html>