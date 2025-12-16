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
                <button class="btn btn-primary" onclick="buatPermintaan()">Buat Permintaan</button>
            </div>
        </div>
        <div class="table-responsive">
            <input id="search" name="search" placeholder="Cari permintaan..." class=" search-bar form-group">
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
            <label style="font-size: 12px; color: #17233A;">No PR</label>
            <input type="text" class="input form-group" id="nopr" value="PR-2025-003" readonly required>

            <label style="font-size: 12px; color: #17233A;">Nama Bahan</label>
            <input type="text" class="input form-group" id="bahan" required>

            <div class="container">
                <div>
                    <label for="jenis" style="font-size: 12px; color: #17233A;">Jumlah</label>
                    <input type="number" class="input form-group" id="jumlah" required>
                </div>
                <div>
                    <label style="font-size: 12px; color: #17233A;">Satuan</label>
                    <input type="text" class="input form-group" id="satuan" required>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-ghost" onclick="closeModal()">Batal</button>
            <button class="btn btn-primary" onclick="storeData()">Simpan</button>
        </div>
    </div>
</div>

<div id="modalEditBahan1" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Buat Permintaan Bahan Baku</h3>
            <button class="btn btn-close btn-ghost" onclick="closeEdit(1)">Tutup</button>
        </div>

        <div class="modal-body">
            <label style="font-size: 12px; color: #17233A;">No PR</label>
            <input type="text" class="input form-group" id="nopr" value="PR-2025-001">

            <label style="font-size: 12px; color: #17233A;">Nama Bahan</label>
            <input type="text" class="input form-group" id="bahan" value="Benang Lurik">

            <div class="container">
                <div>
                    <label for="jenis" style="font-size: 12px; color: #17233A;">Jumlah</label>
                    <input type="number" class="input form-group" id="jumlah" value="20">
                </div>
                <div>
                    <label style="font-size: 12px; color: #17233A;">Satuan</label>
                    <input type="text" class="input form-group" id="satuan" value="meter">
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-ghost" onclick="closeEdit(1)">Batal</button>
            <button class="btn btn-primary" onclick="updateData(this)">Simpan</button>
        </div>
    </div>
</div>
<div id="modalEditBahan2" class="modal-overlay" style="display:none;">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Buat Permintaan Bahan Baku</h3>
            <button class="btn btn-close btn-ghost" onclick="closeEdit(2)">Tutup</button>
        </div>

        <div class="modal-body">
            <label style="font-size: 12px; color: #17233A;">No PR</label>
            <input type="text" class="input form-group" id="nopr" value="PR-2025-002">

            <label style="font-size: 12px; color: #17233A;">Nama Bahan</label>
            <input type="text" class="input form-group" id="bahan" value="Tinta Pewarna">

            <div class="container">
                <div>
                    <label for="jenis" style="font-size: 12px; color: #17233A;">Jumlah</label>
                    <input type="number" class="input form-group" id="jumlah" value="10">
                </div>
                <div>
                    <label style="font-size: 12px; color: #17233A;">Satuan</label>
                    <input type="text" class="input form-group" id="satuan" value="liter">
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-primary" onclick="updateData(this)">Simpan</button>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('modalBuatPermintaan');
    const tableBody = document.getElementById('tableBody');
    const noprInput = document.getElementById('nopr');

    function buatPermintaan(){
        modal.style.display = "flex";
    }

    function closeModal(){
        modal.style.display = "none";
    }

    function getNextNoPR(){
        let lastRow = tableBody.rows[tableBody.rows.length - 1];
        let lastNoPR = lastRow.cells[1].innerText; // PR-2025-004

        let lastNumber = parseInt(lastNoPR.split('-')[2]); // 004 → 4
        let nextNumber = lastNumber + 1;

        return `PR-2025-${String(nextNumber).padStart(3, '0')}`;
    }

    function storeData(){
        const nopr = noprInput.value;
        const bahan = document.getElementById('bahan').value;
        const jumlah = document.getElementById('jumlah').value;
        const satuan = document.getElementById('satuan').value;

        const rowCount = tableBody.rows.length + 1;

        const row = `
            <tr>
                <td>${rowCount}</td>
                <td>${nopr}</td>
                <td>${bahan}</td>
                <td>${jumlah}</td>
                <td>${satuan}</td>
                <td>Pending</td>
                <td>
                    <button class="btn btn-warning">Edit</button>
                    <button class="btn btn-danger" onclick="deleteRecord(this)">Delete</button>
                </td>
            </tr>
        `;

        tableBody.insertAdjacentHTML('beforeend', row);

        // reset form
        document.getElementById('bahan').value = "";
        document.getElementById('jumlah').value = "";
        document.getElementById('satuan').value = "";

        // set No PR berikutnya
        noprInput.value = getNextNoPR();

        closeModal();
    }

    function deleteRecord(el){
        el.closest('tr').remove();
    }

    function updateData(button){
        let modalBox = button.closest('.modal-box');

        const nopr = modalBox.querySelector('#nopr').value;
        const bahan = modalBox.querySelector('#bahan').value;
        const jumlah = modalBox.querySelector('#jumlah').value;
        const satuan = modalBox.querySelector('#satuan').value;

        const modalId = button.closest('.modal-overlay').id;
        const rowIndex = modalId.replace('modalEditBahan', '');

        const editButtonInTable = document.querySelector(`button[onclick="openEditBahan(${rowIndex})"]`);
        if (editButtonInTable) {
            const tableRow = editButtonInTable.parentElement.parentElement;

            const cells = tableRow.querySelectorAll('td');
            
            cells[1].textContent = nopr;
            cells[2].textContent = bahan;
            cells[3].textContent = jumlah;
            cells[4].textContent = satuan;
            
            closeEdit(rowIndex);
            
            const editButton = cells[5].querySelector('.btn-warning');
            editButton.setAttribute('data-nopr', nopr);
            editButton.setAttribute('data-bahan', bahan);
            editButton.setAttribute('data-jumlah', jumlah);
            editButton.setAttribute('data-satuan', satuan);
        }
    }

    function openEditBahan(index){
        let modal = document.getElementById('modalEditBahan' + index);
        modal.style.display = 'flex';
    }

    function closeEdit(index){
        let modal = document.getElementById('modalEditBahan' + index);
        modal.style.display = 'none';
    }
</script>