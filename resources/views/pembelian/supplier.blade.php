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
                <button class="btn btn-primary">Tambah Supplier</button>
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
<!-- Modal Tambah Supplier -->
<div id="modalTambahSupplier" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Tambah Supplier</h3>
            <button class="btn btn-close btn-ghost" onclick="closeModal()">Tutup</button>
        </div>

        <div class="modal-body">
            <label style="font-size: 12px; color: #17233A;">Nama Supplier</label>
            <input type="text" class="input form-group" id="nama">

            <label style="font-size: 12px; color: #17233A;">Kontak</label>
            <input type="text" class="input form-group" id="kontak">

            <label style="font-size: 12px; color: #17233A;">Alamat</label>
            <input type="text" class="input form-group" id="alamat">
        </div>

        <div class="modal-footer">
            <button class="btn btn-ghost" onclick="closeModal()">Batal</button>
            <button class="btn btn-primary" onclick="storeData()">Simpan</button>
        </div>
    </div>
</div>

{{-- Modal Edit --}}
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

    document.querySelector('.btn.btn-primary').addEventListener('click', () => {
        modal.style.display = 'flex';
    });

    function closeModal() {
        modal.style.display = 'none';
    }

    function storeData() {
        let nama = document.getElementById('nama');
        let kontak = document.getElementById('kontak');
        let alamat = document.getElementById('alamat');

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
            let row = button.parentElement.parentElement;
            row.remove();
        }
    }
</script>