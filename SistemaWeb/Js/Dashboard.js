function listar_procedimiento() {
    tableprocedimiento = $("#tabla_procedimiento").DataTable({
    "ordering": false,
    "paging": false,
    "searching": { "regex": true },
    "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
    "pageLength": 10,
    "destroy": true,
    "async": false,
    "processing": true,
    "ajax": {
        "url": "../Controlador/Dashboard/controlador_dashboard_listar.php",
        "type": 'POST'
    },
    "order":[[1,'asc']],
    "columns": [
        { "defaultContent": "" },
        { "data": "Name" },
        { "data": "Observation" },
        { "defaultContent": "<button style='font-size:13px;' type='button' class='editar btn btn-primary'><i class='fa fa-edit'></i></button>" }
    ],
    "language": idioma_espanol,
    "select": true
})

document.getElementById("tabla_procedimiento_filter").style.display = "none";

$('.input.global_filter').on('keyup click', function () {
    filterGlobal();
});

$('.input.column_filter').on('keyup click', function () {
    filterColumn($(this).parents('tr').attr('data-column'));
});

tableprocedimiento.on('draw.dt',function(){
    var PageInfo=$('#tabla_procedimiento_coreccion').DataTable().page.info();
    tableprocedimiento.column(0,{page:'current'}).nodes().each(function (cell, i){
        cell.innerHTML=i + 1 + PageInfo.start;
    });
});
}