<?php $this->extend('/templates/auth_template'); ?>

<?php $this->section('content'); ?>

<body>
    <div class="container">
        <div class="wall">
            <h1><a href="/home">soko<span style='color: #5BC0BE;'>ONLINE</span></a></h1>
            <h1 class="message">Style, delivered in comfort</h1>
        </div>
        <div class="form">
            <h1>Login Form</h1>
            <form id="loginForm" method="post">
                <div class="input-div">
                    <i id="user-icon" class="fas fa-user"></i>  
                    <input class="input" type="email" name="email" id="email" placeholder="E-mail*" required> 
                </div>
                <div class="input-div">
                    <i id="password-icon" class="fas fa-lock"></i>  
                    <input class="input" type="password" name="password" id="password" placeholder="Password*">                
                </div>
                <button class="cta" type="submit" name="login">LOG IN</button>
            </form>
            <a href="#">Forgot password</a>
            <a href="register">Don't have an account?</a>
        </div>
    </div>

<?php $this->endSection(); ?>