<script type="text/javascript" src="../Js/Paciente.js?rev=<?php echo time(); ?>"></script>
<div class="row"></div>

<!-- dueño -->

<div class="col-md-12">
    <div class="box box-warning box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Mantenimiento de Dueño</h3>
            <div class="box-tools pull-right">s
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-widget="remove"><i
                        class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <div class="col-lg-10">
                    <div class="input-group">
                        <input type="text" class="global_filter_dueno form-control" id="global_filter_dueno"
                            placeholder="Ingresar dato a buscar">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-danger" style="width:100%" onclick="AbrirModalRegistro()"><i
                            class="glyphicon glyphicon-plus"></i>Nuevo Registro</button>
                </div>
            </div>
            <table id="tabla_Dueno" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Due&ntilde;o</th>
                        <th>Tipo de documento</th>
                        <th>Nro de documento</th>
                        <th>Celular</th>
                        <th>Direcc&oacute;n</th>
                        <th>Correo</th>
                        <th>Acci&oacute;n</th>
                        <th>Acci&oacute;n mascota</th>
                    </tr>
                </thead>
                <!-- <tfoot>
          <tr>
            <th>#</th>
            <th>Usuario</th>
            <th>Rol</th>
            <th>Sexo</th>
            <th>Estado</th>
            <th>Information</th>
          </tr>
        </tfoot> -->
            </table>
        </div>
    </div>
</div>

<!-- paciente -->

<div class="col-md-12">
    <div class="box box-warning box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Mantenimiento de Pacientes</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-widget="remove"><i
                        class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <div class="col-lg-10">
                    <div class="input-group">
                        <input type="text" class="global_filter_paciente form-control" id="global_filter_paciente"
                            placeholder="Ingresar dato a buscar">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
            <table id="tabla_Paciente" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Paciente</th>
                        <th>Tipo de mascota</th>
                        <th>Raza</th>
                        <th>Color</th>
                        <th>Peso</th>
                        <th>Altura</th>
                        <th>Edad</th>
                        <th>Decha de nacimiento</th>
                        <th>Nro de historial clinico</th>
                        <th>Dueño</th>
                        <th>Sexo</th>
                        <th>Esterilazado</th>
                        <th>Acci&oacute;n</th>
                    </tr>
                </thead>
                <!-- <tfoot>
          <tr>
            <th>#</th>
            <th>Usuario</th>
            <th>Rol</th>
            <th>Sexo</th>
            <th>Estado</th>
            <th>Information</th>
          </tr>
        </tfoot> -->
            </table>
        </div>
    </div>
</div>

<!-- Registro dueño -->

<div class="modal fade" id="modal_registro" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Registro de Due&nacute;o</b></h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" id="txt_Dueno_nombre"
                            placeholder="Ingrese nombre del Dueño" maxlength="50"
                            onkeypress="return soloLetras(event)"><br>
                    </div>
                    <div class="col-lg-6">
                        <label for="">Apellido</label>
                        <input type="text" class="form-control" id="txt_Dueno_apellido"
                            placeholder="Ingrese apellido(s) del Dueño" maxlength="50"
                            onkeypress="return soloLetras(event)"><br>
                    </div>
                    <div class="col-lg-6">
                        <label for="">Tipo de documento</label>
                        <select class="js-example-basic-single" name="state" id="cbm_documento" style="width:100%;">
                        </select><br><br>
                    </div>
                    <div class="col-lg-6">
                        <label for="">Nro Documento</label>
                        <input type="text" class="form-control" id="txt_Dueno_nrodoc"
                            placeholder="Ingrese Nro documento" maxlength="10"
                            onkeypress="return soloNumeros(event)"><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="">Celular</label>
                        <input type="text" class="form-control" id="txt_Dueno_celular" placeholder="Ingrese celular"
                            maxlength="9" onkeypress="return soloNumeros(event)"><br>
                    </div>

                    <div class="col-lg-12">
                        <label for="">Direcci&oacute;n</label>
                        <input type="text" class="form-control" id="txt_Dueno_direccion" placeholder="Ingrese direccion"
                            maxlength="250">
                    </div>

                    <div class="col-lg-12">
                        <label for="">Correo</label>
                        <input type="text" class="form-control" id="txt_Dueno_correo" placeholder="Ingrese Correo">
                        <label for="" id="emailOK" style="color:red;"></label>
                        <input type="text" id="validar_email" hidden>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary" onclick="Registrar_Dueno()"><i class="fa fa-check">
                                <b>&nbsp;Registrar Due&nacute;o</b></i></button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close">
                                <b>&nbsp;Cerrar</b></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Registro paciente -->

<div class="modal fade" id="modal_registrar_paciente" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Registro de la mascota</b></h4>
            </div>
            <div class="col-lg-6">
                <label for="">Nombre</label>
                <input type="text" class="form-control" id="txt_Paciente_nombre"
                    placeholder="Ingrese nombre del Paciente" maxlength="50" onkeypress="return soloLetras(event)">
            </div>
            <div class="col-lg-6">
                <label for="">Tipo de mascota</label>
                <select class="js-example-basic-single" name="state" id="cbm_tipo_mascota" style="width:100%;">
                </select><br><br>
            </div>
            <div class="col-lg-6">
                <label for="">Raza</label>
                <input type="text" class="form-control" id="txt_Paciente_raza" placeholder="Ingrese nombre del Paciente"
                    maxlength="50" onkeypress="return soloLetras(event)">
            </div>
            <div class="col-lg-6">
                <label for="">Color</label>
                <input type="text" class="form-control" id="txt_Paciente_color"
                    placeholder="Ingrese nombre del Paciente" maxlength="50" onkeypress="return soloLetras(event)">
            </div>
            <div class="col-lg-6">
                <label for="">Peso</label>
                <input type="number" class="form-control" id="txt_Paciente_peso" placeholder="Ingrese nombre del Paciente"
                     onkeypress="return decimal(event)">
            </div>
            <div class="col-lg-6">
                <label for="">Altura</label>
                <input type="number" class="form-control" id="txt_Paciente_altura"
                    placeholder="Ingrese nombre del Paciente"  onkeypress="return decimal(event)">
            </div>
            <div class="col-lg-6">
                <label for="">Edad</label>
                <input type="number" class="form-control" id="txt_Paciente_edad"  onkeypress="return soloNumeros(event)">
            </div>
            <div class="col-lg-6">
                <label for="">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="txt_Paciente_FechaNac"
                    placeholder="Ingrese nombre del Paciente">
            </div>
            <div class="col-lg-6">
                <label for="">Sexo</label>
                <select class="js-example-basic-single" name="state" id="cbm_sexo" style="width:100%;">
                    <option value="M">MACHO</option>
                    <option value="H">HEMBRA</option>
                </select><br><br>
            </div>
            <div class="col-lg-6">
                <label for="">Esterilizado</label>
                <select class="js-example-basic-single" name="state" id="cbm_esterilizado" style="width:100%;">
                    <option value="No">NO</option>
                    <option value="Si">SI</option>
                </select><br><br>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick="Registrar_Paciente()"><i class="fa fa-check">
                        <b>&nbsp;Registrar</b></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close">
                        <b>&nbsp;Cerrar</b></i></button>
            </div>
        </div>
    </div>
</div>

<!-- Editar dueño -->

<div class="modal fade" id="modal_editar_dueno" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Editar datos del due&nacute;o</b></h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" id="txt_idDueno" hidden></input>
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" id="txt_Dueno_nombre_editar"
                            placeholder="Ingrese nombre del Dueño" maxlength="50"
                            onkeypress="return soloLetras(event)"><br>
                    </div>
                    <div class="col-lg-6">
                        <label for="">Apellido</label>
                        <input type="text" class="form-control" id="txt_Dueno_apellido_editar"
                            placeholder="Ingrese apellido(s) del Dueño" maxlength="50"
                            onkeypress="return soloLetras(event)"><br>
                    </div>
                    <div class="col-lg-6">
                        <label for="">Tipo de documento</label>
                        <select class="js-example-basic-single" name="state" id="cbm_documento_editar"
                            style="width:100%;">
                        </select><br><br>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" id="txt_nroactual_doc_editar" hidden></input>
                        <label for="">Nro Documento</label>
                        <input type="text" class="form-control" id="txt_nronuevo_doc_editar"
                            placeholder="Ingrese Nro documento" maxlength="9"
                            onkeypress="return soloNumeros(event)"><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="">Celular</label>
                        <input type="number" class="form-control" id="txt_Dueno_celular_editar"
                            placeholder="Ingrese celular" maxlength="9" onkeypress="return soloNumeros(event)"><br>
                    </div>

                    <div class="col-lg-12">
                        <label for="">Direcci&oacute;n</label>
                        <input type="text" class="form-control" id="txt_Dueno_direccion_editar"
                            placeholder="Ingrese direccion" maxlength="250">
                    </div>

                    <div class="col-lg-12">
                        <label for="">Correo</label>
                        <input type="text" class="form-control" id="txt_Dueno_correo_editar"
                            placeholder="Ingrese Correo">
                        <label for="" id="emailOK" style="color:red;"></label>
                        <input type="text" id="validar_email_editar" hidden>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" onclick="Modificar_Dueno()"><i class="fa fa-check">
                            <b>&nbsp;Modificar</b></i></button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close">
                            <b>&nbsp;Cerrar</b></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Editar paciente -->

<div class="modal fade" id="modal_editar_paciente" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Editar datos del Paciente</b></h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <input type="text" id="txt_idPaciente" hidden></input>
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" id="txt_Paciente_nombre_editar"
                                placeholder="Ingrese nombre del Paciente" maxlength="50"
                                onkeypress="return soloLetras(event)>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Tipo de mascota</label>
                            <select class="js-example-basic-single" name="state" id="cbm_tipo_mascota_editar"
                                style="width:100%;">
                            </select><br><br>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Raza</label>
                            <input type="text" class="form-control" id="txt_Paciente_raza_editar"
                                placeholder="Ingrese nombre del Paciente" maxlength="50"
                                onkeypress="return soloLetras(event)>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Color</label>
                            <input type="text" class="form-control" id="txt_Paciente_color_editar"
                                placeholder="Ingrese nombre del Paciente" maxlength="50"
                                onkeypress="return soloLetras(event)">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Peso</label>
                            <input type="number" class="form-control" id="txt_Paciente_peso_editar"
                                placeholder="Ingrese nombre del Paciente" maxlength="10" 
                                onkeypress="return decimal(event)">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Altura</label>
                            <input type="number" class="form-control" id="txt_Paciente_altura_editar"
                                placeholder="Ingrese nombre del Paciente" maxlength="10"
                                onkeypress="return decimal(event)">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Edad</label>
                            <input type="number" class="form-control" id="txt_Paciente_edad_editar" 
                            onkeypress="return soloNumeros(event)">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="txt_Paciente_FechaNac_editar"
                                placeholder="Ingrese nombre del Paciente" maxlength="50">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Sexo</label>
                            <select class="js-example-basic-single" name="state" id="cbm_sexo_editar"
                                style="width:100%;">
                                <option value="M">MACHO</option>
                                <option value="H">HEMBRA</option>
                            </select><br><br>
                        </div>

                        <div class="col-lg-6">
                            <label for="">Esterilizado</label>
                            <select class="js-example-basic-single" name="state" id="cbm_esterilizado_editar"
                                style="width:100%;">
                                <option value="No">NO</option>
                                <option value="Si">SI</option>
                            </select><br><br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" onclick="Modificar_Paciente()"><i class="fa fa-check">
                                <b>&nbsp;Registrar</b></i></button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close">
                                <b>&nbsp;Cerrar</b></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        listar_Dueno();
        listar_combo_tipo_paciente();
        listar_combo_documento();
        $('.js-example-basic-single').select2();
        $("#modal_registro").on('shown.bs.modal', function () {
            $("#txt_Dueno_nombre").focus();
        })
    });

    $('.box').boxWidget({
        animationspeed: 500,
        collapseTrigger: '[data-widget="colapse"]',
        removeTrigger: '[data-widget="remove"]',
        collapseIcon: 'fa-minus',
        expandIcon: 'fa-plus',
        removeIcon: 'fa-times'
    })

    document.getElementById('txt_Dueno_correo').addEventListener('input', function () {
        campo = event.target;
        emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
        if (emailRegex.test(campo.value)) {
            $(this).css("border", "");
            $("#emailOK").html("");
            $("#validar_email").val("correcto");
        } else {
            $(this).css("border", "1px solid red");
            $("#emailOK").html("Email Incorrecto");
            $("#validar_email").val("incorrecto");
        }
    });

    document.getElementById('txt_Dueno_correo_editar').addEventListener('input', function () {
        campo = event.target;
        emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
        if (emailRegex.test(campo.value)) {
            $(this).css("border", "");
            $("#emailOK_editar").html("");
            $("#validar_email_editar").val("correcto");
        } else {
            $(this).css("border", "1px solid red");
            $("#emailOK_editar").html("Email Incorrecto");
            $("#validar_email_editar").val("incorrecto");
        }
    });

</script>