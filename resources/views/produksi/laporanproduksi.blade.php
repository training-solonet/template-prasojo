<x-template>
    <div class="container-title">
        <h1 class="title">Laporan Produksi</h1>
    </div>
    <ul class="breadcrumbs">
        <li><a href="/">Home</a></li>
        <li class="divider">/</li>
        <li><a href="{{ route('laporan.produksi') }}" class="active">Produksi</a></li>
    </ul>

    <div class="panel">
        <div class="space-between">
            <div>
                <h2><strong>Laporan Produksi</strong></h2>
            </div>
            <div class="toolbar">
                <div>
                    <input type="date" class="input-date form-group">
                    <input type="date" class="input-date form-group">
                </div>
                <div>
                    <button class="btn btn-secondary" style="min-height:36px">Filter</button>
                    <button class="btn btn-primaries" style="min-height:36px" onclick="tambahLaporanProduksi()">Tambah</button>
                    <button class="btn btn-success" style="min-height:36px">Export Excel</button>
                    <button class="btn btn-danger" style="min-height:36px">Export PDF</button>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="responsive-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Jumlah Diproduksi</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <tr>
                        <td>1</td>
                        <td>Kemeja Batik</td>
                        <td>200</td>
                        <td>2025-10-20</td>
                        <td>Selesai</td>
                        <td>
                            <button class="btn btn-ghost" onclick="openDetail(1)">Detail</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Dress Lurik</td>
                        <td>120</td>
                        <td>2025-10-21</td>
                        <td>Dalam Proses</td>
                        <td>
                            <button class="btn btn-ghost" onclick="openDetail(2)">Detail</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-template>

<!-- ===== MODAL TAMBAH (DIUBAH JADI FORM) ===== -->
<div id="modalTambahProduksi" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <form onsubmit="simpanTambahProduksi(event)">
            <div class="modal-header">
                <h3>Tambah Laporan Produksi</h3>
                <button type="button" class="btn btn-ghost" onclick="closeModalTambah()" style="font-size:20px">×</button>
            </div>

            <div class="modal-body">
                <div style="margin-top:3px">
                    <label style="font-size:12px;color:#17233A;">Produk</label>
                    <select id="produk" class="form-group" required>
                        <option value="" disabled selected>Pilih Produk</option>
                        <option>Kemeja Batik</option>
                        <option>Dress Lurik</option>
                        <option>Kain Lurik 1m</option>
                        <option>Jaket Denim</option>
                    </select>
                </div>

                <div style="margin-top:3px">
                    <label style="font-size:12px;color:#17233A;">Jumlah Diproduksi</label>
                    <input id="jumlah" type="number" class="form-group" required>
                </div>

                <div style="margin-top:3px">
                    <label style="font-size:12px;color:#17233A;">Tanggal</label>
                    <input id="tanggal" type="date" class="form-group" required>
                </div>

                <div style="margin-top:3px">
                    <label style="font-size:12px;color:#17233A;">Status</label>
                    <select id="status" class="form-group" required>
                        <option>Selesai</option>
                        <option>Dalam Proses</option>
                        <option>Pending</option>
                    </select>
                </div>
            </div>

            <br>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" style="background:#0d6efd">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>

<!-- ===== MODAL DETAIL (TIDAK DIUBAH) ===== -->
<div id="modalDetail1" class="modal-overlay" style="display:none">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Detail Laporan Produksi</h3>
            <button class="btn btn-ghost" onclick="closeModalDetail(1)" style="font-size:20px">×</button>
        </div>
        <div class="modal-body">
            <p><strong>Produk:</strong> Kemeja Batik</p>
            <p><strong>Jumlah Diproduksi:</strong> 200</p>
            <p><strong>Tanggal:</strong> 2025-10-20</p>
            <p><strong>Status:</strong> Selesai</p>
        </div>
    </div>
</div>

<div id="modalDetail2" class="modal-overlay" style="display:none">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Detail Laporan Produksi</h3>
            <button class="btn btn-ghost" onclick="closeModalDetail(2)" style="font-size:20px">×</button>
        </div>
        <div class="modal-body">
            <p><strong>Produk:</strong> Dress Lurik</p>
            <p><strong>Jumlah Diproduksi:</strong> 120</p>
            <p><strong>Tanggal:</strong> 2025-10-21</p>
            <p><strong>Status:</strong> Dalam Proses</p>
        </div>
    </div>
</div>

<script>
    function tambahLaporanProduksi() {
        document.getElementById('modalTambahProduksi').style.display = 'flex';
    }

    function closeModalTambah() {
        document.getElementById('modalTambahProduksi').style.display = 'none';
    }

    function openDetail(id) {
        document.getElementById('modalDetail' + id).style.display = 'flex';
    }

    function closeModalDetail(id) {
        document.getElementById('modalDetail' + id).style.display = 'none';
    }

    function simpanTambahProduksi(e) {
        e.preventDefault();

        const produk = document.getElementById('produk').value;
        const jumlah = document.getElementById('jumlah').value;
        const tanggal = document.getElementById('tanggal').value;
        const status = document.getElementById('status').value;

        const tableBody = document.getElementById('tableBody');
        const no = tableBody.rows.length + 1;

        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${no}</td>
            <td>${produk}</td>
            <td>${jumlah}</td>
            <td>${tanggal}</td>
            <td>${status}</td>
            <td>
                <button class="btn btn-ghost">Detail</button>
            </td>
        `;

        tableBody.appendChild(row);

        e.target.reset();
        closeModalTambah();
    }
</script>
