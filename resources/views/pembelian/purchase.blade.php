<x-template>
    <h1 class="title">Purchase Order</h1>
    <ul class="breadcrumbs">
        <li><a href="/">Home</a></li>
        <li class="divider">/</li>
        <li><a href="{{ route('purchase') }}" class="active">Purchase</a></li>
    </ul>
    <div class="panel">
        <div class="space-between">
            <div>
                <strong>Purchase Order (PO)</strong>
                <div class="muted">
                    Input, approve, dan kirim PO ke supplier
                </div>
            </div>
            <div class="button-group">
                <button class="btn btn-primary" onclick="tambahBaris()">Tambah Baris</button>
                <button class="btn btn-primary" onclick="simpanDanKirim()">Simpan & Kirim</button>
            </div>
        </div>
        
        <div style="background:var(--card); margin-top: 20px; padding:8px; border-radius:10px; border:1px solid var(--glass);">
            <div class="container-top" style="padding: 8px 0;">
                <div class="nomor-po">
                    <label for="nomor_po"><h5>Nomor PO</h5></label>
                    <input type="text" class="form-group" placeholder="PO-2025-003" style="margin-top: 10px">
                </div>
                <div class="supplier">
                    <label for="supplier"><h5>Supplier</h5></label>
                    <select name="supplier" id="supplier" style="margin-top: 10px">
                        <option value="1">Sumber Batik</option>
                        <option value="2">CV. Kain Lurik</option>
                    </select>
                </div>
            </div>
            <h5>Detail Item</h5>
            <div class="table-responsive">
                <table style="margin-top: 10px" class="responsive-table">
                    <thead>
                        <tr>
                            <th>Barang</th>
                            <th>Qty</th>
                            <th>Harga</th>
                            <th>Subtotal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select name="barang" id="barang" class="form-group">
                                    <option value="1" selected>Kain Lurik</option>
                                    <option value="2">Tinta Pewarna</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" name="qty" id="qty" value="10" class="form-group">
                            </td>
                            <td>
                                <input type="number" name="harga" id="harga" value="50000" class="form-group">
                            </td>
                            <td>
                                <p class="subtotal">500.000</p>
                            </td>
                            <td>
                                <button class="btn btn-ghost hapus-row">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="muted" style="margin: 10px 0;">
                Gunakan tombol "Tambah Baris" untuk menambahkan item
            </div>
            <div class="container-top">
               <div class="term-pembayaran">
                    <label for="term_pembayaran"><h5>Term Pembayaran</h5></label>
                    <select name="term_pembayaran" id="term_pembayaran" class="form-group" style="margin-top: 10px">
                        <option value="1">Top 14 hari</option>
                        <option value="2" selected>Top 30 hari</option>
                    </select>
               </div>
               <div class="catatan">
                    <label for="catatan"><h5>Catatan</h5></label>
                    <input type="text" class="form-group" placeholder="Catatan untuk supplier" style="margin-top: 10px">
               </div>
            </div>
        </div>
    </div>
</x-template>
<script>
    function simpanDanKirim(){
        alert("PO disimpan & dikirim ke supplier (dummy).");
    }

    document.addEventListener("input", function(e) {
        if (e.target.matches("input[name='qty'], input[name='harga']")) {
            hitungSubtotal(e.target.closest("tr"));
        }
    });

    function hitungSubtotal(row) {
        let qty = row.querySelector("input[name='qty']").value;
        let harga = row.querySelector("input[name='harga']").value;
        let subtotal = row.querySelector(".subtotal");

        let hasil = (qty * harga) || 0;
        subtotal.textContent = hasil.toLocaleString("id-ID");
    }

    function tambahBaris() {
        let tbody = document.querySelector("tbody");

        let tr = document.createElement("tr");
        tr.innerHTML = `
            <td>
                <select name="barang" class="form-group">
                    <option value="1">Kain Lurik</option>
                    <option value="2">Tinta Pewarna</option>
                </select>
            </td>
            <td>
                <input type="number" name="qty" class="form-group" value="0">
            </td>
            <td>
                <input type="number" name="harga" class="form-group" value="0">
            </td>
            <td>
                <p class="subtotal">0</p>
            </td>
            <td>
                <button class="btn btn-ghost hapus-row">Hapus</button>
            </td>
        `;

        tbody.appendChild(tr);
    }
    document.addEventListener("click", function(e){
        if (e.target.classList.contains("hapus-row")) {
            e.target.closest("tr").remove();
        }
    });
</script>