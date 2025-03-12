<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori - Sistem Perpustakaan</title>
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
                        <a class="nav-link active" href="kategori.html">
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
                        <span class="navbar-brand">Kategori Buku</span>
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
                            <h2>Daftar Kategori</h2>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahKategoriModal">
                                <i class="fas fa-plus me-1"></i> Tambah Kategori
                            </button>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Kategori</th>
                                                <th>Nama Kategori</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="kategoriTableBody">
                                            <tr>
                                                <td>1</td>
                                                <td>FIK</td>
                                                <td>Fiksi</td>
                                                <td>Buku-buku fiksi dan sastra</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning me-1" onclick="editKategori(1)">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" onclick="hapusKategori(1)">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>NFK</td>
                                                <td>Non-Fiksi</td>
                                                <td>Buku-buku non-fiksi dan pengetahuan umum</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning me-1" onclick="editKategori(2)">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" onclick="hapusKategori(2)">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>ILM</td>
                                                <td>Ilmiah</td>
                                                <td>Buku-buku ilmiah dan penelitian</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning me-1" onclick="editKategori(3)">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" onclick="hapusKategori(3)">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>SJR</td>
                                                <td>Sejarah</td>
                                                <td>Buku-buku sejarah dan budaya</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning me-1" onclick="editKategori(4)">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" onclick="hapusKategori(4)">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>PND</td>
                                                <td>Pendidikan</td>
                                                <td>Buku-buku pendidikan dan pembelajaran</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning me-1" onclick="editKategori(5)">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" onclick="hapusKategori(5)">
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

    <!-- Modal Tambah Kategori -->
    <div class="modal fade" id="tambahKategoriModal" tabindex="-1" aria-labelledby="tambahKategoriModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahKategoriModalLabel">Tambah Kategori Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="tambahKategoriForm">
                        <div class="mb-3">
                            <label for="kodeKategori" class="form-label">Kode Kategori</label>
                            <input type="text" class="form-control" id="kodeKategori" placeholder="Masukkan kode kategori" required>
                        </div>
                        <div class="mb-3">
                            <label for="namaKategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="namaKategori" placeholder="Masukkan nama kategori" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsiKategori" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsiKategori" rows="3" placeholder="Masukkan deskripsi kategori"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="simpanKategoriBtn">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Kategori -->
    <div class="modal fade" id="editKategoriModal" tabindex="-1" aria-labelledby="editKategoriModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editKategoriModalLabel">Edit Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editKategoriForm">
                        <input type="hidden" id="editKategoriId">
                        <div class="mb-3">
                            <label for="editKodeKategori" class="form-label">Kode Kategori</label>
                            <input type="text" class="form-control" id="editKodeKategori" required>
                        </div>
                        <div class="mb-3">
                            <label for="editNamaKategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="editNamaKategori" required>
                        </div>
                        <div class="mb-3">
                            <label for="editDeskripsiKategori" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="editDeskripsiKategori" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="updateKategoriBtn">Update</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="konfirmasiHapusModal" tabindex="-1" aria-labelledby="konfirmasiHapusModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="konfirmasiHapusModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus kategori ini?</p>
                    <input type="hidden" id="hapusKategoriId">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" id="konfirmasiHapusBtn">Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    {{-- <script>
        // Data sampel kategori
        const kategoriData = [
            { id: 1, kode: 'FIK', nama: 'Fiksi', deskripsi: 'Buku-buku fiksi dan sastra' },
            { id: 2, kode: 'NFK', nama: 'Non-Fiksi', deskripsi: 'Buku-buku non-fiksi dan pengetahuan umum' },
            { id: 3, kode: 'ILM', nama: 'Ilmiah', deskripsi: 'Buku-buku ilmiah dan penelitian' },
            { id: 4, kode: 'SJR', nama: 'Sejarah', deskripsi: 'Buku-buku sejarah dan budaya' },
            { id: 5, kode: 'PND', nama: 'Pendidikan', deskripsi: 'Buku-buku pendidikan dan pembelajaran' }
        ];

        // Fungsi untuk menambah kategori baru
        document.getElementById('simpanKategoriBtn').addEventListener('click', function() {
            const kode = document.getElementById('kodeKategori').value;
            const nama = document.getElementById('namaKategori').value;
            const deskripsi = document.getElementById('deskripsiKategori').value;

            if(kode && nama) {
                // Simulasi menambah data
                const newId = kategoriData.length + 1;
                kategoriData.push({ id: newId, kode: kode, nama: nama, deskripsi: deskripsi });

                // Reset form dan tutup modal
                document.getElementById('tambahKategoriForm').reset();
                const modal = bootstrap.Modal.getInstance(document.getElementById('tambahKategoriModal'));
                modal.hide();

                // Notifikasi sukses
                alert('Kategori berhasil ditambahkan!');

                // Refresh tampilan data
                // Di implementasi nyata, ini akan me-reload data dari server
            } else {
                alert('Kode dan Nama Kategori harus diisi!');
            }
        });

        // Fungsi untuk menampilkan modal edit
        function editKategori(id) {
            const kategori = kategoriData.find(item => item.id === id);
            if(kategori) {
                document.getElementById('editKategoriId').value = kategori.id;
                document.getElementById('editKodeKategori').value = kategori.kode;
                document.getElementById('editNamaKategori').value = kategori.nama;
                document.getElementById('editDeskripsiKategori').value = kategori.deskripsi;

                const editModal = new bootstrap.Modal(document.getElementById('editKategoriModal'));
                editModal.show();
            }
        }

        // Fungsi untuk update kategori
        document.getElementById('updateKategoriBtn').addEventListener('click', function() {
            const id = parseInt(document.getElementById('editKategoriId').value);
            const kode = document.getElementById('editKodeKategori').value;
            const nama = document.getElementById('editNamaKategori').value;
            const deskripsi = document.getElementById('editDeskripsiKategori').value;

            if(kode && nama) {
                // Simulasi update data
                const index = kategoriData.findIndex(item => item.id === id);
                if(index !== -1) {
                    kategoriData[index] = { id, kode, nama, deskripsi };

                    // Tutup modal
                    const modal = bootstrap.Modal.getInstance(document.getElementById('editKategoriModal'));
                    modal.hide();

                    // Notifikasi sukses
                    alert('Kategori berhasil diupdate!');

                    // Refresh tampilan data
                    // Di implementasi nyata, ini akan me-reload data dari server
                }
            } else {
                alert('Kode dan Nama Kategori harus diisi!');
            }
        });

        // Fungsi untuk menampilkan konfirmasi hapus
        function hapusKategori(id) {
            document.getElementById('hapusKategoriId').value = id;
            const konfirmasiModal = new bootstrap.Modal(document.getElementById('konfirmasiHapusModal'));
            konfirmasiModal.show();
        }

        // Fungsi untuk menghapus kategori
        document.getElementById('konfirmasiHapusBtn').addEventListener('click', function() {
            const id = parseInt(document.getElementById('hapusKategoriId').value);

            // Simulasi menghapus data
            const index = kategoriData.findIndex(item => item.id === id);
            if(index !== -1) {
                kategoriData.splice(index, 1);

                // Tutup modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('konfirmasiHapusModal'));
                modal.hide();

                // Notifikasi sukses
                alert('Kategori berhasil dihapus!');

                // Refresh tampilan data
                // Di implementasi nyata, ini akan me-reload data dari server
            }
        });

        // Logout functionality
        document.getElementById('logoutBtn').addEventListener('click', function(e) {
            e.preventDefault();
            if(confirm('Apakah Anda yakin ingin keluar?')) {
                window.location.href = 'login.html';
            }
        });
    </script> --}}
</body>
</html>
