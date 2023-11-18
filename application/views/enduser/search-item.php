<!-- included the header -->
<?php include(APPPATH . 'views/includes/header.php'); ?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
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

.navbar-nav .nav-item.active-2 .nav-link {
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

.hide {
    display: none;
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
</style>

<body id="page-top">
    <!-- included the navbar -->
    <?php include(APPPATH . 'views/includes/navbar.php'); ?>

    <div id="wrapper">

        <!-- included the menu -->
        <?php include(APPPATH . 'views/includes/menu.php'); ?>


        <!-- code of search items -->
        <div id="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="row">
                                <div class="d-flex justify-content-center">
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input name="search" class="form-control" placeholder="Search here"
                                                item-search>
                                            <button class="btn btn-primary h-auto"><i
                                                    class="fa-solid fa-magnifying-glass fa-beat"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Filter Items by Category name using buttons -->
                    <div class="d-flex justify-content-center">
                        <div class="col-md-9">
                            <div class="card-body">
                                <!-- vegetables, fruits, meat & fish & eggs, grocery, bakery -->
                                <a href="#" class="btn btn-primary mx-1 my-1" onclick="filterItemsByCategory('all')">All
                                    Categories <img src="<?php base_url() ?> assets\images\search-items-all.png"
                                        width="24px"></a>
                                <a href="#" class="btn btn-success mx-1 my-1"
                                    onclick="filterItemsByCategory('vegetables')">Vegetables <img
                                        src="<?php base_url() ?> assets\images\search-items-vegetables.png"
                                        width="24px"></a>
                                <a href="#" class="btn btn-info mx-1 my-1" style="color: white;"
                                    onclick="filterItemsByCategory('fruits')">Fruits <img
                                        src="<?php base_url() ?> assets\images\search-items-fruits.png"
                                        width="24px"></a>
                                <a href="#" class="btn btn-danger mx-1 my-1"
                                    onclick="filterItemsByCategory('meat, fish & eggs')">Meat, fish & eggs <img
                                        src="<?php base_url() ?> assets\images\search-items-meat.png" width="34px"></a>
                                <a href="#" class="btn btn-secondary mx-1 my-1"
                                    onclick="filterItemsByCategory('grocery')">Grocery <img
                                        src="<?php base_url() ?> assets\images\search-items-grocery.png"
                                        width="35px"></a>
                                <a href="#" class="btn btn-warning mx-1 my-1" style="color: white;"
                                    onclick="filterItemsByCategory('bakery')">Bakery <img
                                        src="<?php base_url() ?> assets\images\search-items-bakery.png"
                                        width="32px"></a>
                            </div>
                        </div>
                    </div>


                    <div>
                        <?php 
                        // connect the database
                        $connectDB = mysqli_connect("localhost","root","","customer_service_assistant");

                        // Replace with the actual branch ID you want to display
                        $branchId = 1;

                        
                            // take all the data from item table
                            $query = "SELECT item.item_id,item.item_name,item.category_name,item.description,item.offer,item.image,item.price,store_item.availability,store_item.branch_id,store_item.quantity FROM item JOIN store_item 
                                        ON item.item_id = store_item.item_id WHERE store_item.branch_id = $branchId";

                            //take results into result vaiable
                            $result = mysqli_query($connectDB, $query);

                            //create an item array
                            $itemArray = array();

                            //fetch from result variable into row variable and store in itemArray
                            while($row =mysqli_fetch_assoc($result))
                            {
                                $itemArray[] = $row;
                            }
                        
                        ?>


                        <div class="col-md-12">
                            <div class="card-body">
                                
                                <!-- To display the message img -->
                                <div id="no-items-found-img" class="hide text-center"><img
                                        src="<?php base_url() ?> assets\images\no-items-found-prawn.gif" width="200px"></div>
                                <!-- To display the message -->
                                <div id="no-items-found" class="hide text-center"><h2>Sorry! No items found</h2></div>


                                <!-- cards -->
                                <div class="row row-md-3" data-item-cards-container></div>

                                <!-- cards template -->
                                <template data-item-template>
                                    <div class="card" style="width: 18rem; height: 35rem;">
                                        <p class="card-header text-center" item-category-name></p>
                                        <img class="card-img-top" alt="Card image cap" item-image>
                                        <div class="card-body">
                                            <h5 class="card-title text-center" item-name></h5>
                                            <p class="card-text text-center text-secondary" item-description></p>
                                            <p class="card-text text-center" item-offer></p>
                                            <p class="card-text text-center" item-price></p>
                                            <p class="card-text text-center">

                                                <span class="badge bg-primary" item-availability-true></span>

                                                <span class="badge bg-danger" item-availability-false></span>

                                            </p>
                                            <div class="card-footer text-center ">
                                                <button type="button" class="btn btn-primary">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>

                                </template>
                            </div>
                        </div>



                        <script>
                        //get itemArray into item json format
                        const items = <?php echo json_encode($itemArray); ?>;
                        //item-cards-tamplate DOM
                        const itemCardTemplate = document.querySelector("[data-item-template]");
                        //item-cards-container DOM
                        const itemCardContainer = document.querySelector("[data-item-cards-container]");
                        // item-search DOM
                        const searchInput = document.querySelector("[item-search]");



                        let dataItems = [];
                        //search function
                        searchInput.addEventListener("input", (e) => {
                            const value = e.target.value.toLowerCase();

                            let foundItems = 0; // counter for found items

                            dataItems.forEach(item => {
                                const isVisible = item.item_name.toLowerCase().includes(value) || item
                                    .category_name.toLowerCase().includes(value);

                                // not match card will be hide
                                item.element.classList.toggle("hide", !isVisible);

                                // increment the counter if the item is visible
                                if (isVisible) {
                                    foundItems++;
                                }
                            });

                            // toggle the visibility of the "No items found" message
                            const noItemsFoundMessage = document.getElementById("no-items-found");
                            noItemsFoundMessage.classList.toggle("hide", foundItems > 0);
                            // toggle the visibility of the image
                            const noItemsFoundImg = document.getElementById("no-items-found-img");
                            noItemsFoundImg.classList.toggle("hide", foundItems > 0);
                        });

                        //filter Items by Category name
                        function filterItemsByCategory(category) {
                            let foundItems = 0; // counter for found items

                            dataItems.forEach(item => {
                                const isVisible = category === 'all' || item.category_name.toLowerCase() ===
                                    category;
                                item.element.classList.toggle("hide", !isVisible);

                                // not match card will be hide
                                item.element.classList.toggle("hide", !isVisible);

                                // increment the counter if the item is visible
                                if (isVisible) {
                                    foundItems++;
                                }
                            });
                            // toggle the visibility of the "No items found" message
                            const noItemsFoundMessage = document.getElementById("no-items-found");
                            noItemsFoundMessage.classList.toggle("hide", foundItems > 0);
                            // toggle the visibility of the image
                            const noItemsFoundImg = document.getElementById("no-items-found-img");
                            noItemsFoundImg.classList.toggle("hide", foundItems > 0);
                        }


                        // taking each item objects from items 
                        dataItems = items.map(item => {

                            //for card
                            const card = itemCardTemplate.content.cloneNode(true).children[0]
                            const itemCategoryName = card.querySelector("[item-category-name]");
                            const itemImage = card.querySelector("[item-image]");
                            const itemName = card.querySelector("[item-name]");
                            const itemDescription = card.querySelector("[item-description]");
                            const itemOffer = card.querySelector("[item-offer]");
                            const itemPrice = card.querySelector("[item-price]");
                            const itemAvailabilityTrue = card.querySelector("[item-availability-true]");
                            const itemAvailabilityFalse = card.querySelector("[item-availability-false]");

                            // text content for card
                            itemCategoryName.textContent = item.category_name;
                            itemImage.src = "<?php base_url() ?> assets/images/" + item.image;
                            itemName.textContent = item.item_name;
                            itemDescription.textContent = item.description;
                            if (item.offer != 0) {
                                itemOffer.textContent = "Offer : " + item.offer + "%";
                            }

                            itemPrice.textContent = "Price : LKR " + item.price;

                            if (item.availability == "In Stock") {
                                itemAvailabilityTrue.textContent = item.availability + " # " + item.quantity;
                            } else {
                                itemAvailabilityFalse.textContent = item.availability;
                            }

                            // put data into the card container
                            itemCardContainer.append(card);
                            console.log(item);

                            return {
                                item_name: item.item_name,
                                category_name: item.category_name,
                                element: card
                            }

                        })
                        </script>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>


    <!-- included the footer -->
    <?php include(APPPATH . 'views/includes/footer.php'); ?>
    <!-- included the notification -->
    <?php include(APPPATH . 'views/includes/notification-component.php'); ?>
    <!-- included the cart -->
    <?php include(APPPATH . 'views/includes/cart-component.php'); ?>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


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