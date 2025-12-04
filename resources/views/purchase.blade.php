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
                <strong>Permintaan Pembelian (PR)</strong>
                <div class="muted">
                    Data permintaan kebutuhan bahan
                </div>
            </div>
            <div>
                <button class="btn btn-primary">Tambah Baris</button>
                <button class="btn btn-primary">Simpan & Kirim</button>
            </div>
        </div>
        
        <div style="background:var(--card); padding:8px; border-radius:10px; border:1px solid var(--glass);">
            
        </div>
    </div>
</x-template>