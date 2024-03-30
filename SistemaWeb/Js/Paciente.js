var tablePaciente;

function listar_Paciente() {
    tablePaciente = $("#tabla_Paciente").DataTable({
        "ordering": false,
        "paging": false,
        "searching": { "regex": true },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "destroy": true,
        "async": false,
        "processing": true,
        "ajax": {
            "url": "../Controlador/Paciente/controlador_Paciente_listar.php",
            "type": 'POST'
        },
        "order": [[1, 'asc']],
        "columns": [
            { "defaultContent": "" },
            { "data": "Name" },
            { "data": "TypeMascotName" },
            { "data": "Race" },
            { "data": "Color" },
            { "data": "Weight" },
            { "data": "Height" },
            { "data": "Age" },
            { "data": "BornDate" },
            { "data": "NumberMedHis" },
            { "data": "NroDoct" },
            {
                "data": "Sex",
                "render": function (data, type, row) {
                    if (data == 'M') {
                        return "MACHO";
                    } else {
                        return "HEMBRA";
                    }
                }
            },
            { "data": "Sterilized" },
            { "defaultContent": "<button style='font-size:13px;' type='button' class='editar2 btn btn-primary'><i class='fa fa-edit'></i></button>" }
        ],
        "language": idioma_espanol,
        "select": true
    })
    document.getElementById("tabla_Paciente_filter").style.display = "none";

    $('input.global_filter_paciente').on('keyup click', function () {
        filterGlobalPaciente();
    });
    $('input.column_filter').on('keyup click', function () {
        filterColumn($(this).parents('tr').attr('data-column'));
    });
    tablePaciente.on('draw.dt', function () {
        var PageInfo = $('#tabla_Paciente').DataTable().page.info();
        tablePaciente.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
}

function listar_Dueno() {
    tablePaciente = $("#tabla_Dueno").DataTable({
        "ordering": false,
        "paging": false,
        "searching": { "regex": true },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "destroy": true,
        "async": false,
        "processing": true,
        "ajax": {
            "url": "../Controlador/Paciente/controlador_Dueno_listar.php",
            "type": 'POST'
        },
        "order": [[1, 'asc']],
        "columns": [
            { "defaultContent": "" },
            { "data": "Dueno" },
            { "data": "TypeDocName" },
            { "data": "NroDoct" },
            { "data": "CellPhone" },
            { "data": "Adress" },
            { "data": "Email" },
            { "defaultContent": "<button style='font-size:13px;' type='button' class='editar btn btn-primary'><i class='fa fa-edit'></i></button>" }
        ],
        "language": idioma_espanol,
        "select": true
    })
    document.getElementById("tabla_Dueno_filter").style.display = "none";

    $('input.global_filter_dueno').on('keyup click', function () {
        filterGlobalDueno();
    });
    $('input.column_filter').on('keyup click', function () {
        filterColumn($(this).parents('tr').attr('data-column'));
    });
    tablePaciente.on('draw.dt', function () {
        var PageInfo = $('#tabla_Dueno').DataTable().page.info();
        tablePaciente.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
}

function AbrirModalRegistro() {
    $("#modal_registro").modal({ backdrop: 'static', keyboard: false })
    $("#modal_registro").modal('show');
}

function AbrirModalRegistroPaciente() {
    $("#modal_registrar_paciente").modal({ backdrop: 'static', keyboard: false })
    $("#modal_registrar_paciente").modal('show');
}

function listar_combo_documento() {
    $.ajax({
        "url": "../Controlador/Doctor/controlador_combo_documento_listar.php",
        "type": 'POST'
    }).done(function (resp) {
        var data = JSON.parse(resp);
        var cadena = "";
        if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
                cadena += "<option value='" + data[i][0] + "'>" + data[i][1] + "</option>";
            }
            $("#cbm_documento").html(cadena);
            $("#cbm_documento_editar").html(cadena);
        } else {
            cadena += "<option value=''No se Encontraron Registros</option>";
            $("#cbm_documento").html(cadena);
            $("#cbm_documento_editar").html(cadena);
        }
    })
}
function listar_combo_tipo_paciente() {
    $.ajax({
        "url": "../Controlador/Paciente/controlador_tipo_paciente_listar.php",
        "type": 'POST'
    }).done(function (resp) {
        var data = JSON.parse(resp);
        var cadena = "";
        if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
                cadena += "<option value='" + data[i][0] + "'>" + data[i][1] + "</option>";
            }
            $("#cbm_tipo_mascota").html(cadena);
            // $("#cbm_documento_editar").html(cadena);
        } else {
            cadena += "<option value=''No se Encontraron Registros</option>";
            $("#cbm_tipo_mascota").html(cadena);
            //  $("#cbm_documento_editar").html(cadena);
        }
    })
}

$('#tabla_Dueno').on('click', '.editar', function () {
    var data = tablePaciente.row($(this).parents('tr')).data();//deteccion de fila al hacer click y captura de datos
    if (tablePaciente.row(this).child.isShown()) {
        var data = tablePaciente.row(this).data();
    }
    $("#modal_editar_dueno").modal({ backdrop: 'static', keyboard: false })
    $("#modal_editar_dueno").modal('show');
    $("#txt_idDueno").val(data.IdOwner);
    $("#txt_Dueno_nombre_editar").val(data.Name);
    $("#txt_Dueno_apellido_editar").val(data.LastName);
    $("#txt_nroactual_doc_editar").val(data.NroDoct);
    $("#txt_nronuevo_doc_editar").val(data.NroDoct);
    $("#cbm_documento_editar").val(data.IdTypeDoct).trigger("change");
    $("#txt_Dueno_celular_editar").val(data.CellPhone);
    $("#txt_Dueno_direccion_editar").val(data.Adress);
    $("#txt_Dueno_correo_editar").val(data.Email);
})

$('#tabla_Paciente').on('click', '.editar2', function () {
    var data = tablePaciente.row($(this).parents('tr')).data();//deteccion de fila al hacer click y captura de datos
    if (tablePaciente.row(this).child.isShown()) {
        var data = tablePaciente.row(this).data();
    }
    $("#modal_editar_paciente").modal({ backdrop: 'static', keyboard: false })
    $("#modal_editar_paciente").modal('show');
    $("#txt_idPaciente").val(data.IdPacient);
    $("#txt_Paciente_nombre_editar").val(data.Name);
    $("#cbm_tipo_mascota_editar").val(data.IdMascot).trigger("change");
    $("#txt_Paciente_raza_editar").val(data.Race);
    $("#txt_Paciente_color_editar").val(data.Color);
    $("#txt_Paciente_peso_editar").val(data.Weight);
    $("#txt_Paciente_altura_editar").val(data.Height);
    $("#txt_Paciente_edad_editar").val(data.Age);
    $("#txt_Paciente_FechaNac_editar").val(data.BornDate);
    $("#cbm_sexo_editar").val(data.Sex).trigger("change");
    $("#cbm_esterilizado_editar").val(data.Sterilized).trigger("change");
})

function filterGlobalPaciente() {
    $('#tabla_Paciente').DataTable().search(
        $('#global_filter_paciente').val(),
    ).draw();
}
function filterGlobalDueno() {
    $('#tabla_Dueno').DataTable().search(
        $('#global_filter_dueno').val(),
    ).draw();
}

function Registrar_Dueno() {
    var DuenoNombre = $("#txt_Dueno_nombre").val();
    var DuenoApellido = $("#txt_Dueno_apellido").val();
    var DuenoDocumento = $("#cbm_documento").val();
    var DuenoNroDoc = $("#txt_Dueno_nrodoc").val();
    var DuenoCelular = $("#txt_Dueno_celular").val();
    var DuenoDireccion = $("#txt_Dueno_direccion").val();
    var DuenoCorreo = $("#txt_Dueno_correo").val();
    var EmailOk = $("#emailOK").val();

    if (EmailOk == "Incorrecto") {
        return Swal.fire("Advertencia", "El correo electronico no tiene un formato correcto", "warning");
    }

    if (DuenoNombre.length == 0 || DuenoApellido.length == 0 || DuenoDocumento.length == 0 || DuenoNroDoc.length == 0 ||
        DuenoCelular.length == 0 || DuenoDireccion.length == 0 || DuenoCorreo.length == 0) {
        Swal.fire("Mensaje de advertencia", "Llene todos campos vacios", "warning");
    }
    $.ajax({
        "url": "../Controlador/Paciente/controlador_Dueno_registro.php",
        type: 'POST',
        data: {
            DuenoNombre: DuenoNombre,
            DuenoApellido: DuenoApellido,
            DuenoDocumento: DuenoDocumento,
            DuenoNroDoc: DuenoNroDoc,
            DuenoCelular: DuenoCelular,
            DuenoDireccion: DuenoDireccion,
            DuenoCorreo: DuenoCorreo
        }
    }).done(function (resp) {
        if (resp > 0) {
            if (resp == 1) {
                $("#modal_registro").modal('hide');
                listar_Paciente();
                LimpiarCamposDueno();
                Swal.fire("Mensaje de confirmacion", "Datos guardados correctamente", "success");
                AbrirModalRegistroPaciente();
            }
            else {
                LimpiarCamposDueno();
                Swal.fire("Mensaje de advertencia", "La Paciente ya existe!", "warning");
            }
        }
        else {
            Swal.fire("Mensaje de error", "No se pudo completar el registro", "error");
        }
    })
}

function Registrar_Paciente() {
    var PacienteNombre = $("#txt_Paciente_nombre").val();
    var PacienteTipoMasc = $("#cbm_tipo_mascota").val();
    var PacienteRaza = $("#txt_Paciente_raza").val();
    var PacienteColor = $("#txt_Paciente_color").val();
    var PacientePeso = $("#txt_Paciente_peso").val();
    var PacienteAltura = $("#txt_Paciente_altura").val();
    var PacienteEdad = $("#txt_Paciente_edad").val();
    var PacienteFechaNac = $("#txt_Paciente_FechaNac").val();
    var PacienteSexo = $("#cbm_sexo").val();
    var PacienteEsterilizar = $("#cbm_esterilizado").val();

    if (PacienteNombre.length == 0 || PacienteTipoMasc.length == 0 || PacienteRaza.length == 0 || PacienteColor.length == 0 ||
        PacientePeso.length == 0 || PacienteAltura.length == 0 || PacienteEdad.length == 0 || PacienteFechaNac.length == 0 ||
        PacienteSexo.length == 0 || PacienteEsterilizar.length == 0) {
        Swal.fire("Mensaje de advertencia", "Llene todos campos vacíos", "warning");
    }
    $.ajax({
        "url": "../Controlador/Paciente/controlador_Paciente_registro.php",
        type: 'POST',
        data: {
            PacienteNombre: PacienteNombre,
            PacienteTipoMasc: PacienteTipoMasc,
            PacienteRaza: PacienteRaza,
            PacienteColor: PacienteColor,
            PacientePeso: PacientePeso,
            PacienteAltura: PacienteAltura,
            PacienteEdad: PacienteEdad,
            PacienteFechaNac: PacienteFechaNac,
            PacienteSexo: PacienteSexo,
            PacienteEsterilizar: PacienteEsterilizar
        }
    }).done(function (resp) {
        if (resp > 0) {
            if (resp == 1) {
                // Mostrar ventana emergente de pregunta
                Swal.fire({
                    title: '¿Desea agregar otra mascota?',
                    showDenyButton: true,
                    confirmButtonText: `Sí`,
                    denyButtonText: `No`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        LimpiarCamposPaciente();
                        Swal.fire("Mensaje de confirmación", "Agregue los datos de la nueva mascota", "success");
                    } else if (result.isDenied) {
                        $("#modal_registrar_paciente").modal('hide');
                        listar_Paciente();
                        Swal.fire("Mensaje de confirmación", "Datos guardados correctamente", "success");
                    }
                });
            } else {
                LimpiarCamposPaciente();
                Swal.fire("Mensaje de advertencia", "La paciente ya existe!", "warning");
            }
        } else {
            Swal.fire("Mensaje de error", "No se pudo completar el registro", "error");
        }
    });
}


function LimpiarCamposDueno() {
    $("#txt_Dueno_nombre").val("");
    $("#txt_Dueno_apellido").val("");
    $("#cbm_documento").val("");
    $("#txt_Dueno_nrodoc").val("");
    $("#txt_Dueno_celular").val("");
    $("#txt_Dueno_direccion").val("");
    $("#txt_Dueno_correo").val("");
}

function LimpiarCamposPaciente() {
    $("#txt_Paciente_nombre").val("");
    $("#cbm_tipo_mascota").val("");
    $("#cbm_documento").val("");
    $("#txt_Paciente_raza").val("");
    $("#txt_Paciente_color").val("");
    $("#txt_Paciente_peso").val("");
    $("#txt_Paciente_altura").val("");
    $("#txt_Paciente_edad").val("");
    $("#txt_Paciente_FechaNac").val("");
    $("#cbm_sexo").val("");
    $("#cbm_esterilizado").val("");
}

function Modificar_Dueno() {

    var idDueno = $("#txt_idDueno").val();
    var DuenoNombre = $("#txt_Dueno_nombre_editar").val();
    var DuenoApellido = $("#txt_Dueno_apellido_editar").val();
    var DuenoDocumento = $("#cbm_documento_editar").val();
    var DuenoNroDocActual = $("#txt_nroactual_doc_editar").val();
    var DuenoNroDocNuevo = $("#txt_nronuevo_doc_editar").val();
    var DuenoCelular = $("#txt_Dueno_celular_editar").val();
    var DuenoDireccion = $("#txt_Dueno_direccion_editar").val();
    var DuenoCorreo = $("#txt_Dueno_correo_editar").val(); //apuntar a email Dueno e email usuario
    var EmailOk = $("#emailOK_editar").val();

    console.log(idDueno);
    console.log(DuenoNombre);
    console.log(DuenoApellido);
    console.log(DuenoDocumento);
    console.log(DuenoNroDocActual);
    console.log(DuenoNroDocNuevo);
    console.log(DuenoCelular);
    console.log(DuenoDireccion);
    console.log(DuenoCorreo);

    if (EmailOk == "Incorrecto") {
        return Swal.fire("Advertencia", "El correo electronico no tiene un formato correcto", "warning");
    }

    if (idDueno.length == 0 || DuenoNombre.length == 0 || DuenoApellido.length == 0 || DuenoDocumento.length == 0 ||
        DuenoNroDocActual.length == 0 || DuenoNroDocNuevo.length == 0 || DuenoCelular.length == 0 ||
        DuenoDireccion.length == 0 || DuenoCorreo.length == 0) {
        Swal.fire("Mensaje de advertencia", "Llene todos campos vacios", "warning");
    }
    $.ajax({
        "url": "../Controlador/Paciente/controlador_Dueno_modificar.php",
        type: 'POST',
        data: {
            idDueno: idDueno,
            DuenoNombre: DuenoNombre,
            DuenoApellido: DuenoApellido,
            DuenoDocumento: DuenoDocumento,
            DuenoNroDocActual: DuenoNroDocActual,
            DuenoNroDocNuevo: DuenoNroDocNuevo,
            DuenoCelular: DuenoCelular,
            DuenoDireccion: DuenoDireccion,
            DuenoCorreo: DuenoCorreo
        }
    }).done(function (resp) {
        if (resp > 0) {
            console.log(resp);
            if (resp == 1) {
                $("#modal_registro").modal('hide');
                listar_Dueno();
                LimpiarCamposDueno();
                Swal.fire("Mensaje de confirmacion", "Datos guardados correctamente", "success");
            }
            else {
                LimpiarCamposDueno();
                Swal.fire("Mensaje de advertencia", "La Doctor ya existe!", "warning");
            }
        }
        else {
            Swal.fire("Mensaje de error", "No se pudo completar el registro", "error");
        }
    })
}

function Modificar_Paciente() {

    var idPaciente = $("#txt_idPaciente").val();
    var PacienteNombre = $("#txt_Paciente_nombre_editar").val();
    var PacienteTipoMas = $("#cbm_tipo_mascota_editar").val();
    var PacienteRaza = $("#txt_Paciente_raza_editar").val();
    var PacienteColor = $("#txt_Paciente_color_editar").val();
    var PacientePeso = $("#txt_Paciente_peso_editar").val();
    var PacienteAltura = $("#txt_Paciente_altura_editar").val();
    var PacienteEdad = $("#txt_Paciente_edad_editar").val();
    var PacienteFechaNac = $("#txt_Paciente_FechaNac_editar").val(); //apuntar a email Paciente e email usuario
    var PacienteSexo = $("#cbm_sexo_editar").val();
    var PacienteEsterilizar = $("#cbm_esterilizado_editar").val();

    console.log(idPaciente);
    console.log(PacienteNombre);
    console.log(PacienteTipoMas);
    console.log(PacienteRaza);
    console.log(PacienteColor);
    console.log(PacientePeso);
    console.log(PacienteAltura);
    console.log(PacienteEdad);
    console.log(PacienteFechaNac);
    console.log(PacienteSexo);
    console.log(PacienteEsterilizar);

    if (EmailOk == "Incorrecto") {
        return Swal.fire("Advertencia", "El correo electronico no tiene un formato correcto", "warning");
    }

    if (idPaciente.length == 0 || PacienteNombre.length == 0|| PacienteTipoMas.length == 0|| PacienteRaza.length == 0|| PacienteColor.length == 0|| 
        PacientePeso.length == 0|| PacienteAltura.length == 0|| PacienteEdad.length == 0|| PacienteFechaNac.length == 0|| PacienteSexo.length == 0|| 
        PacienteEsterilizar.length == 0 ) {
        Swal.fire("Mensaje de advertencia", "Llene todos campos vacios", "warning");
    }
    $.ajax({
        "url": "../Controlador/Paciente/controlador_Paciente_modificar.php",
        type: 'POST',
        data: {
            idPaciente: idPaciente,
            PacienteNombre: PacienteNombre,
            PacienteTipoMas: PacienteTipoMas,
            PacienteRaza: PacienteRaza,
            PacienteColor: PacienteColor,
            PacientePeso: PacientePeso,
            PacienteAltura: PacienteAltura,
            PacienteEdad: PacienteEdad,
            PacienteFechaNac: PacienteFechaNac,
            PacienteSexo: PacienteSexo,
            PacienteEsterilizar: PacienteEsterilizar
        }
    }).done(function (resp) {
        if (resp > 0) {
            console.log(resp);
            if (resp == 1) {
                $("#modal_registro").modal('hide');
                listar_Paciente();
                LimpiarCamposPaciente();
                Swal.fire("Mensaje de confirmacion", "Datos guardados correctamente", "success");
            }
            else {
                LimpiarCamposPaciente();
                Swal.fire("Mensaje de advertencia", "La Doctor ya existe!", "warning");
            }
        }
        else {
            Swal.fire("Mensaje de error", "No se pudo completar el registro", "error");
        }
    })
}