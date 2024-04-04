<div class="col-md-12" style="height:100%;">
    <!-- BAR CHART -->
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Historial de Número de pacientes atendidos por Mes del año Actual</h3>
        </div>
        <div class="box-body">
            <canvas id="barChart" style="height:400px"></canvas>
        </div>
    </div>
</div>

<script src="../../SistemaWeb/pluginschartjs/jquery-3.6.0.min.js"></script>
<script src="../../SistemaWeb/pluginschartjs/chart.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
        url: "../ajaxdashboard/dashboard2.ajax.php",
        type: 'GET',
        success: function(respuesta) {
            console.log("Datos de numero de pacientes obtenidos:", respuesta);
            var data = JSON.parse(respuesta);
            var Mes = [];
            var Veces = [];

            for (var index = 0; index < data.length; index++) {
                Mes.push(data[index].Mes);
                Veces.push(data[index].Veces);
            }
                var barChartCanvas = $('#barChart').get(0).getContext('2d');
                var barChartData = {
                    labels: Mes, // Usar los Mes obtenidos del servidor
                    datasets: [
                        {
                            label: 'Número de pacientes',
                            backgroundColor: '#f56954',
                            borderColor: '#f56954',
                            borderWidth: 1,
                            data: Veces // Usar los Veces obtenidos del servidor
                        }
                    ]
                };
                var barChartOptions = {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: false
                };

                var barChart = new Chart(barChartCanvas, {
                    type: 'bar',
                    data: barChartData,
                    options: barChartOptions
                });
            }
        })
    });
</script>