<div class="border-left border-md-3 col-md-12  mx-auto text-center " style="height:100%;">
    <!-- BAR CHART -->
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Historial de Número de Citas Medicas atendidas por Año</h3>
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
        url: "../ajaxdashboard/dashboard6.ajax.php",
        type: 'GET',
        success: function(respuesta) {
            console.log("Datos de numero de pacientes obtenidos:", respuesta);
            var data = JSON.parse(respuesta);
            var Anio = [];
            var Veces = [];

            for (var index = 0; index < data.length; index++) {
                Anio.push(data[index].Anio);
                Veces.push(data[index].Veces);
            }
                var barChartCanvas = $('#barChart').get(0).getContext('2d');
                var barChartData = {
                    labels: Anio, // Usar los Mes obtenidos del servidor
                    datasets: [
                        {
                            label: 'Número de Citas Medicas',
                            backgroundColor: '#4c53c2',
                            borderColor: '#4c53c2',
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