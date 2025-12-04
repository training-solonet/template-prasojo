<!-- SIDEBAR -->
<section id="sidebar">
    <a href="/" class="brand"><i class='bx bxs-smile icon'></i> PRASOJO</a>
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
    <div class="ads">
        <a href="#" class="btn-log-out">Log Out</a>
    </div>
</section>
<!-- SIDEBAR -->