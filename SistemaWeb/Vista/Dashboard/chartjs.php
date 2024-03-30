<script type="text/javascript" src="../Js/Dashboard.js?rev=<?php echo time();?>"></script>
<form autocomplete="false" onsubmit="return false">
    <section class="content">
        <div class="row">
            <!-- /.col (LEFT) -->
            <div class="col-md-12">
                <!-- DONUT CHART -->
                <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Servicios Prestados Por Mes en el Mes Actual a los Pacientes de la Clinica Veterinaria Maria Auxiliadora</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
                <!-- /.box -->

                <!-- BAR CHART -->
                <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Pacientes por Día</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
                <!-- /.box -->

            </div>
            <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->

    </section>
    <script>
$(document).ready(function () {
    /* ChartJS
     * -------
     * Aquí crearemos algunos gráficos utilizando ChartJS
     */

    //-------------
    //- PIE CHART -
    //-------------
    // Obtener el contexto con jQuery - usando el método .get() de jQuery.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [{
            value: 700,
            color: '#f56954',
            highlight: '#f56954',
            label: 'Chrome'
        },
        {
            value: 500,
            color: '#00a65a',
            highlight: '#00a65a',
            label: 'IE'
        },
        {
            value: 400,
            color: '#f39c12',
            highlight: '#f39c12',
            label: 'FireFox'
        },
        {
            value: 600,
            color: '#00c0ef',
            highlight: '#00c0ef',
            label: 'Safari'
        },
        {
            value: 300,
            color: '#3c8dbc',
            highlight: '#3c8dbc',
            label: 'Opera'
        },
        {
            value: 100,
            color: '#d2d6de',
            highlight: '#d2d6de',
            label: 'Navigator'
        }
    ];
    var pieOptions = {
        //Booleano - Si debemos mostrar un trazo en cada segmento
        segmentShowStroke: true,
        //Cadena - El color de cada trazo del segmento
        segmentStrokeColor: '#fff',
        //Número - Anchura del trazo de cada segmento
        segmentStrokeWidth: 2,
        //Número - Porcentaje del gráfico que recortamos del centro
        percentageInnerCutout: 0, // Esto es 0 para gráficos de dona
        //Número - Cantidad de pasos de animación
        animationSteps: 100,
        //String - Efecto de relajación de la animación
        animationEasing: 'easeOutBounce',
        //Boolean - Si animamos la rotación del Doughnut
        animateRotate: true,
        //Boolean - Si animamos escalando el Doughnut desde el centro
        animateScale: false,
        //Boolean - si se desea que el gráfico responda al cambio de tamaño de la ventana
        responsive: true,
        // Boolean - Mantener o no la relación de aspecto inicial al responder; si se establece en false, ocupará todo el contenedor.
        maintainAspectRatio: true,
        //String - A legend template
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    };
    //Crear gráfico de dona
    // Puedes cambiar entre gráfico de dona y de rosquilla utilizando el método a continuación.
    pieChart.Doughnut(PieData, pieOptions);

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d');
    var barChart = new Chart(barChartCanvas);
    var barChartData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
                label: 'Electronics',
                fillColor: 'rgba(210, 214, 222, 1)',
                strokeColor: 'rgba(210, 214, 222, 1)',
                pointColor: 'rgba(210, 214, 222, 1)',
                pointStrokeColor: '#c1c7d1',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
                label: 'Digital Goods',
                fillColor: 'rgba(60,141,188,0.9)',
                strokeColor: 'rgba(60,141,188,0.8)',
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: [28, 48, 40, 19, 86, 27, 90]
            }
        ]
    };
    var barChartOptions = {
        //Booleano - Si la escala debe comenzar en cero, o un orden de magnitud por debajo del valor más bajo
        scaleBeginAtZero: true,
        //Boolean - Si las líneas de la cuadrícula se muestran a través del gráfico
        scaleShowGridLines: true,
        //Cadena - Color de las líneas de la cuadrícula
        scaleGridLineColor: 'rgba(0,0,0,.05)',
        //Número - Anchura de las líneas de la rejilla
        scaleGridLineWidth: 1,
        //Booleano - Si se muestran líneas horizontales (excepto en el eje X)
        scaleShowHorizontalLines: true,
        //Booleano - Si se muestran líneas verticales (excepto en el eje Y)
        scaleShowVerticalLines: true,
        //Booleano - Si hay un trazo en cada barra
        barShowStroke: true,
        //Número - Anchura en píxeles del trazo de la barra
        barStrokeWidth: 2,
        //Número - Espaciado entre cada uno de los conjuntos de valores X
        barValueSpacing: 5,
        //Número - Espaciado entre los conjuntos de datos dentro de los conjuntos de valores X
        barDatasetSpacing: 1,
        //Cadena - Una plantilla de leyenda
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - Si el gráfico es responsivo
        responsive: true,
        maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);
});
</script>
