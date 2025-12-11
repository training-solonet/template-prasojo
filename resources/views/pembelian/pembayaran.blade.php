<x-template>
    <h1 class="title">Dashboard</h1>
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li class="divider">/</li>
            <li><a href="{{ route('pembayaran') }}" class="active">Pembayaran</a></li>
        </ul>
        <div class="panel">
        <div class="space-between">
            <div>
                <strong>Histori Pembayaran</strong>
                <div class="muted">
                    Hutang / pembayaran ke supplier
                </div>
            </div>
        </div>
        <div style="background:var(--card); margin-top: 20px; padding:8px; border-radius:10px; border:1px solid var(--glass);">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Supplier</th>
                        <th>Ref</th>
                        <th>Tgl Bayar</th>
                        <th>Jumlah</th>
                        <th>Metode</th>
                        <th>Bukti Bayar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Sumber Batik</td>
                        <td>PO-2025-003</td>
                        <td>2025-07-12</td>
                        <td>Rp 500.000</td>
                        <td>Transfer</td>
                        <td><img src="{{ asset('img/bukti.jpg') }}" alt="" class="bukti-bayar" onclick="openPhoto(this)"></td>
                        <td>
                            <button class="btn btn-ghost" onclick="openDetail1()">Detail</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>CV. Kain Lurik</td>
                        <td>PO-2025-002</td>
                        <td>2025-06-28</td>
                        <td>Rp 800.000</td>
                        <td>Cash</td>
                        <td><img src="{{ asset('img/bukti.jpg') }}" alt="" class="bukti-bayar" onclick="openPhoto(this)"></td>
                        <td>
                            <button class="btn btn-ghost" onclick="openDetail2()">Detail</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-template>
{{-- Modal Photo --}}
<div id="modalPhotoContainer" class="modal-overlay-photo" style="display:none;">
    <div class="close-photo">
        <button class="modal-btn-photo" onclick="closePhoto()">×</button>
    </div>
    <div class="modal-box-photo">
        <img id="modalPhoto" src="" alt="">
    </div>
</div>
{{-- Detail Row1 --}}
<div id="modalDetail1" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Detail</h3>
        </div>
        <div class="modal-body details">
            <p><strong>Supplier: </strong>Sumber Batik</p>
            <p><strong>Referensi: </strong>PO-2025-003</p>
            <p><strong>Tanggal Bayar: </strong>2025-07-12</p>
            <p><strong>Jumlah: </strong>Rp 500.000</p>
            <p><strong>Metode: </strong>Transfer</p>
        </div>
        <div class="modal-footer">
            <button class="btn btn-ghost" onclick="closeModalDetail1()">Tutup</button>
        </div>
    </div>
</div>
{{-- Detail Row2 --}}
<div id="modalDetail2" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Detail</h3>
        </div>
        <div class="modal-body details">
            <p><strong>Supplier: </strong>CV. Kain Lurik</p>
            <p><strong>Referensi: </strong>PO-2025-002</p>
            <p><strong>Tanggal Bayar: </strong>2025-06-28</p>
            <p><strong>Jumlah: </strong>Rp 800.000</p>
            <p><strong>Metode: </strong>Cash</p>
        </div>
        <div class="modal-footer">
            <button class="btn btn-ghost" onclick="closeModalDetail2()">Tutup</button>
        </div>
    </div>
</div>
<script>
    function openPhoto(el){
        let modal = document.getElementById("modalPhotoContainer");
        let modalPhoto = document.getElementById("modalPhoto");

        modalPhoto.src = el.src;
        modal.style.display = "flex";
    }

    function closePhoto() {
        document.getElementById("modalPhotoContainer").style.display = "none";
    }

    function openDetail1(){
        alert("Lihat detail pembayaran (dummy).");
        document.getElementById("modalDetail1").style.display = "flex";
    }

    function openDetail2(){
        alert("Lihat detail pembayaran (dummy).");
        document.getElementById("modalDetail2").style.display = "flex";
    }

    function closeModalDetail1(){
        document.getElementById("modalDetail1").style.display = "none";
    }

    function closeModalDetail2(){
        document.getElementById("modalDetail2").style.display = "none";
    }
</script>