
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/cf05e83bf0.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class='logo'>
            <h1><a href='/admin/home'>soko<span style='color: #5BC0BE;'>ONLINE</span></a></h1>
        </div>
        <nav>
            <ul  class='nav'>   
                <li class='nav-item'><a href='/admin/home'>Home</a></li>
                <li class='nav-item'><a href='/admin/addCategory'>+ Category</a></li>
                <li class='nav-item'><a href='#'>+ Subcategory</a></li>
                <li class='nav-item'><a href='/admin/addProduct'>+ Product</a></li>
                <li class='nav-item'><a href='#'>+ User</a></li>
                <li class='nav-item'><a class='nav-register' href='/admin/logout'>Logout</a></li>
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
                    <li><a href='/admin/addCategory'>Add Category</a></li>
                    <li><a href='#'>Add Subcategory</a></li>
                    <li><a href='/admin/addProduct'>Add Product</a></li>
                    <li><a href='#'>Add User</a></li>
                    <li><a href='/admin/logout'>Logout</a></li>
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