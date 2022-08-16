<?php $this->extend('/templates/auth_template'); ?>

<?php $this->section('content'); ?>

<body>
    <div class="container">
        <div class="wall">
            <h1><a href="/home">soko<span style='color: #5BC0CE;'>ONLINE</span></a></h1>
            <h1 class="message">Style, delivered in comfort</h1>
        </div>
        <div class="form">
            <h1>Registration Form</h1>
            <form id = "registrationForm" method="post">
                <div class="input-div">
                    <input class="input" type="email" name="email" id="email" placeholder="E-mail*" required>
                    <i id="user-icon" class="fas fa-user"></i>
                </div> 
                <input class="input" type="text" name="fname" id="fname" placeholder="First Name*">
                <input class="input" type="text" name="lname" id="lname" placeholder="Last Name*">
                <div class="input-div">
                    <input class="input" type="password" name="password" id="password" placeholder="Password*">                    
                    <i id="password-icon" class="fas fa-lock"></i>
                </div>
                <div class="input-div">
                    <input class="input" type="password" name="confpassword" id="confpassword" placeholder="Confirm Password*">                    
                    <i id="password-icon" class="fas fa-lock"></i>
                </div>
                <select class="input dropdown" name="gender" id="gender">
                    <option value="" selected disabled>----Choose a gender----</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <button class="cta" type="submit" name="register">SIGN UP</button>
            </form>
            <a href="login">Already have an account?</a>
        </div>
    </div>

<?php $this->endSection(); ?>