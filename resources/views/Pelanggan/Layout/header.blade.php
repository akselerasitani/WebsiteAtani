<style>
    .hamburger,.hamburger:after,.hamburger:before{background:#495057;border-radius:1px;content:"";cursor:pointer;display:block;height:3px;transition:background .1s ease-in-out,color .1s ease-in-out;width:24px}.hamburger{position:relative}.hamburger:before{position:absolute;top:-7.5px;width:24px}.hamburger:after{bottom:-7.5px;position:absolute;width:16px}.sidebar-toggle:hover .hamburger,.sidebar-toggle:hover .hamburger:after,.sidebar-toggle:hover .hamburger:before{background:#3b7ddd}.hamburger-right,.hamburger-right:after,.hamburger-right:before{right:0}
</style>
<header class="mb-3" style="margin-left: 0px">
    
<nav class="navbar navbar-expand-sm " style="background-color: #76AC5C; padding: 0px; height: 4rem;">
  <div class="container-fluid" >
    <a class="burger-btn d-flex align-items-center " href="#" style=" margin-left: 10px; width: 25px; height: 25px;">
        <i class="hamburger" style="color: white; font-size: 24px;"></i>
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