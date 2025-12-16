<x-template>
    <div class="container-title">
        <h1 class="title">Stok Bahan Baku</h1>
    </div>
    <ul class="breadcrumbs">
        <li><a href="/">Home</a></li>
        <li class="divider">/</li>
        <li><a href="{{ route('stok') }}" class="active">Stok</a></li>
    </ul>
    <div class="panel">
        <div class="space-between">
            <div>
                <strong>Stok Bahan Baku</strong>
                <div class="muted">
                    Daftar ketersediaan bahan baku untuk produksi
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <input id="search" name="search" placeholder="Cari permintaan..." class=" search-bar form-group">
            <br>
            <table class="responsive-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Bahan</th>
                        <th>Nama Bahan</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>BB-001</td>
                        <td>Kain Lurik</td>
                        <td>5</td>
                        <td>Meter</td>
                        <td><button 
                                class="btn btn-warning" 
                                data-index="1" 
                                data-kode="BB-001" 
                                data-bahan="Kain Lurik"
                                data-jumlah="5"
                                data-satuan="Meter"
                                onclick="openEditStok(1)">
                                Edit
                            </button>
                            <button class="btn btn-danger" onclick="deleteRecord(this)">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>BB-002</td>
                        <td>Tinta Pewarna</td>
                        <td>75</td>
                        <td>Roll</td>
                        <td>
                            <button 
                                class="btn btn-warning" 
                                data-index="2" 
                                data-kode="BB-002" 
                                data-bahan="Tinta Pewarna"
                                data-jumlah="75"
                                data-satuan="Roll"
                                onclick="openEditStok(2)">
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

<div id="modalEditStok1" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Edit Bahan</h3>
            <button class="btn btn-ghost" onclick="closeModalEdit(1)" style="font-size: 20px">×</button>
        </div>
        <div class="modal-body">
            <div style="margin-top: 3px">
                <label for='kode' style="font-size: 12px; color: #17233A;">Kode Bahan</label>
                <input class="form-group" type='text' name='kode' id='kode' value="BB-001">
            </div>
            <div style="margin-top: 3px">
                <label for='bahan' style="font-size: 12px; color: #17233A;">Nama Bahan</label>
                <input class="form-group" type='text' name='bahan' id='bahan' value="Kain Lurik">
            </div>
            <div style="margin-top: 3px">
                <label for='jumlah' style="font-size: 12px; color: #17233A;">Jumlah</label>
                <input class="form-group" type='number' name='jumlah' id='jumlah' value="5">
            </div>
            <div style="margin-top: 3px">
                <label for='satuan' style="font-size: 12px; color: #17233A;">Satuan</label>
                <input class="form-group" type='text' name='satuan' id='satuan' value="Meter">
            </div>
        </div>
        <br>
        <div class="modal-footer">
            <button class="btn btn-primary" onclick="updateStok(this)">Update</button>
        </div>
    </div>
</div>
<div id="modalEditStok2" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Edit Bahan</h3>
            <button class="btn btn-ghost" onclick="closeModalEdit(2)" style="font-size: 20px">×</button>
        </div>
        <div class="modal-body">
            <div style="margin-top: 3px">
                <label for='kode' style="font-size: 12px; color: #17233A;">Kode Bahan</label>
                <input class="form-group" type='text' name='kode' id='kode' value="BB-002">
            </div>
            <div style="margin-top: 3px">
                <label for='bahan' style="font-size: 12px; color: #17233A;">Nama Bahan</label>
                <input class="form-group" type='text' name='bahan' id='bahan' value="Tinta Pewarna">
            </div>
            <div style="margin-top: 3px">
                <label for='jumlah' style="font-size: 12px; color: #17233A;">Jumlah</label>
                <input class="form-group" type='number' name='jumlah' id='jumlah' value="75">
            </div>
            <div style="margin-top: 3px">
                <label for='satuan' style="font-size: 12px; color: #17233A;">Satuan</label>
                <input class="form-group" type='text' name='satuan' id='satuan' value="Roll">
            </div>
        </div>
        <br>
        <div class="modal-footer">
            <button class="btn btn-primary" onclick="updateStok(this)">Update</button>
        </div>
    </div>
</div>

<script>
    function openEditStok(index){
        let modal = document.getElementById('modalEditStok' + index);
        modal.style.display = 'flex';
    }

    function closeModalEdit(index){
        let modal = document.getElementById('modalEditStok' + index);
        modal.style.display = 'none';
    }

    function deleteRecord(button){
        if(confirm("Yakin hapus bahan ini?")){
            let row = button.parentElement.parentElement;
            row.remove();
        }
    }

    function updateStok(button){
        let modalBox = button.closest('.modal-box');

        const kode = modalBox.querySelector('#kode').value;
        const bahan = modalBox.querySelector('#bahan').value;
        const jumlah = modalBox.querySelector('#jumlah').value;
        const satuan = modalBox.querySelector('#satuan').value;

        const modalId = button.closest('.modal-overlay').id;
        const rowIndex = modalId.replace('modalEditStok', '');

        const editButtonInTable = document.querySelector(`button[onclick="openEditStok(${rowIndex})"]`);
        if (editButtonInTable) {
            const tableRow = editButtonInTable.parentElement.parentElement;

            const cells = tableRow.querySelectorAll('td');
            
            cells[1].textContent = kode;
            cells[2].textContent = bahan;
            cells[3].textContent = jumlah;
            cells[4].textContent = satuan;
            
            const editButton = cells[5].querySelector('.btn-warning');
            editButton.setAttribute('data-kode', kode);
            editButton.setAttribute('data-bahan', bahan);
            editButton.setAttribute('data-jumlah', jumlah);
            editButton.setAttribute('data-satuan', satuan);
            
            closeModalEdit(rowIndex);
        }
    }
</script>