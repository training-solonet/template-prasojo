<x-template>
    <h1 class="title">Master Barang</h1>

    <ul class="breadcrumbs">
        <li><a href="/">Home</a></li>
        <li class="divider">/</li>
        <li><a href="{{ route('barang') }}" class="active">Barang</a></li>
    </ul>

    <div class="panel">
        <div class="space-between">
            <div>
                <strong>Master Barang<br>(Bahan & Barang Jadi)</strong>
                <div class="muted">
                    Tambahkan barang baku & produk
                </div>
            </div>
            <div>
                <button class="btn btn-primary" id="btnTambahBarang">Tambah Barang</button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="responsive-table">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Satuan</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>KAIN-001</td>
                        <td>Kain Lurik 1m</td>
                        <td>Bahan Baku</td>
                        <td>meter</td>
                        <td>25</td>
                        <td>
                            <button class="btn btn-ghost" onclick="openModalEdit()">Edit</button>
                            <button class="btn btn-danger" onclick="deleteRow(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>BATIK-01</td>
                        <td>Batik Lurik Slim</td>
                        <td>Barang Jadi</td>
                        <td>pcs</td>
                        <td>8</td>
                        <td>
                            <button class="btn btn-ghost" onclick="openModalEdit()">Edit</button>
                            <button class="btn btn-danger" onclick="deleteRow(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-template>

<!-- ================= MODAL TAMBAH BARANG (FORM) ================= -->
<div id="modalTambahBarang" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Tambah Barang</h3>
            <button class="btn btn-close btn-ghost" onclick="closeModal()">Tutup</button>
        </div>

        <form onsubmit="storeData(event)">
            <div class="modal-body">
                <label style="font-size:12px;color:#17233A;">Kode Barang</label>
                <input type="text" class="input form-group" id="kode" placeholder="KODE-001" required>

                <label style="font-size:12px;color:#17233A;">Nama Barang</label>
                <input type="text" class="input form-group" id="nama_barang" placeholder="Kain Lurik 1m" required>

                <div class="container">
                    <div>
                        <label style="font-size:12px;color:#17233A;">Jenis</label>
                        <select id="jenis" class="input form-group" required>
                            <option value="">-- Pilih --</option>
                            <option value="Bahan Baku">Bahan Baku</option>
                            <option value="Barang Jadi">Barang Jadi</option>
                        </select>
                    </div>
                    <div>
                        <label style="font-size:12px;color:#17233A;">Satuan</label>
                        <input type="text" class="input form-group" id="satuan" placeholder="meter / pcs" required>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-ghost" onclick="closeModal()">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<!-- ================= MODAL EDIT (DUMMY, TIDAK DIUBAH) ================= -->
<div id="modalEditBarang" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Edit Barang</h3>
        </div>
        <div class="modal-body">
            <p>(dummy)</p>
        </div>
        <div class="modal-footer">
            <button class="btn btn-ghost" onclick="closeModalEdit()">Tutup</button>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('modalTambahBarang');
    const editModal = document.getElementById('modalEditBarang');
    const btnTambah = document.getElementById('btnTambahBarang');

    btnTambah.addEventListener('click', () => {
        modal.style.display = 'flex';
    });

    function closeModal(){
        modal.style.display = 'none';
    }

    function storeData(e){
        e.preventDefault(); // ⛔ cegah reload

        const kode = document.getElementById('kode');
        const nama = document.getElementById('nama_barang');
        const jenis = document.getElementById('jenis');
        const satuan = document.getElementById('satuan');

        alert('Barang disimpan (dummy).');

        modal.style.display = 'none';

        kode.value = "";
        nama.value = "";
        jenis.value = "";
        satuan.value = "";
    }

    function openModalEdit(){
        editModal.style.display = 'flex';
    }

    function closeModalEdit(){
        editModal.style.display = 'none';
    }

    function deleteRow(button){
        if(confirm("Hapus barang?")){
            button.closest('tr').remove();
        }
    }
</script>
