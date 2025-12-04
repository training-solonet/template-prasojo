<x-template>
    <h1 class="title">Permintaan Pembelian</h1>
    <ul class="breadcrumbs">
        <li><a href="/">Home</a></li>
        <li class="divider">/</li>
        <li><a href="{{ route('permintaan') }}" class="active">Permintaan</a></li>
    </ul>
    <div class="panel">
        <div class="space-between">
            <div>
                <strong>Permintaan Pembelian (PR)</strong>
                <div class="muted">
                    Data permintaan kebutuhan bahan
                </div>
            </div>
        </div>
        <div style="background:var(--card); padding:8px; border-radius:10px; border:1px solid var(--glass);">
            <table>
                <thead>
                    <tr>
                        <th>No PR</th>
                        <th>Tanggal</th>
                        <th>Pemohon</th>
                        <th>Nama Bahan</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PR-2025-001</td>
                        <td>2025-07-01</td>
                        <td>Produksi</td>
                        <td>Benang Lurik</td>
                        <td>50 kg</td>
                        <td>Selesai</td>
                        <td>
                            <button class="btn btn-ghost edit-supplier">Lihat</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PR-2025-002</td>
                        <td>2025-07-05</td>
                        <td>Produksi</td>
                        <td>Tinta Pewarna</td>
                        <td>30 liter</td>
                        <td>Ditolak</td>
                        <td>
                            <button class="btn btn-ghost edit-supplier">Lihat</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PR-2025-003</td>
                        <td>2025-07-01</td>
                        <td>Produksi</td>
                        <td>Kain Luik</td>
                        <td>10 meter</td>
                        <td>Menunggu PO</td>
                        <td>
                            <button class="btn btn-ghost edit-supplier">Buat PO</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-template>