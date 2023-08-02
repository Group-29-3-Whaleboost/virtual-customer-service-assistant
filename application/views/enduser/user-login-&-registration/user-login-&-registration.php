<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & registration | CAS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="#" autocomplete="off" class="user-login">
                        <div class="logo">
                            <img src="https://www.pngmart.com/files/7/Cart-PNG-Clipart.png" alt="CAS">
                            <h4>Customer Service Assistant</h4>
                        </div>
                        <div class="heading">
                            <h2>Welcome Back</h2>
                            <h6>Not registered yet?</h6>
                            <a href="#" class="toggle">Register</a>
                        </div>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input 
                                    type="email"
                                    class="input-field" 
                                    autocomplete="off" 
                                    required
                                />
                                <label>Email</label>
                            </div>

                            <div class="input-wrap">
                                <input 
                                    type="password" 
                                    minlength="8" 
                                    class="input-field" 
                                    autocomplete="off" 
                                    required
                                />
                                <label>Password</label>
                            </div>

                            <input type="submit" value="Login" class="login-btn">

                            <div class="text">
                                <a href="#" id="forgot-password">Forgot Password?</a>
                            </div>
                        </div>
                    </form>

                    <form action="#" autocomplete="off" class="user-register">
                        <div class="logo">
                            <img src="https://www.pngmart.com/files/7/Cart-PNG-Clipart.png" alt="CAS">
                            <h4>Customer Service Assistant</h4>
                        </div>
                        <div class="heading">
                            <h2>Get Started</h2>
                            <h6>Already have an account?</h6>
                            <a href="#" class="toggle">Login</a>
                        </div>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input 
                                    type="text" 
                                    minlength="4" 
                                    class="input-field" 
                                    autocomplete="off" 
                                    required
                                />
                                <label>Name</label>
                            </div>

                            <div class="input-wrap">
                                <input 
                                    type="email" 
                                    class="input-field" 
                                    autocomplete="off" 
                                    required
                                />
                                <label>Email</label>
                            </div>

                            <div class="input-wrap">
                                <input 
                                    type="password" 
                                    minlength="8" 
                                    class="input-field" 
                                    autocomplete="off" 
                                    required
                                />
                                <label>Password</label>
                            </div>

                            <div class="input-wrap">
                                <input 
                                    type="password" 
                                    minlength="8" 
                                    class="input-field" 
                                    autocomplete="off" 
                                    required
                                />
                                <label>Confirm Password</label>
                            </div>

                            <input type="submit" value="Login" class="login-btn">

                            <div class="text">
                                By signing up, I agree to the <a href="#" id="terms">Terms of services</a> 
                                and <a href="#" id="policy">Privacy and Policy</a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="https://www.edureka.co/blog/wp-content/uploads/2018/09/shutterstock_725383498.png" class="image img-1 show" alt="">
                        <img src="https://www.edureka.co/blog/wp-content/uploads/2018/09/shutterstock_725383498.png" class="image img-2" alt="">
                        <img src="https://www.edureka.co/blog/wp-content/uploads/2018/09/shutterstock_725383498.png" class="image img-3" alt="">
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Work with Artificial Intelligence</h2>
                                <h2>Find the nearest branches</h2>
                                <h2>Shopping like a smart persion</h2>
                            </div>
                        </div>

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- JavaScript file -->

    <script src="app.js"></script>
</body>
</html>