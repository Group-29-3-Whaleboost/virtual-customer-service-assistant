<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href= " <?php echo base_url("assets\css\bootstrap.min.css");?>">
    <script src= " <?php echo base_url("assets\js\bootstrap.min.js") ?>"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap');

        *, *::before, *::after{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body, input{
            font-family: "Poppins", sans-serif;
        }

        main{
            width: 100%;
            min-height: 100vh;
            overflow: hidden;
            background-color: #2d7af7;
            padding: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .box{
            position: relative;
            width: 100%;
            max-width: 1020px;
            height: 640px;
            background-color: white;
            border-radius: 3.3rem;
            box-shadow: 0 60px 40px -30px rgba(0, 0, 0, 0.27);
        }

        .inner-box{
            position: absolute;
            width: calc(100% - 4.1rem);
            height: calc(100% - 4.1rem);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .forms-wrap{
            position: absolute;
            width: 45%;
            height: 100%;
            top: 0;
            left: 0;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr;
            transition: 0.8s ease-in-out;
        }

        form{
            max-width: 260px;
            width: 100%;
            margin: 0 auto;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            grid-column: 1 / 2;
            grid-row: 1 / 2;
            transition: opacity 0.02s 0.4s;
        }

        form.user-register{
            opacity: 0;
            pointer-events: none;
        }

        .logo{
            display: flex;
            align-items: center;
        }

        .logo img{
            width: 40px;
            margin: 0.3rem;
        }

        .logo h4{
            font-size: 1.1rem;
            margin-top: -9px;
            letter-spacing: -0.5px;
            color: #151111;
        }

        .heading h2{
            font-size: 2.1rem;
            font-weight: 600;
            color: #151111;
        }

        .heading h6{
            font-size: 0.75rem;
            font-weight: 400;
            color: #bababa;
            display: inline;
        }

        .toggle{
            color: #151111;
            text-decoration: none;
            font-size: 0.75rem;
            font-weight: 500;
            transition: 0.3s;
        }

        .toggle:hover{
            color: #2d7af7;
        }

        .input-wrap{
            position: relative;
            height: 37px;
            margin-bottom: 2rem;
        }

        .input-field{
            position: absolute;
            width: 100%;
            height: 100%;
            background: none;
            border: none;
            outline: none;
            border-bottom: 2px solid #151111;
            padding: 0;
            font-size: 0.95rem;
            color: #151111;
            transition: 0.4s;
        }

        label{
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            font-size: 0.95rem;
            color: #151111;
            pointer-events: none;
            transition: 0.4s;
        }

        .input-field.active{
            border-bottom-color: #2d7af7;
        }

        .input-field.active + label{
            font-size: 0.75rem;
            top: -2px;
            color: #2d7af7;
        }

        .login-btn{
            display: inline-block;
            width: 100%;
            height: 43px;
            background-color: #151111;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 0.8rem;
            font-size: 0.8rem;
            margin-bottom: 2rem;
        }

        .login-btn:hover{
            background-color: #2d7af7;
        }

        .text{
            text-align: center;
            font-size: 0.7rem;
            color: #bababa;
        }

        .text a{
            color: #151111;
            transition: 0.3s;
        }

        .text a:hover{
            color: #2d7af7;
        }

        main.user-register-mode form.user-login{
            opacity: 0;
            pointer-events: none;
        }

        main.user-register-mode form.user-register{
            opacity: 1;
            pointer-events: all;
        }

        main.user-register-mode .forms-wrap{
            left: 55%;
        }

        main.user-register-mode .carousel{
            left: 0%;
        }

        .carousel{
            position: absolute;
            width: 55%;
            height: 100%;
            top: 0;
            left: 45%;
            background-color: #9ec3ff;
            border-radius: 2rem;
            display: grid;
            grid-template-rows: auto 1fr;
            padding-bottom: 2rem;
            overflow: hidden;
            transition: 0.8s ease-in-out;
        }

        .images-wrapper{
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr;
        }

        .image{
            width: 100%;
            grid-column: 1/2;
            grid-row: 1/2;
            opacity: 0;
            transition: opacity 0.3s, transform 0.5s;
        }

        .img-1{
            transform: translate(0, -50px);
        }

        .img-2{
            transform: scale(0.4, 0.5);
        }

        .img-3{
            transform: scale(0.3) rotate(-20deg);
        }

        .image.show{
            opacity: 1;
            transform: none;
        }

        .text-slider{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .text-wrap{
            max-height: 2.2rem;
            overflow: hidden;
            margin-bottom: 2.5rem;
        }

        .text-group {
            display: flex;
            flex-direction: column;
            text-align: center;
            transform: translateY(0);
            transition: 0.5s;
        }

        .text-group h2{
            line-height: 2.2rem;
            font-weight: 600;
            font-size: 1.6rem;
        }

        .bullets{
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bullets span{
            display: block;
            width: 0.5rem;
            height: 0.5rem;
            background-color: #aaa;
            margin: 0 0.25rem;
            border-radius: 50%;
            cursor: pointer;
            transition: 0.3s;
        }

        .bullets span.active{
            width: 1.1rem;
            background-color: #151111;
            border-radius: 1rem;
        }

        /*tablet screen size*/
        @media (max-width: 850px){
            .box{
                height: auto;
                max-width: 550px;
                overflow: hidden;
            }

            .inner-box{
                position: static;
                transform: none;
                width: revert;
                height: revert;
                padding: 2rem;
            }

            .forms-wrap{
                position: revert;
                width: 100%;
                height: auto;
            }

            form{
                max-width: revert;
                padding: 1.5rem 2.5rem 2rem;
                transition: transform 0.8s ease-in-out, opacity 0.45s linear;
            }

            .heading{
                margin: 2rem 0;
            }

            form.user-register{
                transform: translateX(100%);
            }

            main.user-register-mode form.user-login{
                transform: translateX(-100%);
            }

            main.user-register-mode form.user-register{
                transform: translateX(0%);
            }

            .carousel{
                position: revert;
                width: 100%;
                height: auto;
                padding: 3rem;
                display: flex;
            }

            .images-wrapper{
                display: none;
            }

            .text-slider{
                width: 100%;
            }

            .text-group h2{
                font-size: 1.3rem;
            }
        }

        /*Mobile phone screen size*/
        @media (max-width: 530px){
            main{
                padding: 1rem;
            }

            .box{
                border-radius: 2rem;
            }

            .inner-box{
                padding: 1rem;
            }

            .carousel{
                padding: 1.5rem 1rem;
                border-radius: 1.6rem;
            }

            .text-wrap{
                margin-bottom: 1rem;
            }

            .text-group h2{
                font-size: 1.1rem;
            }

            form{
                padding: 1rem 2rem 1.5rem;
            }
        }

    </style>

</head>
<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <!--User Login Form-->
                    <form action="#" autocomplete="off" class="user-login">
                        <div class="logo">
                            <img src="resource/logo.png" alt="CAS">
                            <h4>Customer Service Assistant</h4>
                        </div>
                        <div class="heading">
                            <h2>Login</h2>
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

                            <input type="submit" value="Login" class="submit-btn">

                            <div class="text">
                                <a href="#" id="forgot-password">Forgot Password?</a>
                            </div>
                        </div>
                    </form>

                    <!--User Registration Form-->
                    <form action="#" autocomplete="off" class="user-register">
                        <div class="logo">
                            <img src="resource/logo.png" alt="CAS">
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

                            <input type="submit" value="Register" class="submit-btn">

                            <div class="text">
                                By Registering, I agree to the <a href="#" id="terms">Terms of services</a> 
                                and <a href="#" id="policy">Privacy and Policy</a>
                            </div>
                        </div>
                    </form>
                </div>

                <!--Image Slider-->
                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="resource/image 1.png" class="image img-1 show" alt="">
                        <img src="resource/image 2.png" class="image img-2" alt="">
                        <img src="resource/image 3.png" class="image img-3" alt="">
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Work with Artificial Intelligence</h2>
                                <h2>Find the nearest branches</h2>
                                <h2>Shopping like a smart person</h2>
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

    <script>
        const inputs = document.querySelectorAll(".input-field");
        const toggle_btn = document.querySelectorAll(".toggle");
        const main = document.querySelector("main");
        const bullets = document.querySelectorAll(".bullets span");
        const images = document.querySelectorAll(".image");

        inputs.forEach(inp => {
            inp.addEventListener("focus", () => {
                inp.classList.add("active");
            });
            inp.addEventListener("blur", () => {
                if(inp.value != "") return;
                inp.classList.remove("active")
            });
        });

        toggle_btn.forEach((btn) => {
            btn.addEventListener("click", () => {
                main.classList.toggle("user-register-mode");
            });
        });

        function moveSlider(){
            let index = this.dataset.value;

            let currentImage = document.querySelector('.img-'+index);
            images.forEach((img) => img.classList.remove("show"));
            currentImage.classList.add("show");

            const textSlider = document.querySelector(".text-group");
            textSlider.style.transform = "translateY("+(-(index - 1) * 2.2)+"rem)";

            bullets.forEach((bull) => bull.classList.remove("active"));
            this.classList.add("active");
        }

        bullets.forEach(bullet => {
            bullet.addEventListener("click", moveSlider);
        });
    </script>
 
</body>
</html>