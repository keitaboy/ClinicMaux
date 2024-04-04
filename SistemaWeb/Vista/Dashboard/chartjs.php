<!-- Incluye las fuentes de jQuery y Chart.js -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <section class="content">
        <div class="row">
            <!-- /.col (LEFT) -->
            <div class="col-md-12" style="height:100%;">
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
                <!-- <div class="col-md-12" style="height:100%;">
                     
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
                        
                    </div>
                    
                </div> -->
            </div>
        </div>
    </div>
</section>


<!-- JavaScript -->
<script>
$(document).ready(function() {

    $.ajax({
        url: "../ajaxdashboard/dashboard.ajax.php",
        type: 'GET',
        success: function(respuesta) {
            //console.log("Datos de servicios obtenidos:", respuesta);
            var data = JSON.parse(respuesta);
            var servicios = [];
            var serviciosUsados = [];

            for (var index = 0; index < data.length; index++) {
                servicios.push(data[index].Servicio);
                serviciosUsados.push(data[index].VecesUsado);
            }

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
                    position: 'right',
                    labels: {
                        fontColor: 'black',
                        fontSize: 14
                    }
                }
            };

            var pieChart = new Chart(pieChartCanvas, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: serviciosUsados,
                        backgroundColor: PieData.map(data => data.color),
                        hoverBackgroundColor: PieData.map(data => data.highlight)
                    }],
                    labels: servicios
                },
                options: pieOptions
            });
        },
        error: function(error) {
            console.log("Error al obtener datos de servicios:", error);
        }
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
</script>
