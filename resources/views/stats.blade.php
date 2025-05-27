<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            📊 Estadísticas y Gráficas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

            <!-- Botón de regreso -->
            <a href="{{ route('dashboard') }}"
               class="mb-4 px-4 py-2 rounded bg-gray-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 transition text-sm font-semibold text-white">
                ← Volver
            </a>

            <!-- Contenedor grid 2x2 para las 4 gráficas -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded shadow grid grid-cols-1 sm:grid-cols-2 gap-6 justify-center">

                <!-- Gráfica 1: Doughnut -->
                <div class="w-[400px] h-[400px] mx-auto">
                    <canvas id="chart1" width="400" height="400"></canvas>
                </div>

                <!-- Gráfica 2: Barra -->
                <div class="w-[400px] h-[400px] mx-auto">
                    <canvas id="chart2" width="400" height="400"></canvas>
                </div>

                <!-- Gráfica 3: Línea -->
                <div class="w-[400px] h-[400px] mx-auto">
                    <canvas id="chart3" width="400" height="400"></canvas>
                </div>

                <!-- Gráfica 4: Radar -->
                <div class="w-[400px] h-[400px] mx-auto">
                    <canvas id="chart4" width="400" height="400"></canvas>
                </div>

                <!-- Gráfica 5: Pie -->
                <div class="w-[400px] h-[400px] mx-auto">
                    <canvas id="chart5" width="400" height="400"></canvas>
                </div>           

        </div>
    </div>

    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfica 1: Doughnut
        const ctx1 = document.getElementById('chart1');
        new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: ['Educación', 'Salud', 'Gobierno', 'Urbanismo'],
                datasets: [{
                    label: 'Categorías',
                    data: [30, 25, 20, 25],
                    backgroundColor: ['#f87171', '#34d399', '#60a5fa', '#fbbf24'],
                    borderColor: '#fff',
                    borderWidth: 2,
                    hoverOffset: 40
                }]
            },
            options: {
                responsive: false,
                cutout: '65%',
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: { font: { size: 14 } }
                    },
                    tooltip: { enabled: true }
                },
                animation: {
                    duration: 1000,
                    easing: 'easeOutQuart'
                }
            }
        });

        // Gráfica 2: Barra
        const ctx2 = document.getElementById('chart2');
        new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Usuarios registrados',
                    data: [12, 19, 3, 5, 9],
                    backgroundColor: 'rgba(59, 130, 246, 0.7)',
                    borderColor: 'rgba(59, 130, 246, 1)',
                    borderWidth: 1,
                    borderRadius: 5,
                    maxBarThickness: 40
                }]
            },
            options: {
                responsive: false,
                scales: { y: { beginAtZero: true } },
                plugins: { legend: { labels: { font: { size: 14 } } } }
            }
        });

        // Gráfica 3: Línea
        const ctx3 = document.getElementById('chart3');
        new Chart(ctx3, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Progreso mensual',
                    data: [3, 6, 9, 14, 20],
                    fill: false,
                    borderColor: '#10b981',
                    backgroundColor: '#10b981',
                    tension: 0.4,
                    pointRadius: 5,
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: false,
                scales: { y: { beginAtZero: true } },
                plugins: { legend: { labels: { font: { size: 14 } } } }
            }
        });

        // Gráfica 4: Radar
        const ctx4 = document.getElementById('chart4');
        new Chart(ctx4, {
            type: 'radar',
            data: {
                labels: ['Seguridad', 'Bienestar', 'Educación', 'Salud', 'Gobierno'],
                datasets: [{
                    label: 'Índice',
                    data: [65, 59, 90, 81, 56],
                    fill: true,
                    backgroundColor: 'rgba(96, 165, 250, 0.3)',
                    borderColor: 'rgb(96, 165, 250)',
                    pointBackgroundColor: 'rgb(96, 165, 250)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(96, 165, 250)',
                }]
            },
            options: {
                responsive: false,
                scales: {
                    r: { beginAtZero: true, ticks: { stepSize: 20 } }
                },
                plugins: { legend: { labels: { font: { size: 14 } } } }
            }
        });

        // Gráfica 5: Pie
        const ctx5 = document.getElementById('chart5');
        new Chart(ctx5, {
            type: 'pie',
            data: {
                labels: ['Rojo', 'Azul', 'Amarillo', 'Verde'],
                datasets: [{
                    label: 'Colores',
                    data: [12, 19, 3, 5],
                    backgroundColor: ['#ef4444', '#3b82f6', '#facc15', '#22c55e'],
                    borderColor: '#fff',
                    borderWidth: 2,
                    hoverOffset: 40
                }]
            },
            options: {
                responsive: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: { font: { size: 14 } }
                    },
                    tooltip: { enabled: true }
                },
                animation: {
                    duration: 1200,
                    easing: 'easeOutQuart'
                }
            }
        });
    </script>
</x-app-layout>
