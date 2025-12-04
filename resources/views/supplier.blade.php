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
        <div style="background:var(--card); padding:8px; border-radius:10px; border:1px solid var(--glass);">
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
                            <button class="btn btn-ghost edit-supplier">Edit</button>
                            <button class="btn btn-danger delete-supplier">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>CV. Kain Lurik</td>
                        <td>01823854923</td>
                        <td>14</td>
                        <td>Desa Tenun</td>
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