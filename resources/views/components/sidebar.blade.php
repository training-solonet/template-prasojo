<!-- SIDEBAR -->
<section id="sidebar">
    <a href="/" class="brand">
        <div class="title-header">
            <div class="title-logo">
                <p>LP</p>
            </div>
            <div class="title-title">
                <strong class="main">Lurik Prasojo</strong>
                <p>Aplikasi Prasojo</p>
            </div>
        </div>
        <div class="subtitle">
            <p>Modul: Pengadaan & Penerimaan</p>
        </div>
    </a>
    @if (request()->session()->get('username') == "pembelian")
        <ul class="side-menu">
            <li class="divider" data-text="pembelian">Pembelian</li>
            <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : ''}}"><i class='bx bxs-dashboard icon' ></i> Dashboard</a></li>
            <li><a href="{{ route('supplier') }}" class="{{ request()->routeIs('supplier') ? 'active' : ''}}"><i class='bx bxs-chart icon' ></i> Master Supplier</a></li>
            <li><a href="{{ route('barang') }}" class="{{ request()->routeIs('barang') ? 'active' : ''}}"><i class='bx bxs-widget icon' ></i> Master Barang</a></li>
            <li><a href="{{ route('permintaan') }}" class="{{ request()->routeIs('permintaan') ? 'active' : ''}}"><i class='bx bxs-inbox icon' ></i> Permintaan Pembelian</a></li>
            <li><a href="{{ route('purchase') }}" class="{{ request()->routeIs('purchase') ? 'active' : ''}}"><i class='bx bx-table icon' ></i> Purchase Order</a></li>
            <li><a href="{{ route('riwayat') }}" class="{{ request()->routeIs('riwayat') ? 'active' : ''}}"><i class='bx bxs-notepad icon' ></i> Riwayat PO</a></li>
            <li><a href="{{ route('pembayaran') }}" class="{{ request()->routeIs('pembayaran') ? 'active' : ''}}"><i class='bx bx-dollar-circle icon'></i> Pembayaran</a></li>
        </ul>
    @elseif (request()->session()->get('username') == "produksi")
        <ul class="side-menu">
            <li class="divider" data-text="produksi">Produksi</li>
            <li><a href="{{ route('dashboard.produksi') }}" class="{{ request()->routeIs('dashboard.produksi') ? 'active' : ''}}"><i class='bx bxs-dashboard icon' ></i> Dashboard</a></li>
            <li><a href="{{ route('permintaan.produksi') }}" class="{{ request()->routeIs('permintaan.produksi') ? 'active' : ''}}"><i class='bx bxs-chart icon' ></i> Permintaan Produksi</a></li>
            <li><a href="{{ route('daftar.spp') }}" class="{{ request()->routeIs('daftar.spp') ? 'active' : ''}}"><i class='bx bxs-widget icon' ></i> Daftar SPP</a></li>
            <li><a href="{{ route('stok') }}" class="{{ request()->routeIs('stok') ? 'active' : ''}}"><i class='bx bxs-inbox icon' ></i> Stok Bahan Baku</a></li>
            <li><a href="{{ route('permintaan.bahan') }}" class="{{ request()->routeIs('permintaan.bahan') ? 'active' : ''}}"><i class='bx bx-table icon' ></i> Permintaan Bahan Baku</a></li>
            <li><a href="{{ route('laporan.produksi') }}" class="{{ request()->routeIs('laporan.produksi') ? 'active' : ''}}"><i class='bx bxs-notepad icon' ></i> Laporan Produksi</a></li>
            <li><a href="{{ route('laporan.efisiensi') }}" class=z"{{ request()->routeIs('laporan.efisiensi') ? 'active' : ''}}"><i class='bx bx-dollar-circle icon'></i> Laporan Efisiensi</a></li>
        </ul>
    @elseif (request()->session()->get('username') == "marketing")
        <ul class="side-menu">
            <li class="divider" data-text="marketing">Marketing</li>
            <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : ''}}"><i class='bx bxs-dashboard icon' ></i> Dashboard</a></li>
            <li><a href="{{ route('supplier') }}" class="{{ request()->routeIs('supplier') ? 'active' : ''}}"><i class='bx bxs-chart icon' ></i> Master Supplier</a></li>
            <li><a href="{{ route('barang') }}" class="{{ request()->routeIs('barang') ? 'active' : ''}}"><i class='bx bxs-widget icon' ></i> Master Barang</a></li>
            <li><a href="{{ route('permintaan') }}" class="{{ request()->routeIs('permintaan') ? 'active' : ''}}"><i class='bx bxs-inbox icon' ></i> Permintaan Pembelian</a></li>
            <li><a href="{{ route('purchase') }}" class="{{ request()->routeIs('purchase') ? 'active' : ''}}"><i class='bx bx-table icon' ></i> Purchase Order</a></li>
            <li><a href="{{ route('riwayat') }}" class="{{ request()->routeIs('riwayat') ? 'active' : ''}}"><i class='bx bxs-notepad icon' ></i> Riwayat PO</a></li>
            <li><a href="{{ route('pembayaran') }}" class="{{ request()->routeIs('pembayaran') ? 'active' : ''}}"><i class='bx bx-dollar-circle icon'></i> Pembayaran</a></li>
        </ul>
    @endif
    
    <div class="ads">
        <a href="{{ route('login.logout') }}" class="btn-log-out">Log Out</a>
    </div>
</section>
<!-- SIDEBAR -->