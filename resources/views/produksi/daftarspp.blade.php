<x-template>
    <div class="container-title">
        <h1 class="title">Daftar SPP</h1>
    </div>
    <ul class="breadcrumbs">
        <li><a href="/">Home</a></li>
        <li class="divider">/</li>
        <li><a href="{{ route('daftar.spp') }}" class="active">SPP</a></li>
    </ul>
    <div class="panel">
        <div class="space-between">
            <div>
                <h2><strong>Daftar Surat Perintah Produksi (SPP)</strong></h2>
            </div>
        </div>
        <div style="background:var(--card); margin-top: 20px; padding:8px; border-radius:10px; border:1px solid var(--glass);">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No SPP</th>
                        <th>Tanggal</th>
                        <th>Produk</th>
                        <th>Divisi</th>
                        <th>Jumlah Item</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>SPP-2025-003</td>
                        <td>2025-10-25</td>
                        <td>Kemeja Batik</td>
                        <td>Produksi</td>
                        <td>200</td>
                        <td>Proses</td>
                        <td>
                            <button class="btn btn-spp edit-supplier" onclick="openSPP(1)">Lihat</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>SPP-2025-002</td>
                        <td>2025-10-26</td>
                        <td>Dress Lurik</td>
                        <td>Finishing</td>
                        <td>120</td>
                        <td>Selesai</td>
                        <td>
                            <button class="btn btn-spp edit-supplier" onclick="openSPP(2)">Lihat</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-template>
<div id="modalLihatSPP1" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Detail SPP</h3>
            <button class="btn btn-ghost" onclick="closeModalSPP(1)" style="font-size: 20px">×</button>
        </div>
        <div class="modal-body">
            <p style="margin-top: 10px"><strong>No SPP: </strong>SPP-2025-003</p>
            <p style="margin-top: 10px"><strong>Tanggal: </strong>2025-10-25</p>
            <p style="margin-top: 10px"><strong>Produk: </strong>Kemeja Batik</p>
            <p style="margin-top: 10px"><strong>Divisi: </strong>Produksi</p>
            <p style="margin-top: 10px"><strong>Jumlah Item: </strong>200</p>
            <p style="margin-top: 10px"><strong>Status: </strong>Proses</p>
        </div>
    </div>
</div>
<div id="modalLihatSPP2" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Detail SPP</h3>
            <button class="btn btn-ghost" onclick="closeModalSPP(2)" style="font-size: 20px">×</button>
        </div>
        <div class="modal-body">
            <p style="margin-top: 10px"><strong>No SPP: </strong>SPP-2025-002</p>
            <p style="margin-top: 10px"><strong>Tanggal: </strong>2025-10-26</p>
            <p style="margin-top: 10px"><strong>Produk: </strong>Dress Lurik</p>
            <p style="margin-top: 10px"><strong>Divisi: </strong>Finishing</p>
            <p style="margin-top: 10px"><strong>Jumlah Item: </strong>120</p>
            <p style="margin-top: 10px"><strong>Status: </strong>Selesai</p>
        </div>
    </div>
</div>

<script>
    function openSPP(index){
        let modal = document.getElementById('modalLihatSPP' + index);
        modal.style.display = "flex";
    }

    function closeModalSPP(index){
        let modal = document.getElementById('modalLihatSPP' + index)
        modal.style.display = "none";
    }
</script>