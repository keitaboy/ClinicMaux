
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

                function createSimpleSwitcher(items, activeItem, activeItemChangedCallback) {
                var switcherElement = document.createElement('div');
                switcherElement.classList.add('switcher');

                var intervalElements = items.map(function(item) {
                    var itemEl = document.createElement('button');
                    itemEl.innerText = item;
                    itemEl.classList.add('switcher-item');
                    itemEl.classList.toggle('switcher-active-item', item === activeItem);
                    itemEl.addEventListener('click', function() {
                    onItemClicked(item);
                    });
                    switcherElement.appendChild(itemEl);
                    return itemEl;
                });

                function onItemClicked(item) {
                    if (item === activeItem) {
                    return;
                    }

                    intervalElements.forEach(function(element, index) {
                    element.classList.toggle('switcher-active-item', items[index] === item);
                    });

                    activeItem = item;

                    activeItemChangedCallback(item);
                }

                return switcherElement;
                }

                var switcherElement = createSimpleSwitcher(['Dark', 'Light'], 'Dark', syncToTheme);

                var chartElement = document.createElement('div');

                var chart = LightweightCharts.createChart(chartElement, {
                width: 600,
                height: 300,
                rightPriceScale: {
                    borderVisible: false,
                },
                timeScale: {
                    borderVisible: false,
                },
                });

                document.body.appendChild(chartElement);
                document.body.appendChild(switcherElement);

                var areaSeries = chart.addAreaSeries({
                topColor: 'rgba(33, 150, 243, 0.56)',
                bottomColor: 'rgba(33, 150, 243, 0.04)',
                lineColor: 'rgba(33, 150, 243, 1)',
                lineWidth: 2,
                });

                var darkTheme = {
                chart: {
                    layout: {
                    background: {
                        type: 'solid',
                        color: '#2B2B43',
                    },
                    lineColor: '#2B2B43',
                    textColor: '#D9D9D9',
                    },
                    watermark: {
                    color: 'rgba(0, 0, 0, 0)',
                    },
                    crosshair: {
                    color: '#758696',
                    },
                    grid: {
                    vertLines: {
                        color: '#2B2B43',
                    },
                    horzLines: {
                        color: '#363C4E',
                    },
                    },
                },
                series: {
                    topColor: 'rgba(32, 226, 47, 0.56)',
                    bottomColor: 'rgba(32, 226, 47, 0.04)',
                    lineColor: 'rgba(32, 226, 47, 1)',
                },
                };

                const lightTheme = {
                chart: {
                    layout: {
                    background: {
                        type: 'solid',
                        color: '#FFFFFF',
                    },
                    lineColor: '#2B2B43',
                    textColor: '#191919',
                    },
                    watermark: {
                    color: 'rgba(0, 0, 0, 0)',
                    },
                    grid: {
                    vertLines: {
                        visible: false,
                    },
                    horzLines: {
                        color: '#f0f3fa',
                    },
                    },
                },
                series: {
                    topColor: 'rgba(33, 150, 243, 0.56)',
                    bottomColor: 'rgba(33, 150, 243, 0.04)',
                    lineColor: 'rgba(33, 150, 243, 1)',
                },
                };

                var themesData = {
                Dark: darkTheme,
                Light: lightTheme,
                };

                function syncToTheme(theme) {
                chart.applyOptions(themesData[theme].chart);
                areaSeries.applyOptions(themesData[theme].series);
                }

                areaSeries.setData([{
                    time: Veces,
                    value: Mes
                }
                ]);
syncToTheme('Dark');


        },
        error: function(error) {
            console.log("Error al obtener datos de pacientes:", error);
        }
    });

   /*  $.ajax({
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
        },
        error: function(error) {
            console.log("Error al obtener datos de pacientes:", error);
        }
    }); */
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