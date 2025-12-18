<x-template>
    <h1 class="title">Master Supplier</h1>

    <ul class="breadcrumbs">
        <li><a href="#">Home</a></li>
        <li class="divider">/</li>
        <li><a href="{{ route('supplier') }}" class="active">Supplier</a></li>
    </ul>

    <div class="panel">
        <div class="space-between">
            <div>
                <strong>Master Supplier</strong>
                <div class="muted">
                    Kelola data supplier
                </div>
            </div>
            <div>
                <button class="btn btn-primary" id="btnTambah">Tambah Supplier</button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="responsive-table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Kontak</th>
                        <th>Top (hari)</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Nama">Sumber Batik</td>
                        <td data-label="Kontak">08123456789</td>
                        <td data-label="Top (hari)">30</td>
                        <td data-label="Alamat">Jl. Batik No. 12</td>
                        <td data-label="Aksi">
                            <button class="btn btn-ghost" onclick="openModalEdit()">Edit</button>
                            <button class="btn btn-danger" onclick="deleteRow(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Nama">CV. Kain Lurik</td>
                        <td data-label="Kontak">01823854923</td>
                        <td data-label="Top (hari)">14</td>
                        <td data-label="Alamat">Desa Tenun</td>
                        <td data-label="Aksi">
                            <button class="btn btn-ghost" onclick="openModalEdit()">Edit</button>
                            <button class="btn btn-danger" onclick="deleteRow(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-template>

<!-- ================= MODAL TAMBAH (FORM) ================= -->
<div id="modalTambahSupplier" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Tambah Supplier</h3>
            <button class="btn btn-close btn-ghost" onclick="closeModal()">Tutup</button>
        </div>

        <form onsubmit="storeData(event)">
            <div class="modal-body">
                <label style="font-size:12px;color:#17233A;">Nama Supplier</label>
                <input type="text" class="input form-group" id="nama" required>

                <label style="font-size:12px;color:#17233A;">Kontak</label>
                <input type="text" class="input form-group" id="kontak" required>

                <label style="font-size:12px;color:#17233A;">Alamat</label>
                <input type="text" class="input form-group" id="alamat" required>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-ghost" onclick="closeModal()">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<!-- ================= MODAL EDIT (DUMMY, TIDAK DIUBAH) ================= -->
<div id="modalEditSupplier" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Edit Supplier</h3>
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
    const modal = document.getElementById('modalTambahSupplier');
    const editModal = document.getElementById('modalEditSupplier');
    const btnTambah = document.getElementById('btnTambah');

    btnTambah.addEventListener('click', () => {
        modal.style.display = 'flex';
    });

    function closeModal(){
        modal.style.display = 'none';
    }

    function storeData(e){
        e.preventDefault(); // 🔴 penting agar tidak reload

        const nama = document.getElementById('nama');
        const kontak = document.getElementById('kontak');
        const alamat = document.getElementById('alamat');

        alert('Supplier disimpan (dummy).');

        modal.style.display = 'none';

        nama.value = "";
        kontak.value = "";
        alamat.value = "";
    }

    function openModalEdit(){
        editModal.style.display = 'flex';
    }

    function closeModalEdit(){
        editModal.style.display = 'none';
    }

    function deleteRow(button){
        if(confirm("Hapus supplier?")){
            button.closest('tr').remove();
        }
    }
</script>
