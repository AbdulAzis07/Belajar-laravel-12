<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Perpustakaan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            color: white;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            margin-bottom: 5px;
        }
        .sidebar .nav-link:hover {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .sidebar .nav-link.active {
            color: white;
            background-color: #0d6efd;
        }
        .sidebar-header {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }
        main {
            padding: 20px;
        }
        .card-dashboard {
            border-left: 4px solid #0d6efd;
        }
        .navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar p-0">
                <div class="sidebar-header">
                    <h4>PERPUSTAKAAN</h4>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.html">
                            <i class="fas fa-home me-2"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kategori.html">
                            <i class="fas fa-bookmark me-2"></i> Kategori
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="jenis.html">
                            <i class="fas fa-book me-2"></i> Jenis
                        </a>
                    </li>
                    <li class="nav-item mt-4">
                        <a class="nav-link" href="#" id="logoutBtn">
                            <i class="fas fa-sign-out-alt me-2"></i> Keluar
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 p-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <div class="container-fluid">
                        <span class="navbar-brand">Dashboard Admin</span>
                        <div class="d-flex">
                            <span class="navbar-text me-3">
                                <i class="fas fa-user-circle me-1"></i> Admin
                            </span>
                        </div>
                    </div>
                </nav>

                <main>
                    <div class="container-fluid" id="mainContent">
                        <!-- Content will be loaded here -->
                        <h2 class="mb-4">Dashboard</h2>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4 card-dashboard">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="text-muted">Total Kategori</h6>
                                                <h3>12</h3>
                                            </div>
                                            <i class="fas fa-bookmark fa-2x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 card-dashboard">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="text-muted">Total Jenis</h6>
                                                <h3>8</h3>
                                            </div>
                                            <i class="fas fa-book fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 card-dashboard">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="text-muted">Total Buku</h6>
                                                <h3>156</h3>
                                            </div>
                                            <i class="fas fa-book-open fa-2x text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Kategori Terbanyak</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="kategoriChart" height="250"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Aktivitas Terbaru</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>
                                                    <span class="badge bg-primary rounded-pill me-2">Kategori</span>
                                                    Menambahkan kategori "Fiksi"
                                                </div>
                                                <small class="text-muted">Baru saja</small>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>
                                                    <span class="badge bg-success rounded-pill me-2">Jenis</span>
                                                    Mengubah jenis "Novel" menjadi "Novel Fiksi"
                                                </div>
                                                <small class="text-muted">5 menit yang lalu</small>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>
                                                    <span class="badge bg-danger rounded-pill me-2">Kategori</span>
                                                    Menghapus kategori "Majalah Lama"
                                                </div>
                                                <small class="text-muted">1 jam yang lalu</small>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>
                                                    <span class="badge bg-info rounded-pill me-2">Jenis</span>
                                                    Menambahkan jenis "E-Book"
                                                </div>
                                                <small class="text-muted">3 jam yang lalu</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script>
        // Logout functionality
        document.getElementById('logoutBtn').addEventListener('click', function(e) {
            e.preventDefault();
            if(confirm('Apakah Anda yakin ingin keluar?')) {
                window.location.href = 'login.html';
            }
        });

        // Chart for Kategori
        const ctx = document.getElementById('kategoriChart').getContext('2d');
        const kategoriChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Fiksi', 'Non-Fiksi', 'Ilmiah', 'Sejarah', 'Pendidikan'],
                datasets: [{
                    label: 'Jumlah Buku',
                    data: [45, 30, 25, 20, 36],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
