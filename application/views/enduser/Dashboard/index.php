<!DOCTYPE html>
<html lang="en">

<head>

    <title>Dashboard</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">



    <link rel="stylesheet" href="style.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="#">
            <div class="logo">
                <img src="https://www.pngmart.com/files/7/Cart-PNG-Clipart.png" alt="CAS">
                <h4>Customer Service Assistant</h4>
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
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="trueSS" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Notification</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#SS">Logout</a>
                </div>
            </li>
        </ul>

    </nav>


    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-search"></i>
                    <span>Search item</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-camera"></i>
                    <span>Checkout</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-question-circle"></i>
                    <span>Customer help</span></a>
            </li>
        </ul>
        <div id="content-wrapper">



            <div class="dashboard">
                <h1>Welcome Again</h1>
                <a href="#" class="card search-card">
                    <i class="fas fa-search fa-2x"></i>
                    <h2>Search Item</h2>
                </a>
                <a href="#" class="card checkout-card">
                    <i class="fas fa-camera fa-2x"></i>
                    <h2>Checkout</h2>
                </a>
            </div>






            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © <a href="#" target="_blank">Whaleboost</a> 2023</span>
                    </div>
                </div>
            </footer>
        </div>


    </div>

    


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>


    <script>
        !function (t) {
            "use strict";


            t("#sidebarToggle").click(function (e) {
                e.preventDefault();
                t("body").toggleClass("sidebar-toggled");
                t(".sidebar").toggleClass("toggled");
            });


            t("body.fixed-nav .sidebar").on("mousewheel DOMMouseScroll wheel", function (e) {
                if (768 < t(window).width()) {
                    var o = e.originalEvent;
                    var delta = o.wheelDelta || -o.detail;
                    this.scrollTop += 30 * (delta < 0 ? 1 : -1);
                    e.preventDefault();
                }
            });


            t(document).scroll(function () {
                if (100 < t(this).scrollTop()) {
                    t(".scroll-to-top").fadeIn();
                } else {
                    t(".scroll-to-top").fadeOut();
                }
            });

            t(document).on("click", "a.scroll-to-top", function (e) {
                var target = t(this);
                t("html, body").stop().animate(
                    {
                        scrollTop: t(target.attr("href")).offset().top
                    },
                    1000,
                    "easeInOutExpo"
                );
                e.preventDefault();
            });
        }(jQuery);

    </script>

</body>

</html>