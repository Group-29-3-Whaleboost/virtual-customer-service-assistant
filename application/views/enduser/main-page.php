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
    background-color: rgba(0, 200, 0, 0.2);

}
</style>


<body>

    <!-- navigation bar -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#">Contact Us</a>
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
            <div class="carousel-item active" data-bs-interval="15000">
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
        <button type="button" class="btn btn-success btn-lg ">SIGN IN</button>
        <button type="button" class="btn btn-success btn-lg">SIGN UP</button>
    </div>

    <h3 class="text-success legend" style="padding: 5px;">This Web Application Provide You Below Features:</h3>

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



    <p class="card mx-2 text-secondary">
        This is a web application that gives the virtual
        customer service assistant to you. You can be able to find
        their available items in the shop, search details of that item, and checkout their purchases
        in the shop without any support of human customer service assistant. And also,
        our customer service assistants can help you to Provide the best experience of shopping and best customer
        satisfaction.
    </p>

    <h4 class="legend">Contact Us</h4>
    <?php include(APPPATH . 'views/includes/footer.php'); ?>
</body>

</html>