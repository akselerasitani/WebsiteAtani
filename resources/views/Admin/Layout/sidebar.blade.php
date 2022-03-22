		<nav id="sidebar" class="sidebar js-sidebar" >
			<div class="sidebar-content js-simplebar" >
				<div style="margin-top: 5%; margin-bottom: 5%;">
					<a href=""><img src="{{asset('images/logo-atani-horizontal.png')}}" alt="Logo" srcset="" style="width: 100%; height: 100%; ">
				</div>
				<ul class="sidebar-nav">
					<li class="sidebar-item active" >
						<a class="sidebar-link" href="{{ route('admin.index') }}" style="padding-top: 6%; padding-bottom: 6%">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle" style="font-size: 16px">Dashboard</span>
                        </a>
					</li>

					<li class="sidebar-item" >
						<a class="sidebar-link" href="{{ route('pelanggan.index') }}" style="padding-top: 6%; padding-bottom: 6%">
                            <i class="align-middle" data-feather="user-check"></i> <span class="align-middle" style="font-size: 16px">Data Pelanggan</span>
                        </a>
					</li>

					<li class="sidebar-item" >
						<a class="sidebar-link" href="{{ route('kategori.index') }}" style="padding-top: 6%; padding-bottom: 6%">
                            <i class="align-middle" data-feather="list"></i> <span class="align-middle" style="font-size: 16px">Data Kategori</span>
                        </a>
					</li>

					<li class="sidebar-item" >
						<a class="sidebar-link" href="{{ route('produk.index') }}" style="padding-top: 6%; padding-bottom: 6%">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle" style="font-size: 16px">Data Produk</span>
                        </a>
					</li>

					<li class="sidebar-item" >
						<a class="sidebar-link" href="" style="padding-top: 6%; padding-bottom: 6%">
                            <i class="align-middle" data-feather="archive"></i> <span class="align-middle" style="font-size: 16px">Data Pemesanan</span>
                        </a>
					</li>

					<li class="sidebar-item" >
						<a class="sidebar-link" href="" style="padding-top: 6%; padding-bottom: 6%">
                            <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle" style="font-size: 16px">Omzet Penjualan</span>
                        </a>
					</li>

					<li class="sidebar-item" >
						<a class="sidebar-link" href="{{ route('logoutadmin') }}" style="padding-top: 6%; padding-bottom: 6%">
                            <i class="align-middle" data-feather="log-out"></i> <span class="align-middle" style="font-size: 16px">Logout</span>
                        </a>
					</li>
				</ul>
			</div>
		</nav>