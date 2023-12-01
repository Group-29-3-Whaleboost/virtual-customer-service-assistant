<?php
    $selected_branch_name = "Colombo"; //Replace the branch name
?>


<!-- included the header -->
<?php include(APPPATH . 'views/includes/header.php'); ?>

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
</head>

<style>
#content-wrapper>div>a.card.search-card {
    text-decoration: none;
}

#content-wrapper>div>a.card.checkout-card {
    text-decoration: none;
}

html {
    position: relative;
    min-height: 100%;
}

body {
    height: 100%;
}

#wrapper {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}

#wrapper #content-wrapper {
    overflow-x: hidden;
    width: 100%;
    padding-top: 1rem;
    padding-bottom: 80px;
}

body.fixed-nav #content-wrapper {
    margin-top: 56px;
    padding-left: 90px;
}

body.fixed-nav.sidebar-toggled #content-wrapper {
    padding-left: 0;
}

@media (min-width: 768px) {
    body.fixed-nav #content-wrapper {
        padding-left: 225px;
    }

    body.fixed-nav.sidebar-toggled #content-wrapper {
        padding-left: 90px;
    }
}

.scroll-to-top {
    position: fixed;
    right: 15px;
    bottom: 15px;
    display: none;
    width: 50px;
    height: 50px;
    text-align: center;
    color: #fff;
    background: rgba(52, 58, 64, 0.5);
    line-height: 46px;
}

.scroll-to-top:focus,
.scroll-to-top:hover {
    color: white;
}

.scroll-to-top:hover {
    background: #343a40;
}

.scroll-to-top i {
    font-weight: 800;
}

.smaller {
    font-size: 0.7rem;
}

.o-hidden {
    overflow: hidden !important;
}

.z-0 {
    z-index: 0;
}

.z-1 {
    z-index: 1;
}

.navbar-nav .form-inline .input-group {
    width: 100%;
}

.navbar-nav .nav-item.active-5 .nav-link {
    color: #fff;
}

.navbar-nav .nav-item.dropdown .dropdown-toggle::after {
    width: 1rem;
    text-align: center;
    float: right;
    vertical-align: 0;
    border: 0;
    font-weight: 900;
    content: '\f105';
    font-family: 'Font Awesome 5 Free';
}

.navbar-nav .nav-item.dropdown.show .dropdown-toggle::after {
    content: '\f107';
}

.navbar-nav .nav-item.dropdown.no-arrow .dropdown-toggle::after {
    display: none;
}

.navbar-nav .nav-item .nav-link:focus {
    outline: none;
}

.navbar-nav .nav-item .nav-link .badge {
    position: absolute;
    margin-left: 0.75rem;
    top: 0.3rem;
    font-weight: 400;
    font-size: 0.5rem;
}

@media (min-width: 768px) {
    .navbar-nav .form-inline .input-group {
        width: auto;
    }
}

.sidebar {
    width: 90px !important;
    background-color: #212529;
    min-height: calc(100vh - 56px);
}

.sidebar .nav-item:last-child {
    margin-bottom: 1rem;
}

.sidebar .nav-item .nav-link {
    text-align: center;
    padding: 0.75rem 1rem;
    width: 90px;
}

.sidebar .nav-item .nav-link span {
    font-size: 0.65rem;
    display: block;
}

.sidebar .nav-item .dropdown-menu {
    position: absolute !important;
    -webkit-transform: none !important;
    transform: none !important;
    left: calc(90px + 0.5rem) !important;
    margin: 0;
}

.sidebar .nav-item .dropdown-menu.dropup {
    bottom: 0;
    top: auto !important;
}

.sidebar .nav-item.dropdown .dropdown-toggle::after {
    display: none;
}

.sidebar .nav-item .nav-link {
    color: rgba(255, 255, 255, 0.5);
}

.sidebar .nav-item .nav-link:active,
.sidebar .nav-item .nav-link:focus,
.sidebar .nav-item .nav-link:hover {
    color: rgba(255, 255, 255, 0.75);
}

.sidebar.toggled {
    width: 0 !important;
    overflow: hidden;
}

@media (min-width: 768px) {
    .sidebar {
        width: 225px !important;
    }

    .sidebar .nav-item .nav-link {
        display: block;
        width: 100%;
        text-align: left;
        padding: 1rem;
        width: 225px;
    }

    .sidebar .nav-item .nav-link span {
        font-size: 1rem;
        display: inline;
    }

    .sidebar .nav-item .dropdown-menu {
        position: static !important;
        margin: 0 1rem;
        top: 0;
    }

    .sidebar .nav-item.dropdown .dropdown-toggle::after {
        display: block;
    }

    .sidebar.toggled {
        overflow: visible;
        width: 90px !important;
    }

    .sidebar.toggled .nav-item:last-child {
        margin-bottom: 1rem;
    }

    .sidebar.toggled .nav-item .nav-link {
        text-align: center;
        padding: 0.75rem 1rem;
        width: 90px;
    }

    .sidebar.toggled .nav-item .nav-link span {
        font-size: 0.65rem;
        display: block;
    }

    .sidebar.toggled .nav-item .dropdown-menu {
        position: absolute !important;
        -webkit-transform: none !important;
        transform: none !important;
        left: calc(90px + 0.5rem) !important;
        margin: 0;
    }

    .sidebar.toggled .nav-item .dropdown-menu.dropup {
        bottom: 0;
        top: auto !important;
    }

    .sidebar.toggled .nav-item.dropdown .dropdown-toggle::after {
        display: none;
    }
}

.sidebar.fixed-top {
    top: 56px;
    height: calc(100vh - 56px);
    overflow-y: auto;
}

.card-body-icon {
    position: absolute;
    z-index: 0;
    top: -1.25rem;
    right: -1rem;
    opacity: 0.4;
    font-size: 5rem;
    -webkit-transform: rotate(15deg);
    transform: rotate(15deg);
}

@media (min-width: 576px) {
    .card-columns {
        -webkit-column-count: 1;
        column-count: 1;
    }
}

@media (min-width: 768px) {
    .card-columns {
        -webkit-column-count: 2;
        column-count: 2;
    }
}

@media (min-width: 1200px) {
    .card-columns {
        -webkit-column-count: 2;
        column-count: 2;
    }
}

:root {
    --input-padding-x: 0.75rem;
    --input-padding-y: 0.75rem;
}

.card-login {
    max-width: 25rem;
}

.card-register {
    max-width: 40rem;
}

.form-label-group {
    position: relative;
}

.form-label-group>input,
.form-label-group>label {
    padding: var(--input-padding-y) var(--input-padding-x);
    height: auto;
}

.form-label-group>label {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    margin-bottom: 0;
    /* Override default `<label>` margin */
    line-height: 1.5;
    color: #495057;
    border: 1px solid transparent;
    border-radius: 0.25rem;
    -webkit-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
    color: transparent;
}

.form-label-group input:-ms-input-placeholder {
    color: transparent;
}

.form-label-group input::-ms-input-placeholder {
    color: transparent;
}

.form-label-group input::placeholder {
    color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
    padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
    padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
    padding-top: calc(var(--input-padding-y) / 3);
    padding-bottom: calc(var(--input-padding-y) / 3);
    font-size: 12px;
    color: #777;
}

footer.sticky-footer {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    position: absolute;
    right: 0;
    bottom: 0;
    width: calc(100% - 90px);
    height: 80px;
    background-color: #e9ecef;
}

footer.sticky-footer .copyright {
    line-height: 1;
    font-size: 0.8rem;
}

@media (min-width: 768px) {
    footer.sticky-footer {
        width: calc(100% - 225px);
    }
}

body.sidebar-toggled footer.sticky-footer {
    width: 100%;
}

@media (min-width: 768px) {
    body.sidebar-toggled footer.sticky-footer {
        width: calc(100% - 90px);
    }
}

body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
}

.dashboard {
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 78vh;
}

.card {
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    padding: 20px;
    margin: 10px;
    max-width: 300px;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.fa-shopping-basket {

    display: none;
}

.search-card {
    background-color: #FFD699;
}

.checkout-card {
    background-color: #AED9E0;
}

h2 {
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 20px;
    color: #333;
}

.card:hover {
    transform: scale(1.05);
}

/* Media query for small screen sizes */
@media (max-width: 600px) {
    .dashboard {
        flex-wrap: wrap;
        /* Allow cards to wrap on smaller screens */
    }

    .card {
        flex: 1 0 100%;
        /* Make each card take the full width on smaller screens */
        margin: 5px;
        /* Adjust the margin to create spacing between the cards */
    }
}

.logo {
    display: flex;
    /* Set the container to use flex display */
    align-items: center;
    /* Align items vertically in the center */
}

.logo button {
    margin-left: 20px;
}

.logo img {
    width: 50px;
    /* Adjust the image width as needed */
    height: 50px;
    /* Adjust the image height as needed */
    margin-right: 10px;
    /* Add some spacing between the image and the text */
}

.logo h4 {
    margin: 0;
    /* Remove default margin to avoid extra spacing */
    color: #fff;
    /* Set the text color to white */
    font-size: 24px;
    /* Adjust the font size as needed */
}

a {
    color: black;
}

a:hover {
    text-decoration: none;
}

/* Complaint */
.borderless td,
.borderless th {
    border: none;
}

.card-img-top {
    width: 200px;
    height: 200px;
    align-self: center;
}

h1 {
    margin-bottom: 50px;
}
</style>

<body id="page-top">
    <!-- included the navbar -->
    <?php include(APPPATH . 'views/includes/manager_navbar.php'); ?>

    <div id="wrapper">

        <!-- included the menu -->
        <?php include(APPPATH . 'views/includes/manager_menu.php'); ?>

        <div id="content-wrapper">
            <!-- Code of Complaint page -->

            <!-- View Complaint Modal -->
            <div class="modal fade" id="complaintViewModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">View Complaint</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <p id="view_name" class="form-control"></p>
                            </div>
                            <div class="mb-3">
                                <label for="">Date</label>
                                <p id="view_date" class="form-control"></p>
                            </div>
                            <div class="mb-3">
                                <label for="">Branch Name</label>
                                <p id="view_branch_name" class="form-control"></p>
                            </div>
                            <div class="mb-3">
                                <label for="">Description</label>
                                <p id="view_description" class="form-control" style="height: 120px"></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="container p-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-5">
                            <h4 class="text-center">Customer Complaints

                            </h4>
                        </div>
                        <div class="shadow-lg mb-5 bg-body-tertiary rounded">
                            <table id="myTable" class="table borderless">

                                <tbody>
                                    <?php

                                    $con = mysqli_connect("localhost","root","","customer_service_assistant");

                                    if(!$con){
                                        die('Connection Failed'. mysqli_connect_error());
                                    }

                                    $query = "SELECT * FROM complaint JOIN customer ON complaint.customer_id = customer.customer_id JOIN branch ON complaint.branch_id = branch.branch_id WHERE branch.branch_name = '$selected_branch_name' ORDER BY complaint.complaint_id DESC";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $complaint)
                                        {
                                            ?>
                                    <tr class="text-center">
                                        <td>
                                            <img src="<?php base_url() ?> assets\images\user-image\<?= $complaint['profile_picture'] ?>"
                                                style="border-radius: 50%; width: 30px; height: 30px;">
                                        </td>
                                        <td><?= $complaint['name'] ?></td>
                                        <td><?= $complaint['branch_name'] ?></td>
                                        <td><?= $complaint['date'] ?></td>
                                        <td>
                                            <button type="button" value="<?=$complaint['complaint_id'];?>"
                                                class="viewcomplaintBtn btn btn-info btn-sm"><i
                                                    class="fa-solid fa-eye fa-beat"></i></button>

                                        </td>


                                    </tr>
                                    <?php
                                        }
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

            <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

            <script>
            $(document).on('click', '.viewcomplaintBtn', function() {

                var complaint_id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "<?php base_url() ?> assets/js/complaint-code.php?complaint_id=" +
                        complaint_id,
                    success: function(response) {

                        var res = jQuery.parseJSON(response);
                        if (res.status == 404) {

                            alert(res.message);
                        } else if (res.status == 200) {

                            $('#view_description').text(res.data.description);
                            $('#view_date').text(res.data.date);
                            $('#view_branch_name').text(res.data.branch_name);
                            $('#view_name').text(res.data.name);

                            $('#complaintViewModal').modal('show');
                        }
                    }
                });
            });
            </script>


            <!-- Footer area -->
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
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    ! function(t) {
        "use strict";


        t("#sidebarToggle").click(function(e) {
            e.preventDefault();
            t("body").toggleClass("sidebar-toggled");
            t(".sidebar").toggleClass("toggled");
        });


        t("body.fixed-nav .sidebar").on("mousewheel DOMMouseScroll wheel", function(e) {
            if (768 < t(window).width()) {
                var o = e.originalEvent;
                var delta = o.wheelDelta || -o.detail;
                this.scrollTop += 30 * (delta < 0 ? 1 : -1);
                e.preventDefault();
            }
        });


        t(document).scroll(function() {
            if (100 < t(this).scrollTop()) {
                t(".scroll-to-top").fadeIn();
            } else {
                t(".scroll-to-top").fadeOut();
            }
        });

        t(document).on("click", "a.scroll-to-top", function(e) {
            var target = t(this);
            t("html, body").stop().animate({
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