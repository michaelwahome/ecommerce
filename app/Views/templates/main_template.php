
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
            <h1><a href='/users/home'>soko<span style='color: #5BC0BE;'>ONLINE</span></a></h1>
        </div>
        <nav>
            <ul  class='nav'>   
                <li class='nav-item'><a href='/users/home'>Home</a></li>
                <li class='nav-item'><a href='/users/home'>Catalogue</a></li>
                <li class='nav-item'><a href='#'>About Us</a></li>
                <li class='nav-item'><a href='#'>Contact Us</a></li>
                <li class='nav-item'><a href='#'>View Profile</a></li>
                <li class='nav-item'><a class='nav-register' href='/users/logout'>Logout</a></li>
            </ul>
        </nav>
    </header>

    <?php $this->renderSection('content'); ?>

    <footer>
        <ul class='footer-links'>
            <li><a href='#'>Back to top</a></li>
            <li>
                <ul>
                    <li  class='footer-top-level'>Customer links</li>
                    <li><a href='#'>About Us</a></li>
                    <li><a href='#'>Contact Us</a></li>
                    <li><a href='/users/logout'>Logout</a></li>
                    <li><a href='/users/home'>Catalogue</a></li>
                    <li><a href='#'>Map to our location</a></li>
                    <li><a href='#'>FAQs</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li class='footer-top-level'>Administrative links</li>
                    <li><a href='#'>Login</a></li>
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