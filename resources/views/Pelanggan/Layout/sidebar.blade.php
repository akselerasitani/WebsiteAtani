        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active" style="background-color: #7F9B6E">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo" style="width: 1000px;">
                            <a href=""><img src="{{asset('images/logo-atani-horizontal.png')}}" alt="Logo" srcset="" style="width: 100%; height: 100%">
                        </a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle" style="color: white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">

                        <li class="sidebar-item active " style="background-color: #7F9B6E">
                            <a href="{{ route('dashboard.index') }}" class='sidebar-link' style="background-color: #fff;">
                                <i class="bi bi-grid-fill" style="color: black;"></i>
                                <span style="color: black">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('order.index') }}" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill" style="color: white"></i>
                                <span style="color: white">Order</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('orderstatus.index') }}" class='sidebar-link'>
                                <i class="bi bi-stack" style="color: white"></i>
                                <span style="color: white">Status Order</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="" class='sidebar-link'>
                                <i class="bi bi-bar-chart-fill" style="color: white"></i>
                                <span style="color: white">Omzet Penjualan</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{route('logoutpelanggan')}}" class='sidebar-link'>
                                <i class="bi bi-box-arrow-in-left" style="color: white"></i>
                                <span style="color: white">Logout</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>