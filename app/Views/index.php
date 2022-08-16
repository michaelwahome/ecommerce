<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href=<?php echo base_url("css/style.css") ?>>
    <script src="https://kit.fontawesome.com/cf05e83bf0.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
            <div class='logo'>
                <h1><a href='/'>soko<span style='color: #5BC0BE;'>ONLINE</span></a></h1>
            </div>
            <nav>
                <ul class='nav'>   
                    <li class='nav-item'><a href='/'>Home</a></li>
                    <li class='nav-item'><a href='#'>Catalogue</a></li>
                    <li class='nav-item'><a href='#'>About Us</a></li>
                    <li class='nav-item'><a href='#'>Contact Us</a></li>
                    <li class='nav-item'><a class='nav-login' href='/auth/login'>Sign In</a></li>
                    <li class='nav-item'><a class='nav-register' href='/auth/register'>Sign Up</a></li>
                </ul>
            </nav>
    </header>

    <section class="hero">
        <div class="hero-left">
            <h1>Shop On The Go</h1>
            <p>Pick out an outfit. We'll handle the rest.</p>
            <a href="/auth/register"><button class="primary-cta">Get Started</button></a>
        </div>
        <div class="hero-img">
            <img src=<?php echo base_url("images/hero.svg")?> alt="Shopping for clothes">
        </div>
    </section>

    <section class="benefits">
        <h2>Why shop with us?</h2>
        <div class="cards">
            <div class="card">
                <img src=<?php echo base_url("images/choice.svg")?> alt="Man making a choice">
                <p>Our catalogue guarantees you will be spoilt for choice</p>
            </div>
            <div class="card">
                <img src=<?php echo base_url("images/adjustments.svg")?> alt="Woman making adjustments">
                <p>Customize sizes and colors to your heart's content at the press of a button</p>
            </div>
            <div class="card">
                <img src=<?php echo base_url("images/photoshoot.svg")?> alt="Woman posing in photoshoot">
                <p>Who wouldn't want to look and feel their best</p>
            </div>
        </div>  
        <h3>So what are you waiting for? <a href="/auth/register">Sign up</a> now!</h3>    
    </section>

    <section class="catalogue">
        
    </section>


    <footer>
        <ul class='footer-links'>
            <li><a href='#'>Back to top</a></li>
            <li>
                <ul>
                    <li  class='footer-top-level'>Customer links</li>
                    <li><a href='#'>About Us</a></li>
                    <li><a href='#'>Contact Us</a></li>
                    <li><a href='/auth/login'>Login</a></li>
                    <li><a href='#'>Catalogue</a></li>
                    <li><a href='#'>Map to our location</a></li>
                    <li><a href='#'>FAQs</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li class='footer-top-level'>Administrative links</li>
                    <li><a href='/auth/adminLogin'>Login</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li class='footer-top-level'>Stay in touch</li>
                    <li class='footer-socials'>
                        <a href='#'><i class='fab fa-facebook'></i></a>
                        <a href='#'><i class='fab fa-instagram'></i></a>
                        <a href='#'><i class='fab fa-twitter'></i></a>
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li class='footer-top-level'>Legal Documents</li>
                    <li><a href='#'>Privacy Policy</a></li>
                    <li><a href='#'>Terms of Use</a></li>
                </ul>
            </li>
        </ul>
        <div class='copyright-tag'><p>©Wachira Developers 2021. All Rights Reserved</p></div>
    </footer>
</body>
</html>