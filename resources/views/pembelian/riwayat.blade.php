<x-template>
    <h1 class="title">Riwayat</h1>
    <ul class="breadcrumbs">
        <li><a href="/">Home</a></li>
        <li class="divider">/</li>
        <li><a href="{{ route('riwayat') }}" class="active">Riwayat</a></li>
    </ul>
    <div class="panel">
        <h2 style="margin: 5px 0;">Riwayat Purchase Order (PO)</h2>
        <div class="table-responsive">
            <table class="responsive-table">
                <thead>
                    <tr>
                        <th>No PO</th>
                        <th>Supplier</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PO-2025-003</td>
                        <td>Sumber Batik</td>
                        <td>2025-07-10</td>
                        <td>Rp 500.000</td>
                        <td>Menunggu Approve</td>
                        <td>
                            <button class="btn btn-primary">Approve</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PO-2025-002</td>
                        <td>CV. Kain Lurik</td>
                        <td>2025-06-25</td>
                        <td>Rp 1.200.000</td>
                        <td>Dikirim</td>
                        <td>
                            <button class="btn btn-ghost">Selesai</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PO-2025-001</td>
                        <td>CV. Subur Jaya</td>
                        <td>2025-06-20</td>
                        <td>Rp 1.300.000</td>
                        <td>Diterima</td>
                        <td>
                            <button class="btn btn-ghost">Selesai</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-template>
<script>
document.addEventListener("click", function(e) {

    // Jika tombol yang diklik adalah tombol Approve
    if (e.target.classList.contains("btn-primary") && e.target.textContent === "Approve") {
        alert("PO PO-2025-003 telah di-approve dan sedang diproses.");
        let row = e.target.closest("tr"); // ambil baris tempat tombol berada

        // Ubah status menjadi "Dikirim"
        row.querySelector("td:nth-child(5)").textContent = "Dikirim";

        // Ubah tombol menjadi "Selesai"
        e.target.classList.remove("btn-primary");
        e.target.classList.add("btn-ghost");
        e.target.textContent = "Selesai";
    }

});
</script>
