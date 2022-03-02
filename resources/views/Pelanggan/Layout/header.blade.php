<header class="mb-3">
    
<nav class="navbar navbar-expand-sm " style="background-color: #7F9B6E; padding: 0px; height: 60%;">
  <div class="container-fluid" >
    <a class="navbar-brand" href="javascript:void(0)"><img src="{{asset('images/logo-atani-horizontal.png')}}" alt="Logo" srcset="" style="width: 100%; height: 100%"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse row" id="mynavbar" >
        <div class="col-lg-8"></div>
        <div class="col-lg-4 d-flex justify-content-end" style="padding:0px">
            <a class="nav-link d-flex align-items-center justify-content-center " href="#" >
                <img src="icon/cart.png" width="20px"   />
            </a>
            <a class="nav-link d-flex align-items-center justify-content-center " href="#" style="padding: 8px 4px">
                <img src="icon/notif.png" width="20px"  />
            </a>
            <a class="nav-link  d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="icon/profile.png" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span style="color: white; font-weight: bold">{{session()->get('user')->name}}</span>
            </a>
			
        </div>
        
    </div>
  </div>
</nav>
    
</header>