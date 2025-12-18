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
            <h2><strong>Permintaan Bahan Baku</strong></h2>
            <button class="btn btn-primary" onclick="buatPermintaan()">Buat Permintaan</button>
        </div>

        <div class="table-responsive">
            <input placeholder="Cari permintaan..." class="search-bar form-group">
            <br>

            <table class="responsive-table">
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
                <tbody id="tableBody">
                    <tr>
                        <td>1</td>
                        <td>PR-2025-001</td>
                        <td>Benang Lurik</td>
                        <td>20</td>
                        <td>meter</td>
                        <td>Pending</td>
                        <td>
                            <button class="btn btn-warning" onclick="openEditBahan(1)">Edit</button>
                            <button class="btn btn-danger" onclick="deleteRecord(this)">Delete</button>
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
                            <button class="btn btn-warning" onclick="openEditBahan(2)">Edit</button>
                            <button class="btn btn-danger" onclick="deleteRecord(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-template>

<!-- ================= MODAL BUAT ================= -->
<div id="modalBuatPermintaan" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Buat Permintaan Bahan Baku</h3>
            <button class="btn btn-close btn-ghost" onclick="closeModal()">Tutup</button>
        </div>

        <form onsubmit="storeData(event)">
            <div class="modal-body">
                <label style="font-size:12px;color:#17233A;">No PR</label>
                <input type="text" class="input form-group" id="nopr" value="PR-2025-003" readonly required>

                <label style="font-size:12px;color:#17233A;">Nama Bahan</label>
                <input type="text" class="input form-group" id="bahan" required>

                <div class="container">
                    <div>
                        <label style="font-size:12px;color:#17233A;">Jumlah</label>
                        <input type="number" class="input form-group" id="jumlah" required>
                    </div>
                    <div>
                        <label style="font-size:12px;color:#17233A;">Satuan</label>
                        <input type="text" class="input form-group" id="satuan" required>
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

<!-- ================= MODAL EDIT 1 ================= -->
<div id="modalEditBahan1" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Edit Permintaan</h3>
            <button class="btn btn-close btn-ghost" onclick="closeEdit(1)">Tutup</button>
        </div>

        <form onsubmit="updateData(event,1)">
            <div class="modal-body">
                <label style="font-size:12px;color:#17233A;">No PR</label>
                <input class="input form-group" id="nopr" value="PR-2025-001" required>

                <label style="font-size:12px;color:#17233A;">Nama Bahan</label>
                <input class="input form-group" id="bahan" value="Benang Lurik" required>

                <div class="container">
                    <div>
                        <label style="font-size:12px;color:#17233A;">Jumlah</label>
                        <input type="number" class="input form-group" id="jumlah" value="20" required>
                    </div>
                    <div>
                        <label style="font-size:12px;color:#17233A;">Satuan</label>
                        <input class="input form-group" id="satuan" value="meter" required>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<!-- ================= MODAL EDIT 2 ================= -->
<div id="modalEditBahan2" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Edit Permintaan</h3>
            <button class="btn btn-close btn-ghost" onclick="closeEdit(2)">Tutup</button>
        </div>

        <form onsubmit="updateData(event,2)">
            <div class="modal-body">
                <label style="font-size:12px;color:#17233A;">No PR</label>
                <input class="input form-group" id="nopr" value="PR-2025-002" required>

                <label style="font-size:12px;color:#17233A;">Nama Bahan</label>
                <input class="input form-group" id="bahan" value="Tinta Pewarna" required>

                <div class="container">
                    <div>
                        <label style="font-size:12px;color:#17233A;">Jumlah</label>
                        <input type="number" class="input form-group" id="jumlah" value="10" required>
                    </div>
                    <div>
                        <label style="font-size:12px;color:#17233A;">Satuan</label>
                        <input class="input form-group" id="satuan" value="liter" required>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script>
const modal = document.getElementById('modalBuatPermintaan');
const tableBody = document.getElementById('tableBody');
const noprInput = document.getElementById('nopr');

function buatPermintaan(){ modal.style.display = "flex"; }
function closeModal(){ modal.style.display = "none"; }

function getNextNoPR(){
    let last = tableBody.rows[tableBody.rows.length-1].cells[1].innerText;
    let num = parseInt(last.split('-')[2]) + 1;
    return `PR-2025-${String(num).padStart(3,'0')}`;
}

function storeData(e){
    e.preventDefault();

    const bahan = document.getElementById('bahan').value;
    const jumlah = document.getElementById('jumlah').value;
    const satuan = document.getElementById('satuan').value;

    const rowCount = tableBody.rows.length + 1;

    tableBody.insertAdjacentHTML('beforeend', `
        <tr>
            <td>${rowCount}</td>
            <td>${noprInput.value}</td>
            <td>${bahan}</td>
            <td>${jumlah}</td>
            <td>${satuan}</td>
            <td>Pending</td>
            <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger" onclick="deleteRecord(this)">Delete</button>
            </td>
        </tr>
    `);

    e.target.reset();
    noprInput.value = getNextNoPR();
    closeModal();
}

function deleteRecord(el){
    el.closest('tr').remove();
}

function openEditBahan(i){
    document.getElementById('modalEditBahan'+i).style.display = 'flex';
}

function closeEdit(i){
    document.getElementById('modalEditBahan'+i).style.display = 'none';
}

function updateData(e, index){
    e.preventDefault();

    const form = e.target;
    const row = tableBody.rows[index-1];

    row.cells[1].textContent = form.querySelector('#nopr').value;
    row.cells[2].textContent = form.querySelector('#bahan').value;
    row.cells[3].textContent = form.querySelector('#jumlah').value;
    row.cells[4].textContent = form.querySelector('#satuan').value;

    closeEdit(index);
}
</script>
