<x-template>
    <div class="container-title">
        <h1 class="title">Dashboard</h1>
        <p class="muted">Update: 11 Desember 2025</p>
    </div>
    <ul class="breadcrumbs">
        <li><a href="/">Home</a></li>
        <li class="divider">/</li>
        <li><a href="{{ route('dashboard.produksi') }}" class="active">Dashboard</a></li>
    </ul>
    <div class="info-data">
        <div class="card">
            <div class="head">
                <div>
                    <h2>250</h2>
                    <p>Total Stok Barang</p>
                </div>
                <i class='bx bx-trending-up icon' ></i>
            </div>
            <span class="progress" data-value="40%"></span>
            <span class="label">40%</span>
        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2>2</h2>
                    <p>Permintaan Produksi</p>
                </div>
                <i class='bx bx-trending-down icon down' ></i>
            </div>
            <span class="progress" data-value="60%"></span>
            <span class="label">60%</span>
        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2>4</h2>
                    <p>Sales Order</p>
                </div>
                <i class='bx bx-trending-up icon' ></i>
            </div>
            <span class="progress" data-value="30%"></span>
            <span class="label">30%</span>
        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2>3</h2>
                    <p>Invoice Customer</p>
                </div>
                <i class='bx bx-trending-up icon' ></i>
            </div>
            <span class="progress" data-value="80%"></span>
            <span class="label">80%</span>
        </div>
    </div>
    <h1 class="subtitle" style="margin-top: 20px">Aktivitas Terbaru</h1>
    <ul class="list-content">
        <li>SPP-2025-002 telah disetujui</li>
        <li>Permintaan bahan baku baru dari bagian gudang</li>
        <li>Laporan efisiensi minggu ini berhasil diunggah</li>
        <li>Produksi batch ‘Kemeja Batik’ selesai 90%</li>
    </ul>
</x-template>