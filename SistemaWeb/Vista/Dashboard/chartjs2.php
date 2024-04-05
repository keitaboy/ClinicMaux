<div class="col-md-6" style="height:100%;">
    <!-- BAR CHART -->
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Historial de Número de pacientes unicos atendidos por Año</h3>
        </div>
        <div class="box-body">
            <canvas id="barChart2" style="height:400px"></canvas>
        </div>
    </div>
</div>
<div class="col-md-6" style="height:100%;">
    <!-- BAR CHART -->
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Historial de Número de pacientes unicos atendidos por Mes del año Actual</h3>
        </div>
        <div class="box-body">
            <canvas id="barChart" style="height:400px"></canvas>
        </div>
    </div>
</div>
<div class="col-md-12" style="height:100%;">
    <!-- BAR CHART -->
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Historial de Número de pacientes unicos atendidos por Día en el Mes y Año actual</h3>
        </div>
        <div class="box-body">
            <canvas id="barChart1" style="height:400px"></canvas>
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

        $.ajax({
        url: "../ajaxdashboard/dashboard4.ajax.php",
        type: 'GET',
        success: function(respuesta) {
            console.log("Datos de numero de pacientes obtenidos:", respuesta);
            var data = JSON.parse(respuesta);
            var Dia = [];
            var Veces = [];

            for (var index = 0; index < data.length; index++) {
                Dia.push(data[index].Dia);
                Veces.push(data[index].Veces);
            }
                var barChartCanvas = $('#barChart1').get(0).getContext('2d');
                var barChartData = {
                    labels: Dia, // Usar los Mes obtenidos del servidor
                    datasets: [
                        {
                            label: 'Número de pacientes',
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

        $.ajax({
        url: "../ajaxdashboard/dashboard5.ajax.php",
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
                var barChartCanvas = $('#barChart2').get(0).getContext('2d');
                var barChartData = {
                    labels: Anio, // Usar los Mes obtenidos del servidor
                    datasets: [
                        {
                            label: 'Número de pacientes',
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