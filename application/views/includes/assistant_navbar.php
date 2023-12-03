<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

<a class="navbar-brand mr-1" href="#">
    <div class="logo">
        <img style="width: 30px;" src="<?php base_url() ?> assets\images\logo.png" alt="CAS">
        <h4 class="productTitile">Customer Service Assistant</h4>
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</a>




<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <div class="input-group">

        <div class="input-group-append">

        </div>
    </div>
</form>


<ul class="navbar-nav ml-auto ml-md-0">

    <li class="nav-item dropdown no-arrow">

        <div class="d-flex align-items-center">
    <i class="fas fa-shopping-basket fa-fw myicon" id="cartIcon"></i>(<span class="total-count" style="color: white;"></span>)
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
       aria-haspopup="trueSS" aria-expanded="false">
       <i class="fas fa-user-circle fa-fw"></i>
    </a>


        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?php echo site_url("CustomerServiceAssistantProfile") ?>">Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url("Auth") ?>">Logout</a>
        </div>
    </li>
</ul>

</nav>
