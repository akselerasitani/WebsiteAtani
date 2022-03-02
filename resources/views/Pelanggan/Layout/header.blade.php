<header class="mb-3">
    
<nav class="navbar navbar-expand-sm " style="background-color: #7F9B6E; padding: 0px; height: 4rem;">
  <div class="container-fluid" >
    <a class="burger-btn d-flex align-items-center " href="#" style=" margin-left: 10px; width: 25px; height: 25px">
        <i class="bi bi-justify" style="color: white; font-size: 24px; margin-top:-10px"></i>
    </a>
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