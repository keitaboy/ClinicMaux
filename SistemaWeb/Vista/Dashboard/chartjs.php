
    <section class="content">
        <div class="row">
            <!-- /.col (LEFT) -->
            <div class="col-md-12" style="height:100%;">
                <!-- DONUT CHART -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Servicios Prestados</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="pieChart" style="height:250px"></canvas>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                <div class="col-md-12" style="height:100%;">
                    <!-- AREA CHART -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Area Chart</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="chart" style="height:400px">
                                <canvas id="areaChart" style="height:400px"></canvas>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
    </section>


<script>
$(document).ready(function() {
    $.ajax({
        url: "../ajaxdashboard/dashboard.ajax.php",
        type: 'GET',
        success: function(respuesta) {
            console.log("Datos de servicios obtenidos:", respuesta);
            var data = JSON.parse(respuesta);
            var servicios = [];
            var serviciosUsados = [];

            for (var index = 0; index < data.length; index++) {
                servicios.push(data[index].Servicio);
                serviciosUsados.push(data[index].VecesUsado);
            }

            //- PIE CHART -
            //-------------
            var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
            var PieData = [];
            for (var i = 0; i < servicios.length; i++) {
                PieData.push({
                    value: serviciosUsados[i],
                    color: getRandomColor(),
                    highlight: getRandomColor(),
                    label: servicios[i]
                });
            }
            var pieOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: '#fff',
                segmentStrokeWidth: 2,
                percentageInnerCutout: 0,
                animationSteps: 100,
                animationEasing: 'easeOutBounce',
                animateRotate: true,
                animateScale: false,
                responsive: true,
                maintainAspectRatio: true,
                legend: {
                    display: true,
                    position: 'right', // Puedes ajustar la posición de la leyenda aquí
                    labels: {
                        fontColor: 'black',
                        fontSize: 14
                    }
                }
            };

            var pieChart = new Chart(pieChartCanvas).Doughnut(PieData, pieOptions);
        },
        error: function(error) {
            console.log("Error al obtener datos de servicios:", error);
        }
    });

    $.ajax({
        url: "../ajaxdashboard/dashboard2.ajax.php",
        type: 'GET',
        success: function(respuesta) {
            console.log("Datos de pacientes obtenidos:", respuesta);
            var data = JSON.parse(respuesta);
            var Veces = [];
            var Mes = [];

            for (var index = 0; index < data.length; index++) {
                Veces.push(data[index].Veces);
                Mes.push(data[index].Mes);
            }

            console.log("Veces:", Veces);
            console.log("Mes:", Mes);

          
        },
        error: function(error) {
            console.log("Error al obtener datos de pacientes:", error);
        }
          //- AREA CHART -
            //--------------

            // Obtener el contexto del gráfico de área con jQuery
            var areaChartCanvas = $('#areaChart').get(0).getContext('2d');

            // Configurar los datos del gráfico de área
            var areaChartData = {
                labels: Mes,
                datasets: [{
                    label: 'Numero de Pacientes',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    borderWidth: 1,
                    data: Veces
                }]
            };

            // Configurar las opciones del gráfico de área
            var areaChartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{ // Corrección aquí
                        gridLines: {
                            display: false,
                        }
                    }],
                    yAxes: [{ // Corrección aquí
                        gridLines: {
                            display: false,
                        }
                    }]
                }
            };

            // Crear una instancia del gráfico de área
             new Chart(areaChartCanvas, {
                type: 'line',
                data: areaChartData,
                options: areaChartOptions
            })
    });
});

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}





/* function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
} */
</script>