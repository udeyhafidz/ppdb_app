<div
    class="bg-white dark:bg-gray-900 p-8 rounded-[2.5rem] shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-gray-50 dark:border-gray-800 transition-all hover:shadow-2xl group">

    <div class="flex items-center justify-between mb-8">
        <div>
            <h2 class="text-2xl font-black text-slate-800 dark:text-white tracking-tight">
                Statistik Pendaftaran
            </h2>
            <p class="text-slate-400 text-xs font-bold uppercase tracking-widest mt-1">Laporan Real-time Tahun Ini</p>
        </div>
        <div class="bg-indigo-50 dark:bg-indigo-900/30 p-3 rounded-2xl group-hover:rotate-12 transition-transform">
            📊
        </div>
    </div>

    <div class="relative h-[300px]">
        <canvas id="statistikChart"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener("livewire:navigated", () => {
        const ctx = document.getElementById('statistikChart').getContext('2d');

        // Membuat efek Gradient Warna
        const gradientPendaftar = ctx.createLinearGradient(0, 0, 0, 400);
        gradientPendaftar.addColorStop(0, 'rgba(99, 102, 241, 1)'); // Indigo
        gradientPendaftar.addColorStop(1, 'rgba(99, 102, 241, 0.2)');

        const gradientDiterima = ctx.createLinearGradient(0, 0, 0, 400);
        gradientDiterima.addColorStop(0, 'rgba(16, 185, 129, 1)'); // Emerald
        gradientDiterima.addColorStop(1, 'rgba(16, 185, 129, 0.2)');

        const gradientDitolak = ctx.createLinearGradient(0, 0, 0, 400);
        gradientDitolak.addColorStop(0, 'rgba(244, 63, 94, 1)'); // Rose
        gradientDitolak.addColorStop(1, 'rgba(244, 63, 94, 0.2)');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['PENDAFTAR', 'DITERIMA', 'DITOLAK'],
                datasets: [{
                    label: 'Jumlah Jiwa',
                    data: [
                        @json($totalPendaftar),
                        @json($totalDiterima),
                        @json($totalDitolak)
                    ],
                    backgroundColor: [gradientPendaftar, gradientDiterima, gradientDitolak],
                    borderColor: [
                        '#6366f1',
                        '#10b981',
                        '#f43f5e'
                    ],
                    borderWidth: 2,
                    borderRadius: 15, // Membuat batang melengkung (Modern)
                    borderSkipped: false,
                    hoverBackgroundColor: [
                        '#4f46e5',
                        '#059669',
                        '#e11d48'
                    ],
                    hoverBorderWidth: 4,
                    hoverBorderColor: '#fff',
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                animation: {
                    duration: 2000,
                    easing: 'easeOutQuart'
                },
                plugins: {
                    legend: {
                        display: false // Sembunyikan legend agar lebih bersih
                    },
                    tooltip: {
                        backgroundColor: '#1e293b',
                        titleFont: {
                            size: 14,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 13
                        },
                        padding: 15,
                        cornerRadius: 12,
                        displayColors: false,
                        callbacks: {
                            label: function(context) {
                                return `Total: ${context.raw} Orang`;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true,
                            color: 'rgba(0,0,0,0.03)',
                            drawBorder: false
                        },
                        ticks: {
                            font: {
                                weight: 'bold'
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                weight: 'black',
                                size: 10
                            },
                            color: '#94a3b8'
                        }
                    }
                },
                // Interaksi Hover
                onHover: (event, chartElement) => {
                    event.native.target.style.cursor = chartElement[0] ? 'pointer' : 'default';
                }
            }
        });
    });
</script>
