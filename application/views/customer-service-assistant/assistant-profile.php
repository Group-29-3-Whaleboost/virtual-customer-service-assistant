<!-- included the header -->
<?php include(APPPATH . 'views/includes/header.php'); 

// Add code to retrieve user details from the database
$user_id = 3; // Replace with the actual user ID you want to display

// database conection credentials 
$DBhost = "localhost";
$DBusername = "root";
$DBpassword = "";
$DBname = "customer_service_assistant";

?>


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

.navbar-nav .nav-link {
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


.profile-img {
    height: 150px;
    width: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid white;
    background: white;
}

.file-input-label {
    display: none;
}

#uploadBtn {
    position: absolute;
    height: 30px;
    width: 30px;
    padding: 3px 0px;
    border-radius: 50%;
    cursor: pointer;
    color: black;
    margin-top: 170px;
    transform: translateX(-140%);
    background-color: white;
    box-shadow: 2px 4px 4px rgb(0, 0, 0, 0.644);
}
.fa-shopping-basket {

display: none;
}
</style>

<body id="page-top">
    <!-- included the navbar -->
    <?php include(APPPATH . 'views/includes/assistant_navbar.php'); ?>

    <div id="wrapper">

        <!-- included the menu -->
        <?php include(APPPATH . 'views/includes/assistant_menu.php'); ?>


        <!-- Code of Profile page  -->
        <div id="content-wrapper">
            <div class="container mb-4">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10 mt-2 mb-4 pt-5">

                        <?php
                            
                            try {
                                // Create a PDO connection to your database
                                $pdo = new PDO("mysql:host=$DBhost;dbname=$DBname", "$DBusername", "$DBpassword");

                                // Prepare an SQL SELECT statement to retrieve customer details
                                $stmt = $pdo->prepare("SELECT name, email, gender, phoneNo, address, password, profile_image FROM user WHERE user_id = ?");
                                $stmt->execute([$user_id]);

                                // Fetch the customer details
                                $customerDetails = $stmt->fetch(PDO::FETCH_ASSOC);

                                // Populate the form fields with the retrieved data
                                $name = $customerDetails['name'];
                                $email = $customerDetails['email'];
                                $gender = $customerDetails['gender'];
                                $phoneNo = $customerDetails['phoneNo'];
                                $address = $customerDetails['address'];
                                $password = $customerDetails['password'];
                                $profile_image = $customerDetails['profile_image'];
                            } catch (PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }
                        ?>

                        <form action="#" autocomplete="off" method="post" enctype="multipart/form-data">
                            <div class="row z-depth-3">
                                <div class="col-sm-4 bg-primary rounded-left">
                                    <div class="card-block text-center text-white mt-5">
                                        <img id="profilePic"
                                            src="<?php base_url() ?> assets\images\user-image\<?php echo $profile_image; ?>"
                                            class="profile-img mt-5">
                                        <!-- A button that triggers the file input -->
                                        <button type="button" id="uploadBtn" class="file-input-button"
                                            onclick="document.getElementById('fileInput').click()">
                                            <i class="fa-solid fa-camera"></i>
                                        </button>
                                        <h3 class="font-weight-bold mt-4"><?php echo $name; ?></h3>
                                        <p><?php echo $email; ?></p>
                                        <!-- Hidden file input text -->
                                        <label class="file-input-label" for="fileInput">Choose a file:</label>
                                        <!-- Actual file input -->
                                        <input type="file" id="fileInput" name="image" style="display: none;">
                                    </div>
                                </div>
                                <div class="col-sm-8 bg-white rounded-right">
                                    <h3 class="mt-3 text-center text-primary">Profile Settings</h3>
                                    <hr class="badge-primary mt-0 w-22">

                                    <div class="row justify-content-center">
                                        <div class="col-sm-5 mt-0 m-4">
                                            <p class="text-center mb-2 text-muted">Name</p>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="<?php echo $name; ?>" placeholder="Your Name">
                                        </div>
                                        <div class="col-sm-5 mt-0 m-4">
                                            <p class="text-center mb-2 text-muted">Email</p>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="<?php echo $email; ?>" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-5 mt-0 m-4 text-center">
                                            <p class="text-center mb-2 text-muted">Gender</p>
                                            <?php
                                                    // Simulate fetching the gender value from your database.
                                                    $genderFromDatabase = $gender; // You should replace this with your actual database query result.

                                                    // Check if the gender is "Male" and set the "checked" attribute accordingly.
                                                    $isMaleChecked = ($genderFromDatabase == "Male") ? 'checked' : '';

                                                    // Check if the gender is "Female" and set the "checked" attribute accordingly.
                                                    $isFemaleChecked = ($genderFromDatabase == "Female") ? 'checked' : '';

                                                    // Check if neither "Male" nor "Female" is selected to determine whether to display "None."
                                                    $isNoneChecked = ($genderFromDatabase != "Male" && $genderFromDatabase != "Female") ? 'checked' : '';

                                                ?>

                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input mt-1" type="radio" name="gender"
                                                    id="male" value="Male" <?php echo $isMaleChecked; ?>>
                                                <label class="form-check-label" for="male">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input mt-1" type="radio" name="gender"
                                                    id="female" value="Female" <?php echo $isFemaleChecked; ?>>
                                                <label class="form-check-label" for="female">Female</label>
                                            </div>
                                            <!-- Hidden the "None" option only when no gender is selected -->
                                            <div class="form-check form-check-inline mt-2" hidden>
                                                <input class="form-check-input mt-1" type="radio" name="gender"
                                                    id="none" value="" <?php echo $isNoneChecked; ?>>
                                                <label class="form-check-label" for="none">None</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-5 mt-0 m-4">
                                            <p class="text-center mb-2 text-muted">Phone No</p>
                                            <input type="number" class="form-control" id="phoneNo" name="phoneNo"
                                                value="<?php echo $phoneNo; ?>" placeholder="Your Phone No">
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-11 mt-0 m-4">
                                            <p class="text-center mb-2 text-muted">Address</p>
                                            <input type="text" class="form-control" id="address" name="address"
                                                value="<?php echo $address; ?>" placeholder="Your Address">
                                        </div>
                                    </div>
                                    <div id="editInputPW" class="row justify-content-center" hidden>
                                        <div class="col-sm-5 mt-0 m-4">
                                            <p class="text-center mb-2 text-muted">Password</p>
                                            <input type="password" minlength="8" class="form-control" id="password"
                                                value="<?php echo $password; ?>" name="password"
                                                placeholder="Enter Your New Password" required disabled>
                                        </div>
                                        <div class="col-sm-5 mt-0 m-4">
                                            <p class="text-center mb-2 text-muted">Confirm Password</p>
                                            <input type="password" class="form-control" id="confirmPW" name="confirmPW"
                                                value="<?php echo $password; ?>" placeholder="Confirm Your Password"
                                                required disabled>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-3 mt-4 mb-4 text-center">
                                            <button id="changePwBtn" name="changePwBtn" type="button"
                                                class="btn btn-dark" style="width : 130px;"
                                                onclick="togglePassword()">Edit
                                                Password</button>
                                        </div>
                                        <div class="col-sm-3 mt-4 mb-4 text-center">
                                            <button name="submit" type="submit" class="btn btn-primary"
                                                style="width : 130px;" onclick="enablePassword()">Update
                                                Profile</button>
                                        </div>
                                    </div>

                                    <!-- Enable Password -->
                                    <script>
                                    function togglePassword() {
                                        var passwordInput = document.getElementById("password");
                                        var btn = document.getElementById("changePwBtn");
                                        var confirmPWField = document.getElementById('confirmPW');
                                        var editInputPW = document.getElementById('editInputPW');

                                        // Toggle the disabled attribute of the password input field
                                        passwordInput.disabled = !passwordInput.disabled;
                                        confirmPWField.disabled = !confirmPWField.disabled;
                                        editInputPW.hidden = !editInputPW.hidden;

                                        // Clear the value when enabling the input field
                                        if (!passwordInput.disabled && !confirmPWField.disabled) {
                                            passwordInput.value = "";
                                            confirmPWField.value = "";
                                            editInputPW.removeAttribute('hidden');
                                        } else {
                                            passwordInput.value = "<?php echo $password; ?>";
                                            confirmPWField.value = "<?php echo $password; ?>";
                                        }

                                        // Change button text and color
                                        if (passwordInput.disabled) {
                                            btn.innerHTML = "Edit Password";
                                            btn.classList.remove("btn-secondary");
                                            btn.classList.add("btn-dark");
                                            btn.classList.addAttribute('required');
                                        } else {
                                            btn.innerHTML = "Cancel";
                                            btn.classList.remove("btn-dark");
                                            btn.classList.add("btn-secondary");
                                        }
                                    }

                                    function enablePassword() {
                                        var passwordField = document.getElementById('password');
                                        var confirmPWField = document.getElementById('confirmPW');

                                        if ((confirmPWField.value == passwordField.value) || (confirmPWField.value !=
                                                null)) {
                                            passwordField.removeAttribute('disabled');
                                            confirmPWField.removeAttribute('disabled');
                                        }

                                    }
                                    </script>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                    
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $gender = $_POST['gender'];                
                    $phoneNo = $_POST['phoneNo'];
                    $address = $_POST['address'];
                    $password = $_POST['password'];
                    $confirmPW = $_POST['confirmPW'];

                    if($password == $confirmPW){ 
                        // Check if a new image is uploaded
                        if (!empty($_FILES['image']['name'])) {
                            $profile_image = time() . '_' . $_FILES['image']['name'];
                            $target = 'assets/images/user-image/' . $profile_image;
    
                            // Image validation
                            $validImageExtension = ['jpg', 'jpeg', 'png'];
                            $imageExtension = explode('.', $_FILES['image']['name']);
                            $imageExtension = strtolower(end($imageExtension));
    
                            if (in_array($imageExtension, $validImageExtension)) {
                                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                                    try {
                                        // Create a PDO connection to your database
                                        $pdo = new PDO("mysql:host=$DBhost;dbname=$DBname", "$DBusername", "$DBpassword");
                                
                                        // Prepare an SQL UPDATE statement
                                        $stmt = $pdo->prepare("UPDATE user SET name = ?, email = ?, gender = ?, phoneNo = ?, address = ?, password = ?, profile_image = ? WHERE user_id = ?");
                                
                                        // Bind parameters and execute the query
                                        $stmt->execute([$name, $email, $gender, $phoneNo, $address, $password, $profile_image, $user_id]);
                                
                                        // Check for successful update
                                        if ($stmt->rowCount() > 0) {
                                            $successMessage = "Account details updated successfully!!!";
                                            header("Location: CustomerServiceAssistantProfile");
                                            exit();
                
                                        } else {
                                            $errorMessage = "Failed to update account details!!!";
                                        }
                                    } catch (PDOException $e) {
                                        $errorMessage = "Error: " . $e->getMessage();
                                    }
        
                                } else {
                                    $errorMessage = "Failed to upload your image!!!";
                                }
    
                            } else {
                                $errorMessage = "Invalid image extension!!!";
                            }
    
                        } else {
                            // Update user without image or existing image
                            $profile_image = $customerDetails['profile_image'];
                                
                            try {
                                // Create a PDO connection to your database
                                $pdo = new PDO("mysql:host=$DBhost;dbname=$DBname", "$DBusername", "$DBpassword");
                        
                                // Prepare an SQL UPDATE statement
                                $stmt = $pdo->prepare("UPDATE user SET name = ?, email = ?, gender = ?, phoneNo = ?, address = ?, password = ?, profile_image = ? WHERE user_id = ?");
                        
                                // Bind parameters and execute the query
                                $stmt->execute([$name, $email, $gender, $phoneNo, $address, $password, $profile_image, $user_id]);
                        
                                // Check for successful update
                                if ($stmt->rowCount() > 0) {
                                    $successMessage = "Account details updated successfully!!!";
                                    header("Location: CustomerServiceAssistantProfile");
                                    exit();
        
                                } else {
                                    $errorMessage = "Failed to update account details!!!";
                                }
                            } catch (PDOException $e) {
                                $errorMessage = "Error: " . $e->getMessage();
                            }    
                             
                        }

                    } else {
                        $errorMessage = "Passwords are not match, try again!!!";
                    } 
                }            
 
            ?>


            <!-- Display the success or error messages -->
            <?php if (isset($successMessage) || isset($errorMessage)): ?>
            <div style="position: fixed; top: 9%; right: 10px; z-index: 1000; width: 400px;">
                <?php if (isset($successMessage)): ?>
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert"
                    style="position: relative;">
                    <strong><?php echo $successMessage; ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php elseif (isset($errorMessage)): ?>
                <div class="alert alert-warning alert-dismissible fade show text-center" role="alert"
                    style="position: relative;">
                    <strong><?php echo $errorMessage; ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
            </div>

            <script>
            // Close the alert after a delay (adjust the timeout value as needed)
            window.setTimeout(function() {
                $(".alert").alert("close");
            }, 5000);
            </script>
            <?php endif; ?>




            <script>
            // Add an event listener to the file input
            const image = document.getElementById("profilePic");
            const input = document.getElementById("fileInput");

            input.addEventListener("change", () => {
                image.src = URL.createObjectURL(input.files[0]);
            })
            </script>


            <!-- included the footer -->
            <?php include(APPPATH . 'views/includes/footer.php'); ?>


            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
                crossorigin="anonymous">
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