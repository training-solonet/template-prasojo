<x-template>
    <div class="container-title">
        <h1 class="title">Laporan Efisiensi</h1>
    </div>
    <ul class="breadcrumbs">
        <li><a href="/">Home</a></li>
        <li class="divider">/</li>
        <li><a href="{{ route('laporan.efisiensi') }}" class="active">Efisiensi</a></li>
    </ul>
    <div class="panel">
        <div class="space-between">
            <div>
                <h2><strong>Laporan Efisiensi</strong></h2>
            </div>
            <div class="toolbar">
                <div>
                    <input type="date" class="input-date form-group">
                    <input type="date" class="input-date form-group">
                </div>
                <div>
                    <button class="btn btn-secondary" style="min-height:36px">Filter</button>
                    <button class="btn btn-primaries" style="min-height:36px" onclick="tambahLaporanEfisiensi()">Tambah</button>
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
                        <th>Shift</th>
                        <th>Produk</th>
                        <th>Jumlah Produk</th>
                        <th>Jam Kerja</th>
                        <th>Efisiensi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <tr>
                        <td>1</td>
                        <td>Pagi</td>
                        <td>Kemeja Batik</td>
                        <td>200</td>
                        <td>8</td>
                        <td>95%</td>
                        <td>
                            <button class="btn btn-ghost" onclick="openDetail(1)">Detail</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Malam</td>
                        <td>Dress Lurik</td>
                        <td>120</td>
                        <td>6</td>
                        <td>87%</td>
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
<div id="modalTambahEfisiensi" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <form onsubmit="simpanTambahEfisiensi(event)">
            <div class="modal-header">
                <h3>Tambah Laporan Efisiensi</h3>
                <button type="button" class="btn btn-ghost" onclick="closeModalTambah()" style="font-size:20px">×</button>
            </div>

            <div class="modal-body">
                <div style="margin-top:3px">
                    <label style="font-size:12px;color:#17233A;">Shift</label>
                    <select id="shift" class="form-group" required>
                        <option value="" disabled selected>Pilih Shift</option>
                        <option>Pagi</option>
                        <option>Siang</option>
                        <option>Malam</option>
                    </select>
                </div>
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
                    <label style="font-size:12px;color:#17233A;">Jumlah Produksi</label>
                    <input id="jumlah" type="number" class="form-group" required>
                </div>

                <div style="margin-top:3px">
                    <label style="font-size:12px;color:#17233A;">Jam Kerja</label>
                    <input id="jamkerja" type="number" class="form-group" required>
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
            <h3>Detail Laporan Efisiensi</h3>
            <button class="btn btn-ghost" onclick="closeModalDetail(1)" style="font-size:20px">×</button>
        </div>
        <div class="modal-body">
            <p><strong>Shift:</strong> Pagi</p>
            <p><strong>Produk:</strong> Kemeja Batik</p>
            <p><strong>Jumlah Produk:</strong> 200</p>
            <p><strong>Jam Kerja:</strong> 8</p>
            <p><strong>Efisiensi:</strong> 95%</p>
        </div>
    </div>
</div>

<div id="modalDetail2" class="modal-overlay" style="display:none">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Detail Laporan Efisiensi</h3>
            <button class="btn btn-ghost" onclick="closeModalDetail(2)" style="font-size:20px">×</button>
        </div>
        <div class="modal-body">
            <p><strong>Shift:</strong> Malam</p>
            <p><strong>Produk:</strong> Dress Lurik</p>
            <p><strong>Jumlah Produk:</strong> 120</p>
            <p><strong>Jam Kerja:</strong> 6</p>
            <p><strong>Efisiensi:</strong> 87%</p>
        </div>
    </div>
</div>

<script>
    let detailCounter = 2;

    function tambahLaporanEfisiensi() {
        document.getElementById('modalTambahEfisiensi').style.display = 'flex';
    }

    function closeModalTambah() {
        document.getElementById('modalTambahEfisiensi').style.display = 'none';
    }

    function openDetail(id) {
        document.getElementById('modalDetail' + id).style.display = 'flex';
    }

    function closeModalDetail(id) {
        document.getElementById('modalDetail' + id).style.display = 'none';
    }

    function simpanTambahEfisiensi(e) {
        e.preventDefault();

        const shift = document.getElementById('shift').value;
        const produk = document.getElementById('produk').value;
        const jumlah = document.getElementById('jumlah').value;
        const jamkerja = document.getElementById('jamkerja').value;

        const efisiensi = Math.round((jumlah / jamkerja) * 100);

        const tableBody = document.getElementById('tableBody');
        const no = tableBody.rows.length + 1;

        detailCounter++;
        const modalId = `modalDetail${detailCounter}`;

        // ===== TAMBAH BARIS TABEL =====
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${no}</td>
            <td>${shift}</td>
            <td>${produk}</td>
            <td>${jumlah}</td>
            <td>${jamkerja}</td>
            <td>${efisiensi}%</td>
            <td>
                <button class="btn btn-ghost" onclick="openDetail(${detailCounter})">Detail</button>
            </td>
        `;
        tableBody.appendChild(row);

        // ===== BUAT MODAL DETAIL BARU =====
        const modal = document.createElement('div');
        modal.id = modalId;
        modal.className = 'modal-overlay';
        modal.style.display = 'none';
        modal.innerHTML = `
            <div class="modal-box">
                <div class="modal-header">
                    <h3>Detail Laporan Efisiensi</h3>
                    <button class="btn btn-ghost" onclick="closeModalDetail(${detailCounter})" style="font-size:20px">×</button>
                </div>
                <div class="modal-body">
                    <p><strong>Shift:</strong> ${shift}</p>
                    <p><strong>Produk:</strong> ${produk}</p>
                    <p><strong>Jumlah Produk:</strong> ${jumlah}</p>
                    <p><strong>Jam Kerja:</strong> ${jamkerja}</p>
                    <p><strong>Efisiensi:</strong> ${efisiensi}%</p>
                </div>
            </div>
        `;
        document.body.appendChild(modal);

        e.target.reset();
        closeModalTambah();
    }
</script>
