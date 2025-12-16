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
                    <button class="btn btn-secondary" style="min-height: 36px">Filter</button>
                    <button class="btn btn-primaries" style="min-height: 36px" onclick="tambahLaporanProduksi()">Tambah</button>
                    <button class="btn btn-success" style="min-height: 36px">Export Excel</button>
                    <button class="btn btn-danger" style="min-height: 36px">Export PDF</button>
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
                            <button class="btn btn-ghost" onclick="openDetail(1)">
                                Detail
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Dress Lurik</td>
                        <td>120</td>
                        <td>2025-10-21</td>
                        <td>Dalam Proses</td>
                        <td>
                            <button class="btn btn-ghost" onclick="openDetail(2)">
                                Detail
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-template>

<div id="modalTambahProduksi" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Edit Bahan</h3>
            <button class="btn btn-ghost" onclick="closeModalTambah()" style="font-size: 20px">×</button>
        </div>
        <div class="modal-body">
            <div style="margin-top: 3px">
                <label for='produk' style="font-size: 12px; color: #17233A;">Produk</label>
                <select name="produk" id="produk" class="form-group">
                    <option value disabled selected>Pilih Produk</option>
                    <option value="1">Kemeja Batik</option>
                    <option value="2">Dress Lurik</option>
                    <option value="3">Kain Lurik 1m</option>
                    <option value="4">Jaket Denim</option>
                </select>
            </div>
            <div style="margin-top: 3px">
                <label for='jumlah' style="font-size: 12px; color: #17233A;">Jumlah Diproduksi</label>
                <input class="form-group" type='number' name='jumlah' id='jumlah'>
            </div>
            <div style="margin-top: 3px">
                <label for='tanggal' style="font-size: 12px; color: #17233A;">Tanggal</label>
                <input class="form-group" type='date' name='tanggal' id='tanggal'>
            </div>
            <div style="margin-top: 3px">
                <label for='status' style="font-size: 12px; color: #17233A;">Status</label>
                <select name="status" id="status" class="form-group">
                    <option value="1">Selesai</option>
                    <option value="2">Dalam Proses</option>
                    <option value="3">Pending</option>
                </select>
            </div>
        </div>
        <br>
        <div class="modal-footer">
            <button class="btn btn-primary" style="background: #0d6efd" onclick="simpanTambahProduksi()">Simpan</button>
        </div>
    </div>
</div>

<div id="modalDetail1" class="modal-overlay" style="display: none">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Detail Laporan Produksi</h3>
            <button class="btn btn-ghost" onclick="closeModalDetail(1)" style="font-size: 20px">×</button>
        </div>
        <div class="modal-body">
            <p style="margin-top: 10px"><strong>Produk: </strong>Kemeja Batik</p>
            <p style="margin-top: 10px"><strong>Jumlah Diproduksi: </strong>200</p>
            <p style="margin-top: 10px"><strong>Tanggal: </strong>2025-10-20</p>
            <p style="margin-top: 10px"><strong>Status: </strong>Selesai</p>
        </div>
    </div>
</div>
<div id="modalDetail2" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Detail Laporan Produksi</h3>
            <button class="btn btn-ghost" onclick="closeModalDetail(2)" style="font-size: 20px">×</button>
        </div>
        <div class="modal-body">
            <p style="margin-top: 10px"><strong>Produk: </strong>Dress Lurik</p>
            <p style="margin-top: 10px"><strong>Jumlah Diproduksi: </strong>120</p>
            <p style="margin-top: 10px"><strong>Tanggal: </strong>2025-10-21</p>
            <p style="margin-top: 10px"><strong>Status: </strong>Dalam Proses</p>
        </div>
    </div>
</div>

<script>
    function openDetail(index) {
        document.getElementById('modalDetail' + index).style.display = 'flex';
    }

    function closeModalDetail(index) {
        document.getElementById('modalDetail' + index).style.display = 'none';
    }

    function tambahLaporanProduksi() {
        document.getElementById('modalTambahProduksi').style.display = 'flex';
    }

    function closeModalTambah() {
        document.getElementById('modalTambahProduksi').style.display = 'none';
    }
</script>