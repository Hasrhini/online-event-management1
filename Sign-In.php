<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registration Form</title>
    <link rel="shortcut icon" type="image/x-icon" href="glowgj.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="NewLogin.css">
</head>
<body>
    <div id="preloader"></div>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="Validation.php" method="post" class="sign-in-form">
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required/>
                    </div>
                    <input type="submit" class="btn solid" value="Login">
                    <p class="social-text">Or Sign In With Social Media</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <form action="Sign-up.php" method="post" class="sign-up-form">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="E-Mail ID" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required/>
                    </div>
                    <input type="submit" class="btn solid" value="Register">
                    <p class="social-text">Or Sign Up With Social Media</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New Here?</h3>
                    <p>Sign-Up with your e-mail id and become our member for getting exculsive
                        offers regarding every events.
                    </p>
                    <button class="btn transparent" id="sign-up-button">Sign Up</button>
                </div>
                <img src="undraw_uploading_go67.svg" alt="" class="image">
            </div>

                <div class="panel right-panel">
                    <div class="content">
                        <h3>One Of Us?</h3>
                        <p>Sign-In with your account and enjoy the privilege of exclusive offers regarding
                            every events.
                        </p>
                        <button class="btn transparent" id="sign-in-button">Sign In</button>
                    </div>
                    <img src="undraw_Login_re_4vu2.svg" alt="" class="image">
                </div>
        </div>
    </div>
    <script>
        const sign_in_btn = document.querySelector('#sign-in-button');
        const sign_up_btn = document.querySelector('#sign-up-button');
        const container = document.querySelector('.container');

        sign_up_btn.addEventListener('click',()=>{
        container.classList.add('sign-up-mode');
        });
        sign_in_btn.addEventListener('click',()=>{
        container.classList.remove('sign-up-mode');
        });
    </script>
    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load",function(){
            loader.style.display = "none";
        })
    </script>
</body>
</html>