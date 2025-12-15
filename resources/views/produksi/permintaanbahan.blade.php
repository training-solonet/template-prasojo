<x-template>
    <div class="container-title">
        <h1 class="title">Permintaan Bahan Baku</h1>
    </div>
    <ul class="breadcrumbs">
        <li><a href="/">Home</a></li>
        <li class="divider">/</li>
        <li><a href="{{ route('permintaan.bahan') }}" class="active">Bahan</a></li>
    </ul>
    <div class="panel">
        <div class="space-between">
            <div>
                <h2><strong>Permintaan Bahan Baku</strong></h2>
            </div>
            <div>
                <button class="btn btn-primary" onclick="buatPermintaan()">+ Buat Permintaan</button>
            </div>
        </div>
        <div style="background:var(--card); margin-top:20px; padding:8px; border-radius:10px; border:1px solid var(--glass);">
            <input id="search" name="search" placeholder="Cari permintaan..." class=" search-bar form-group">
            <br>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No PR</th>
                        <th>Nama Bahan</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PR-2025-001</td>
                        <td>Benang Lurik</td>
                        <td>20</td>
                        <td>meter</td>
                        <td>Pending</td>
                        <td><button 
                                class="btn btn-warning" 
                                data-index="1" 
                                data-nopr="PR-2025-001" 
                                data-bahan="Benang Lurik"
                                data-jumlah="20"
                                data-satuan="meter"
                                data-status="Pending"
                                onclick="openEditBahan(1)">
                                Edit
                            </button>
                            <button class="btn btn-danger" onclick="deleteRecord(this)">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PR-2025-002</td>
                        <td>Tinta Pewarna</td>
                        <td>10</td>
                        <td>liter</td>
                        <td>Disetujui</td>
                        <td>
                            <button 
                                class="btn btn-warning" 
                                data-index="1" 
                                data-nopr="PR-2025-002" 
                                data-bahan="Tinta Pewarna"
                                data-jumlah="10"
                                data-satuan="liter"
                                data-status="Disetujui"
                                onclick="openEditBahan(2)">
                                Edit
                            </button>
                            <button class="btn btn-danger" onclick="deleteRecord(this)">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-template>

<div id="modalBuatPermintaan" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Buat Permintaan Bahan Baku</h3>
            <button class="btn btn-close btn-ghost" onclick="closeModal()">Tutup</button>
        </div>

        <div class="modal-body">
            <label style="font-size: 12px; color: #17233A;">Kode Barang</label>
            <input type="text" class="input form-group" id="kode" placeholder="KODE-001">

            <label style="font-size: 12px; color: #17233A;">Nama Barang</label>
            <input type="text" class="input form-group" id="nama_barang" placeholder="Kain Lurik 1m">

            <div class="container">
                <div>
                    <label for="jenis" style="font-size: 12px; color: #17233A;">Jenis</label>
                    <select name="jenis" id="jenis" class="input form-group">
                        <option value="1">Bahan Baku</option>
                        <option value="2">Bahan Jadi</option>
                    </select>
                </div>
                <div>
                    <label style="font-size: 12px; color: #17233A;">Satuan</label>
                    <input type="text" class="input form-group" id="satuan" placeholder="meter / pcs">
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-ghost" onclick="closeModal()">Batal</button>
            <button class="btn btn-primary" onclick="storeData()">Simpan</button>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('modalBuatPermintaan');

    function buatPermintaan(){
        modal.style.display = "flex";
    }

    function closeModal(){
        modal.style.display = "none";
    }
</script>