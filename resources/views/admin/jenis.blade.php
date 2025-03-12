<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis - Sistem Perpustakaan</title>
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
                        <a class="nav-link" href="dashboard.html">
                            <i class="fas fa-home me-2"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kategori.html">
                            <i class="fas fa-bookmark me-2"></i> Kategori
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="jenis.html">
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
                        <span class="navbar-brand">Jenis Buku</span>
                        <div class="d-flex">
                            <span class="navbar-text me-3">
                                <i class="fas fa-user-circle me-1"></i> Admin
                            </span>
                        </div>
                    </div>
                </nav>

                <main>
                    <div class="container-fluid">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h2>Daftar Jenis Buku</h2>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahJenisModal">
                                <i class="fas fa-plus me-1"></i> Tambah Jenis
                            </button>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Jenis</th>
                                                <th>Nama Jenis</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="jenisTableBody">
                                            <tr>
                                                <td>1</td>
                                                <td>NVL</td>
                                                <td>Novel</td>
                                                <td>Buku cerita fiksi dengan alur yang panjang</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning me-1" onclick="editJenis(1)">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" onclick="hapusJenis(1)">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>KMK</td>
                                                <td>Komik</td>
                                                <td>Buku cerita bergambar dengan dialog</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning me-1" onclick="editJenis(2)">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" onclick="hapusJenis(2)">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>ENS</td>
                                                <td>Ensiklopedia</td>
                                                <td>Buku referensi yang berisi informasi tentang berbagai topik</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning me-1" onclick="editJenis(3)">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" onclick="hapusJenis(3)">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>MJL</td>
                                                <td>Majalah</td>
                                                <td>Publikasi berkala yang membahas berbagai topik tertentu</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning me-1" onclick="editJenis(4)">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" onclick="hapusJenis(4)">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>EBK</td>
                                                <td>E-Book</td>
                                                <td>Buku dalam format digital yang dapat dibaca secara elektronik</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning me-1" onclick="editJenis(5)">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" onclick="hapusJenis(5)">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Jenis -->
    <div class="modal fade" id="tambahJenisModal" tabindex="-1" aria-labelledby="tambahJenisModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahJenisModalLabel">Tambah Jenis Buku Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="tambahJenisForm">
                        <div class="mb-3">
                            <label for="kodeJenis" class="form-label">Kode Jenis</label>
                            <input type="text" class="form-control" id="kodeJenis" placeholder="Masukkan kode jenis" required>
                        </div>
                        <div class="mb-3">
                            <label for="namaJenis" class="form-label">Nama Jenis</label>
                            <input type="text" class="form-control" id="namaJenis" placeholder="Masukkan nama jenis" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsiJenis" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsiJenis" rows="3" placeholder="Masukkan deskripsi jenis"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="simpanJenisBtn">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Jenis -->
    <div class="modal fade" id="editJenisModal" tabindex="-1" aria-labelledby="editJenisModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editJenisModalLabel">Edit Jenis</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editJenisForm">
                        <input type="hidden" id="editJenisId">
                        <div class="mb-3">
                            <label for="editKodeJenis" class="form-label">Kode Jenis</label>
                            <input type="text" class="form-control" id="editKodeJenis" required>
                        </div>
                        <div class="mb-3">
                            <label for="editNamaJenis" class="form-label">Nama Jenis</label>
                            <input type="text" class="form-control" id="editNamaJenis" required>
                        </div>
                        <div class="mb-3">
                            <label for="editDeskripsiJenis" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="editDeskripsiJenis" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="updateJenisBtn">Perbarui</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="hapusJenisModal" tabindex="-1" aria-labelledby="hapusJenisModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusJenisModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus jenis buku ini?</p>
                    <input type="hidden" id="hapusJenisId">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" id="konfirmasiHapusBtn">Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    {{-- <script>
        // Data jenis buku (simulasi database)
        let jenisData = [
            { id: 1, kode: 'NVL', nama: 'Novel', deskripsi: 'Buku cerita fiksi dengan alur yang panjang' },
            { id: 2, kode: 'KMK', nama: 'Komik', deskripsi: 'Buku cerita bergambar dengan dialog' },
            { id: 3, kode: 'ENS', nama: 'Ensiklopedia', deskripsi: 'Buku referensi yang berisi informasi tentang berbagai topik' },
            { id: 4, kode: 'MJL', nama: 'Majalah', deskripsi: 'Publikasi berkala yang membahas berbagai topik tertentu' },
            { id: 5, kode: 'EBK', nama: 'E-Book', deskripsi: 'Buku dalam format digital yang dapat dibaca secara elektronik' }
        ];

        // DOM Elements
        const jenisTableBody = document.getElementById('jenisTableBody');
        const tambahJenisForm = document.getElementById('tambahJenisForm');
        const editJenisForm = document.getElementById('editJenisForm');
        const simpanJenisBtn = document.getElementById('simpanJenisBtn');
        const updateJenisBtn = document.getElementById('updateJenisBtn');
        const konfirmasiHapusBtn = document.getElementById('konfirmasiHapusBtn');
        const logoutBtn = document.getElementById('logoutBtn');

        // Tambah jenis buku baru
        simpanJenisBtn.addEventListener('click', function() {
            const kodeJenis = document.getElementById('kodeJenis').value;
            const namaJenis = document.getElementById('namaJenis').value;
            const deskripsiJenis = document.getElementById('deskripsiJenis').value;

            if (kodeJenis && namaJenis) {
                const newId = jenisData.length > 0 ? jenisData[jenisData.length - 1].id + 1 : 1;

                const newJenis = {
                    id: newId,
                    kode: kodeJenis,
                    nama: namaJenis,
                    deskripsi: deskripsiJenis
                };

                jenisData.push(newJenis);
                renderTable();
                tambahJenisForm.reset();

                const modal = bootstrap.Modal.getInstance(document.getElementById('tambahJenisModal'));
                modal.hide();

                showAlert('Jenis buku berhasil ditambahkan!', 'success');
            }
        });

        // Edit jenis buku
        function editJenis(id) {
            const jenis = jenisData.find(item => item.id === id);

            if (jenis) {
                document.getElementById('editJenisId').value = jenis.id;
                document.getElementById('editKodeJenis').value = jenis.kode;
                document.getElementById('editNamaJenis').value = jenis.nama;
                document.getElementById('editDeskripsiJenis').value = jenis.deskripsi;

                const editModal = new bootstrap.Modal(document.getElementById('editJenisModal'));
                editModal.show();
            }
        }

        // Update jenis buku
        updateJenisBtn.addEventListener('click', function() {
            const id = parseInt(document.getElementById('editJenisId').value);
            const kode = document.getElementById('editKodeJenis').value;
            const nama = document.getElementById('editNamaJenis').value;
            const deskripsi = document.getElementById('editDeskripsiJenis').value;

            if (kode && nama) {
                const index = jenisData.findIndex(item => item.id === id);

                if (index !== -1) {
                    jenisData[index] = {
                        id: id,
                        kode: kode,
                        nama: nama,
                        deskripsi: deskripsi
                    };

                    renderTable();

                    const modal = bootstrap.Modal.getInstance(document.getElementById('editJenisModal'));
                    modal.hide();

                    showAlert('Jenis buku berhasil diperbarui!', 'info');
                }
            }
        });

        // Hapus jenis buku
        function hapusJenis(id) {
            document.getElementById('hapusJenisId').value = id;
            const hapusModal = new bootstrap.Modal(document.getElementById('hapusJenisModal'));
            hapusModal.show();
        }

        // Konfirmasi hapus jenis
        konfirmasiHapusBtn.addEventListener('click', function() {
            const id = parseInt(document.getElementById('hapusJenisId').value);
            const index = jenisData.findIndex(item => item.id === id);

            if (index !== -1) {
                jenisData.splice(index, 1);
                renderTable();

                const modal = bootstrap.Modal.getInstance(document.getElementById('hapusJenisModal'));
                modal.hide();

                showAlert('Jenis buku berhasil dihapus!', 'warning');
            }
        });

        // Render tabel jenis buku
        function renderTable() {
            jenisTableBody.innerHTML = '';

            jenisData.forEach((jenis, index) => {
                const row = document.createElement('tr');

                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${jenis.kode}</td>
                    <td>${jenis.nama}</td>
                    <td>${jenis.deskripsi}</td>
                    <td>
                        <button class="btn btn-sm btn-warning me-1" onclick="editJenis(${jenis.id})">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="btn btn-sm btn-danger" onclick="hapusJenis(${jenis.id})">
                            <i class="fas fa-trash"></i> Hapus
                        </button>
                    </td>
                `;

                jenisTableBody.appendChild(row);
            });
        }

        // Show alert message
        function showAlert(message, type) {
            const alertDiv = document.createElement('div');
            alertDiv.className = `alert alert-${type} alert-dismissible fade show mt-3`;
            alertDiv.innerHTML = `
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            `;

            const container = document.querySelector('main .container-fluid');
            container.insertBefore(alertDiv, container.firstChild);

            // Auto dismiss after 3 seconds
            setTimeout(() => {
                const bsAlert = new bootstrap.Alert(alertDiv);
                bsAlert.close();
            }, 3000);
        }

        // Logout functionality
        logoutBtn.addEventListener('click', function() {
            if (confirm('Apakah Anda yakin ingin keluar?')) {
                window.location.href = 'login.html';
            }
        });

        // Initialize table
        renderTable();
    </script> --}}
</body>
</html>
