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
                <strong>Master Barang (Bahan & Barang Jadi)</strong>
                <div class="muted">
                    Tambahkan barang baku & produk
                </div>
            </div>
            <div>
                <button class="btn btn-primary">Tambah Barang</button>
            </div>
        </div>
        <div style="background:var(--card); padding:8px; border-radius:10px; border:1px solid var(--glass);">
            <table>
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
                            <button class="btn btn-ghost edit-supplier">Edit</button>
                            <button class="btn btn-danger delete-supplier">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>BATIK-01</td>
                        <td>Batik Lurik Slim</td>
                        <td>Baarng Jadi</td>
                        <td>pcs</td>
                        <td>8</td>
                        <td>
                            <button class="btn btn-ghost edit-supplier">Edit</button>
                            <button class="btn btn-danger delete-supplier">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-template>