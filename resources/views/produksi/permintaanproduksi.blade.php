<x-template>
    <div class="container-title">
        <h1 class="title">Permintaan Produksi</h1>
    </div>
    <ul class="breadcrumbs">
        <li><a href="/">Home</a></li>
        <li class="divider">/</li>
        <li><a href="{{ route('permintaan.produksi') }}" class="active">Produk</a></li>
    </ul>
    <div class="panel">
        <div class="space-between">
            <div>
                <strong>Daftar Permintaan Produksi Barang Jadi</strong>
                <div class="muted">
                    Data permintaan produksi yang siap dibuatkan SPP
                </div>
            </div>
            <div>
                <button class="btn btn-primary">Tambah Supplier</button>
            </div>
        </div>
        <div style="background:var(--card); margin-top:20px; padding:8px; border-radius:10px; border:1px solid var(--glass);">
            <table>
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
                        <td>Sumber Batik</td>
                        <td>08123456789</td>
                        <td>30</td>
                        <td>Jl. Batik No. 12</td>
                        <td>
                            <button class="btn btn-ghost edit-supplier" onclick="openModalEdit()">Edit</button>
                            <button class="btn btn-danger delete-supplier" onclick="deleteRow(this)">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>CV. Kain Lurik</td>
                        <td>01823854923</td>
                        <td>14</td>
                        <td>Desa Tenun</td>
                        <td>
                            <button class="btn btn-ghost edit-supplier" onclick="openModalEdit()">Edit</button>
                            <button class="btn btn-danger delete-supplier" onclick="deleteRow(this)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-template>