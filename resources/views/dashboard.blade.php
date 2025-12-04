<x-template>
    <h1 class="title">Dashboard</h1>
        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
            <li class="divider">/</li>
            <li><a href="{{ route('dashboard') }}" class="active">Dashboard</a></li>
        </ul>
        <div class="info-data">
            <div class="card">
                <div class="head">
                    <div>
                        <h2>15</h2>
                        <p>Master Supplier<br>dan Barang</p>
                    </div>
                    <i class='bx bx-trending-up icon' ></i>
                </div>
                <span class="progress" data-value="40%"></span>
                <span class="label">40%</span>
            </div>
            <div class="card">
                <div class="head">
                    <div>
                        <h2>8</h2>
                        <p>Permintaan<br>Pembelian (PR)</p>
                    </div>
                    <i class='bx bx-trending-down icon down' ></i>
                </div>
                <span class="progress" data-value="60%"></span>
                <span class="label">60%</span>
            </div>
            <div class="card">
                <div class="head">
                    <div>
                        <h2>6</h2>
                        <p>Purchase Order<br>(PO)</p>
                    </div>
                    <i class='bx bx-trending-up icon' ></i>
                </div>
                <span class="progress" data-value="30%"></span>
                <span class="label">30%</span>
            </div>
            <div class="card">
                <div class="head">
                    <div>
                        <h2>45</h2>
                        <p>Riwayat<br>PO</p>
                    </div>
                    <i class='bx bx-trending-up icon' ></i>
                </div>
                <span class="progress" data-value="80%"></span>
                <span class="label">80%</span>
            </div>
            <div class="card">
                <div class="head">
                    <div>
                        <h2>12</h2>
                        <p>Pembayaran</p>
                    </div>
                    <i class='bx bx-trending-up icon' ></i>
                </div>
                <span class="progress" data-value="80%"></span>
                <span class="label">80%</span>
            </div>
        </div>
        <h1 class="subtitle" style="margin-top: 20px">Aktivitas Terbaru</h1>
        <ul class="list-content">
            <li><strong>08:30</strong> — Permintaan Pembelian #PR-2025-011 diajukan oleh Marketing</li>
            <li><strong>09:45</strong> — Purchase Order #PO-2025-007 dikonfirmasi ke Supplier Batik Jaya</li>
            <li><strong>11:10</strong> — Barang masuk dari Supplier Tekstil Sejahtera</li>
            <li><strong>13:20</strong> — Pembayaran #INV-2025-005 telah disetujui Finance</li>
            <li><strong>15:00</strong> — Riwayat PO diperbarui untuk Supplier Kain Nusantara</li>
        </ul>
        {{-- <div class="data">
            <div class="content-data">
                <div class="head">
                    <h3>Sales Report</h3>
                    <div class="menu">
                        <i class='bx bx-dots-horizontal-rounded icon'></i>
                        <ul class="menu-link">
                            <li><a href="#">Edit</a></li>
                            <li><a href="#">Save</a></li>
                            <li><a href="#">Remove</a></li>
                        </ul>
                    </div>
                </div>
                <div class="chart">
                    <div id="chart"></div>
                </div>
            </div>
            <div class="content-data">
                <div class="head">
                    <h3>Chatbox</h3>
                    <div class="menu">
                        <i class='bx bx-dots-horizontal-rounded icon'></i>
                        <ul class="menu-link">
                            <li><a href="#">Edit</a></li>
                            <li><a href="#">Save</a></li>
                            <li><a href="#">Remove</a></li>
                        </ul>
                    </div>
                </div>
                <div class="chat-box">
                    <p class="day"><span>Today</span></p>
                    <div class="msg">
                        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                        <div class="chat">
                            <div class="profile">
                                <span class="username">Alan</span>
                                <span class="time">18:30</span>
                            </div>
                            <p>Hello</p>
                        </div>
                    </div>
                    <div class="msg me">
                        <div class="chat">
                            <div class="profile">
                                <span class="time">18:30</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptatum eos quam dolores eligendi exercitationem animi nobis reprehenderit laborum! Nulla.</p>
                        </div>
                    </div>
                    <div class="msg me">
                        <div class="chat">
                            <div class="profile">
                                <span class="time">18:30</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, architecto!</p>
                        </div>
                    </div>
                    <div class="msg me">
                        <div class="chat">
                            <div class="profile">
                                <span class="time">18:30</span>
                            </div>
                            <p>Lorem ipsum, dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                <form action="#">
                    <div class="form-group">
                        <input type="text" placeholder="Type...">
                        <button type="submit" class="btn-send"><i class='bx bxs-send' ></i></button>
                    </div>
                </form>
            </div>
        </div> --}}
</x-template>