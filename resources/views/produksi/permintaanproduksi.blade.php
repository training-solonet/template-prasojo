<x-template>
    <div class="container-title">
        <h1 class="title">Permintaan Produksi</h1>
    </div>
    <ul class="breadcrumbs">
        <li><a href="/">Home</a></li>
        <li class="divider">/</li>
        <li><a href="{{ route('permintaan.produksi') }}" class="active">Produk</a></li>
    </ul>
    <div class="panel">
        <div class="space-between">
            <div>
                <strong>Daftar Permintaan Produksi Barang Jadi</strong>
                <div class="muted">
                    Data permintaan produksi yang siap dibuatkan SPP
                </div>
            </div>
        </div>
        <div style="background:var(--card); margin-top:20px; padding:8px; border-radius:10px; border:1px solid var(--glass);">
            <input id="search" name="search" placeholder="Cari permintaan..." class=" search-bar form-group">
            <br>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Permintaan</th>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        <th>Marketing</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>REQ-2025-003</td>
                        <td>Kemeja Batik</td>
                        <td>200</td>
                        <td>Dina</td>
                        <td><span class="info-warning">Menunggu SPP</span></td>
                        <td>25 Okt 2025</td>
                        <td><button 
                                class="btn-spp" 
                                data-index="0" 
                                data-no="REQ-2025-003" 
                                data-produk="Kemeja Batik" 
                                data-jumlah="200"
                                onclick="openBuatSPP(this)">
                                Buat SPP
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>REQ-2025-002</td>
                        <td>Dress Lurik</td>
                        <td>120</td>
                        <td>Rina</td>
                        <td><span class="info-success">SPP Terbit</span></td>
                        <td>26 Okt 2025</td>
                        <td>
                            -
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-template>

<div id="modalBuatSPP" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Buat Surat Perintah Produksi (SPP)</h3>
            <button class="btn btn-ghost" onclick="closeBuatSPP()" style="font-size: 20px">×</button>
        </div>
        <div class="modal-body">
            <div style="margin-top: 3px">
                <label for='noSPP' style="font-size: 12px; color: #17233A;">No SPP</label>
                <input class="form-group" type='text' name='noSPP' id='noSPP' readonly>
            </div>
            <div style="margin-top: 3px">
                <label for='noPermintaan' style="font-size: 12px; color: #17233A;">No Permintaan</label>
                <input class="form-group" type='text' name='noPermintaan' id='noPermintaan' readonly>
            </div>
            <div style="margin-top: 3px">
                <label for='produk' style="font-size: 12px; color: #17233A;" readonly>Produk</label>
                <input class="form-group" type='text' name='produk' id='produk'>
            </div>
            <div style="margin-top: 3px">
                <label for='jumlahProduksi' style="font-size: 12px; color: #17233A;">Jumlah Produksi</label>
                <input class="form-group" type='number' name='jumlahProduksi' id='jumlahProduksi'>
            </div>
            <div style="margin-top: 3px">
                <label for='keterangan' style="font-size: 12px; color: #17233A;">Keterangan</label>
                <textarea class="form-group" type='text' name='keterangan' id='keterangan'></textarea>
            </div>
        </div>
        <br>
        <div class="modal-footer">
            <button class="btn btn-primary" onclick="simpanBuatSPP()">Simpan</button>
        </div>
    </div>
</div>

<script>
    const modalSPP = document.getElementById('modalBuatSPP');
    let currentButton = null;

    function openBuatSPP(data){
        currentButton = data;
        modalSPP.style.display = 'flex';
        document.getElementById('noPermintaan').value = data.dataset.no;
        document.getElementById('produk').value = data.dataset.produk;
        document.getElementById('jumlahProduksi').value = data.dataset.jumlah;
        document.getElementById('noSPP').value = 'SPP-2025-339';
    }

    function closeBuatSPP(data){
        modalSPP.style.display = 'none';
    }

    function simpanBuatSPP(){
        alert('SPP SPP-2025-429 untuk permintaan REQ-2025-003 berhasil disimpan!');
        modalSPP.style.display = 'none';

        let row = currentButton.closest("tr");

        let status = row.querySelector("td:nth-child(6) span")
        status.textContent = "SPP Terbit";
        status.classList.remove("info-warning");
        status.classList.add("info-success");

        let button = row.querySelector("td:nth-child(8)");
        button.innerHTML = '-';
    }
</script>