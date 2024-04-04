<!-- Incluye las fuentes de jQuery y Chart.js -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Contenido HTML -->
<section class="content">
    <div class="row">
        <div class="col-md-4" id="SecondDiv" style="height:250px;">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Servicios brindados en </span> el año <span id="year"></span>
                        para los Pacientes de la Clinica Veterinaria Maria Auxiliadora</h3>
                </div>
                <div class="box-body">
                    <canvas id="pieChart1" style="height:100px"></canvas>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-4" id="FirstDiv" style="height:250px;">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Servicios Prestados Por Mes en el Mes Actual a los Pacientes de la Clinica
                        Veterinaria Maria Auxiliadora</h3>
                </div>
                <div class="box-body">
                    <canvas id="pieChart" style="height:100px"></canvas>
                </div>
            </div>
        </div> -->
        <div class="col-md-4" id="SecondDiv" style="height:250px;">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Servicios brindados en <span id="month"></span> del <span id="year2"></span>
                        para los Pacientes de la Clinica Veterinaria Maria Auxiliadora</h3>
                </div>
                <div class="box-body">
                    <canvas id="pieChart" style="height:100px"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-4" id="ThirdDiv" style="height:250px;">
            <div class="box box-danger">
                <div class="box-header with-border">
                <h3 class="box-title">Servicios brindados el <span id="day"></span> de <span id="month2"></span> del <span id="year3"></span> para los Pacientes de la Clinica Veterinaria Maria Auxiliadora</h3>
                </div>
                <div class="box-body">
                    <canvas id="pieChart2" style="height:100px"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript -->
<script>
    $(document).ready(function () {

        // Función para crear y configurar gráficos
        function createChart(canvasId, data, labels) {
            var pieChartCanvas = $('#' + canvasId).get(0).getContext('2d');
            var PieData = [];
            for (var i = 0; i < data.length; i++) {
                PieData.push({
                    value: data[i],
                    color: getRandomColor(),
                    highlight: getRandomColor(),
                    label: labels[i]
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
                        data: data,
                        backgroundColor: PieData.map(data => data.color),
                        hoverBackgroundColor: PieData.map(data => data.highlight)
                    }],
                    labels: labels
                },
                options: pieOptions
            });
        }

        // AJAX para el primer gráfico
        $.ajax({
            url: "../ajaxdashboard/dashboard.ajax.php",
            type: 'GET',
            success: function (respuesta) {
                console.log("Datos de servicios obtenidos:", respuesta);
                var data = JSON.parse(respuesta);
                var servicios = [];
                var serviciosUsados = [];

                for (var index = 0; index < data.length; index++) {
                    servicios.push(data[index].Servicio);
                    serviciosUsados.push(data[index].VecesUsado);
                }

                // Llamar a la función createChart con los datos del primer gráfico
                createChart('pieChart', serviciosUsados, servicios);
            },
            error: function (error) {
                console.log("Error al obtener datos de servicios:", error);
            }
        });

        // AJAX para el segundo gráfico
        $.ajax({
            url: "../ajaxdashboard/dashboard1.ajax.php",
            type: 'GET',
            success: function (respuesta) {
                console.log("Datos de servicios obtenidos:", respuesta);
                var data = JSON.parse(respuesta);
                var serviciosAno = [];
                var serviciosUsadosAno = [];

                for (var index = 0; index < data.length; index++) {
                    serviciosAno.push(data[index].Servicio);
                    serviciosUsadosAno.push(data[index].VecesUsado);
                }

                // Llamar a la función createChart con los datos del segundo gráfico
                createChart('pieChart1', serviciosUsadosAno, serviciosAno);
            },
            error: function (error) {
                console.log("Error al obtener datos de servicios:", error);
            }
        });

        // AJAX para el segundo gráfico
        $.ajax({
            url: "../ajaxdashboard/dashboard2.ajax.php",
            type: 'GET',
            success: function (respuesta) {
                console.log("Datos de servicios obtenidos:", respuesta);
                var data = JSON.parse(respuesta);
                var serviciosAno = [];
                var serviciosUsadosAno = [];

                for (var index = 0; index < data.length; index++) {
                    serviciosAno.push(data[index].Servicio);
                    serviciosUsadosAno.push(data[index].VecesUsado);
                }

                // Llamar a la función createChart con los datos del segundo gráfico
                createChart('pieChart2', serviciosUsadosAno, serviciosAno);
            },
            error: function (error) {
                console.log("Error al obtener datos de servicios:", error);
            }
        });

        // Función para generar colores aleatorios
        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    });

    // Obtener fecha actual
    var today = new Date();

     // Obtener el día actual
     var day = today.getDate();

    // Obtener el mes actual en letras
    var months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    var month = months[today.getMonth()];

    // Obtener el año actual en números
    var year = today.getFullYear();

    // Mostrar el mes y el año en el HTML
    document.getElementById('day').textContent = day;
    document.getElementById('month').textContent = month;
    document.getElementById('year').textContent = year;
    document.getElementById('month2').textContent = month;
    document.getElementById('year2').textContent = year;
    document.getElementById('year3').textContent = year;
</script>