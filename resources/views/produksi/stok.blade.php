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
            <input id="search" name="search" placeholder="Cari permintaan..." class="search-bar form-group">
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
                <tbody id="tableBody">
                    <tr>
                        <td>1</td>
                        <td>BB-001</td>
                        <td>Kain Lurik</td>
                        <td>5</td>
                        <td>Meter</td>
                        <td>
                            <button class="btn btn-warning" onclick="openEditStok(1)">Edit</button>
                            <button class="btn btn-danger" onclick="deleteRecord(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>BB-002</td>
                        <td>Tinta Pewarna</td>
                        <td>75</td>
                        <td>Roll</td>
                        <td>
                            <button class="btn btn-warning" onclick="openEditStok(2)">Edit</button>
                            <button class="btn btn-danger" onclick="deleteRecord(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-template>

<!-- ================= MODAL EDIT 1 ================= -->
<div id="modalEditStok1" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Edit Bahan</h3>
            <button class="btn btn-ghost" onclick="closeModalEdit(1)" style="font-size:20px">×</button>
        </div>

        <form class="modal-body" onsubmit="updateStok(event,1)">
            <div style="margin-top:3px">
                <label style="font-size:12px;color:#17233A;">Kode Bahan</label>
                <input class="form-group" type="text" id="kode" value="BB-001" required>
            </div>

            <div style="margin-top:3px">
                <label style="font-size:12px;color:#17233A;">Nama Bahan</label>
                <input class="form-group" type="text" id="bahan" value="Kain Lurik" required>
            </div>

            <div style="margin-top:3px">
                <label style="font-size:12px;color:#17233A;">Jumlah</label>
                <input class="form-group" type="number" id="jumlah" value="5" required>
            </div>

            <div style="margin-top:3px">
                <label style="font-size:12px;color:#17233A;">Satuan</label>
                <input class="form-group" type="text" id="satuan" value="Meter" required>
            </div>

            <br>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>

<!-- ================= MODAL EDIT 2 ================= -->
<div id="modalEditStok2" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Edit Bahan</h3>
            <button class="btn btn-ghost" onclick="closeModalEdit(2)" style="font-size:20px">×</button>
        </div>

        <form class="modal-body" onsubmit="updateStok(event,2)">
            <div style="margin-top:3px">
                <label style="font-size:12px;color:#17233A;">Kode Bahan</label>
                <input class="form-group" type="text" id="kode" value="BB-002">
            </div>

            <div style="margin-top:3px">
                <label style="font-size:12px;color:#17233A;">Nama Bahan</label>
                <input class="form-group" type="text" id="bahan" value="Tinta Pewarna">
            </div>

            <div style="margin-top:3px">
                <label style="font-size:12px;color:#17233A;">Jumlah</label>
                <input class="form-group" type="number" id="jumlah" value="75">
            </div>

            <div style="margin-top:3px">
                <label style="font-size:12px;color:#17233A;">Satuan</label>
                <input class="form-group" type="text" id="satuan" value="Roll">
            </div>

            <br>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>

<script>
function openEditStok(index){
    document.getElementById('modalEditStok'+index).style.display = 'flex';
}

function closeModalEdit(index){
    document.getElementById('modalEditStok'+index).style.display = 'none';
}

function deleteRecord(button){
    if(confirm("Yakin hapus bahan ini?")){
        button.closest('tr').remove();
    }
}

function updateStok(e, index){
    e.preventDefault();

    const form = e.target;
    const kode = form.querySelector('#kode').value;
    const bahan = form.querySelector('#bahan').value;
    const jumlah = form.querySelector('#jumlah').value;
    const satuan = form.querySelector('#satuan').value;

    const row = document.querySelector('#tableBody').rows[index - 1];

    row.cells[1].textContent = kode;
    row.cells[2].textContent = bahan;
    row.cells[3].textContent = jumlah;
    row.cells[4].textContent = satuan;

    closeModalEdit(index);
}
</script>
