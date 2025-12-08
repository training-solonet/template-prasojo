<x-template>
    <h1 class="title">Dashboard</h1>
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li class="divider">/</li>
            <li><a href="{{ route('pembayaran') }}" class="active">Pembayaran</a></li>
        </ul>
        <div class="panel">
        <div class="space-between">
            <div>
                <strong>Histori Pembayaran</strong>
                <div class="muted">
                    Hutang / pembayaran ke supplier
                </div>
            </div>
        </div>
        <div style="background:var(--card); margin-top: 20px; padding:8px; border-radius:10px; border:1px solid var(--glass);">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Supplier</th>
                        <th>Ref</th>
                        <th>Tgl Bayar</th>
                        <th>Jumlah</th>
                        <th>Metode</th>
                        <th>Bukti Bayar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Sumber Batik</td>
                        <td>PO-2025-003</td>
                        <td>2025-07-12</td>
                        <td>Rp 500.000</td>
                        <td>Transfer</td>
                        <td><img src="{{ asset('img/bukti.jpg') }}" alt="" class="bukti-bayar"></td>
                        <td>
                            <button class="btn btn-ghost">Detail</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>CV. Kain Lurik</td>
                        <td>PO-2025-002</td>
                        <td>2025-06-28</td>
                        <td>Rp 800.000</td>
                        <td>Cash</td>
                        <td><img src="{{ asset('img/bukti.jpg') }}" alt="" class="bukti-bayar"></td>
                        <td>
                            <button class="btn btn-ghost">Detail</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-template>