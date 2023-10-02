<!DOCTYPE html>
<html lang="en">


<!-- included the header -->
<?php include(APPPATH . 'views/includes/header.php'); ?>
<link rel="stylesheet" href="<?php base_url() ?> assets\css\main.css">
<style>
.carousel-caption {
    position: absolute;
    right: 0;
    bottom: 1.25rem;
    left: min(55%);
    padding-top: 5%;
    padding-bottom: 5%;
    color: #000;
    background: rgba(0, 255, 255, 0.3);
    text-align: center;
    height: min(100%);
    content: center;
}

.main-img {
    max-width: 25%;
    height: auto;
    padding: 5%;
}

.card,
.row {
    padding: 2%;

}

.card-body {
    background-color: rgba(5, 82, 237, 0.2);

}

.footer {
    background-color: rgb(230, 230, 230);
    width: 100%
}
</style>


<body>

    <!-- navigation bar -->

    <nav id="navigation-bar" class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?php base_url() ?> assets\images\logo.png" alt="logo" width="20" height="30">
                Customer Service Assistant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#navigation-bar">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#contactus">Contact Us</a>
                    </li>
                </ul>
                <div class="d-flex" role="button">
                    <a class="btn btn-outline-success" role="button" href="#">Sign In/ Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- carousel part -->

    <div id="carouselExampleSlidesOnly" class="carousel slide my-2" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="<?php base_url() ?> assets/images/shop1.jpeg" class="img-fluid float-start" alt="Shopping">
                <div class="carousel-caption  " style="color:black">
                    <h5>Best Shopping Experience</h5>
                    <p>The best customer satisfaction shopping facilities.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="<?php base_url() ?>assets/images/assistant1.png" class="img-fluid float-start"
                    alt="Assistant">
                <div class="carousel-caption d-md-block">
                    <h5>Virtual Customer Service</h5>
                    <p>The best customization of the customer services.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php base_url() ?> assets/images/online-shop.jpeg" class="img-fluid float-start"
                    alt="Online_shopping">
                <div class="carousel-caption d-md-block">
                    <h5>Very Convenience Online Service</h5>
                    <p>
                        Through the digital space, you can buy anything you want,accessible from anywhere with internet
                        access.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!-- home discription -->


    <img class="mx-auto d-block main-img img-fluid " src="<?php base_url() ?> assets\images\logo.png" alt="...">
    <h1 class="text-center">Get Our Virtual Customer Service for Your Shopping Experience</h1>


    <div class="d-grid gap-4 container-fluid" style="padding: 5%;">
        <button type="button" class="btn btn-primary btn-lg ">SIGN IN</button>
        <button type="button" class="btn btn-primary btn-lg">SIGN UP</button>
    </div>

    <h3 id="features" class="text-success legend" style="padding: 5px;">This Web Application Provide You Below Features:
    </h3>

    <!-- card view of features -->

    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card border-success">
                <div class="card-body">
                    <h5 class="card-title">Find The Nearest Branch Easily</h5>
                    <p class="card-text">This app provides a GPS navigation
                        facility to customers navigate to the nearest branch of the shop and get the direction of
                        the shop.</p>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card border-success">
                <div class="card-body">
                    <h5 class="card-title">Find Product Details and Items’ Availability</h5>
                    <p class="card-text">Search all the
                        details of the items and check the available number of items before entering the shop.</p>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card border-info">
                <div class="card-body">
                    <h5 class="card-title">Checkout All
                        Purchases by yourself</h5>
                    <p class="card-text">Checkout their
                        own bill and pay it online by using this app or you can pay in cash as well.</p>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card border-info">
                <div class="card-body">
                    <h5 class="card-title">Notify special notification, special discount</h5>
                    <p class="card-text">Publish notifications such as discounts, latest products
                        details and You would be able to know them in proper time period.
                    </p>

                </div>
            </div>
        </div>
    </div>



    <p id="aboutus" class="card mx-2 text-secondary">
        This is a web application that gives the virtual
        customer service assistant to you. You can be able to find
        their available items in the shop, search details of that item, and checkout their purchases
        in the shop without any support of human customer service assistant. And also,
        our customer service assistants can help you to Provide the best experience of shopping and best customer
        satisfaction.
    </p>
    <p class="card mx-2 text-secondary">

        Welcome to our website! At Whaleboost INC., we are dedicated to providing top-notch Customer Service to
        meet your needs. With 2 years of experience in the industry, we have built a reputation for excellence and
        innovation. Our team of experts is committed to delivering the highest quality Virtual Customer Service
        Assistant to our valued
        customers. We pride ourselves on our customer-centric approach, striving to exceed your expectations every step
        of the way. Whether you're looking for new update and AI features, you can trust us for reliability,
        quality, and exceptional customer service. Thank you for choosing us as your Whaleboost partner, and we look
        forward to serving you with excellence.
    </p>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
            </path>
        </symbol>
        <symbol id="facebook" viewBox="0 0 16 16">
            <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
        </symbol>
        <symbol id="instagram" viewBox="0 0 16 16">
            <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
        </symbol>
        <symbol id="twitter" viewBox="0 0 16 16">
            <path
                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
        </symbol>
    </svg>
    <div class="container footer">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h4 class="legend">Contact Us</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">Whats App:</li>
                        <li class="nav-item mb-2">Email:</li>
                        <li class="nav-item mb-2">Phone No.:</li>


                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h4 class="legend">...........</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">+94 710000000</li>
                        <li class="nav-item mb-2">csa@gmail.com</li>
                        <li class="nav-item mb-2">+94 710000000</li>


                    </ul>
                </div>

                <div id="contactus" class="col-6 col-md-2 mb-3">
                    <h5>Content</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#navigation-bar" class="nav-link p-0 text-muted">Home</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#features" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#aboutus" class="nav-link p-0 text-muted">About Us</a></li>

                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">

                    <h5>Sign In to Our Application</h5>
                    <p>The best virtual customer service is provided</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <button class="btn btn-primary" type="button">Sign In/ Up</button>
                    </div>

                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>&copy; 2023 Whaleboost, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter" />
                            </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram" />
                            </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook" />
                            </svg></a></li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="<?php base_url() ?> assets\js\bootstrap.min.js"></script>
</body>

</html>