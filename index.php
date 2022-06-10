<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/index_mobile.css">

    <!-- css cdn for fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Home | Library Management</title>
</head>
<body>
    <div class="container">

        <!-- code for navbar is stated from here -->
        <div class="navbar">
            <div class="logo-menu-toggle">
                <div class="logo">
                    <a href="index.php">
                        <img src="img/logo.png" alt="logo">
                    </a>
                </div>
                <div class="toggle-box">
                    <button class="toggle-btn" onclick="menuToggle()">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </div>

            <div class="menu-profile-box">
                <div class="menu-box">
                    <div class="menu-bar">
                        <a href="#">Home</a>
                        <a href="#">About</a>
                        <a href="#">Contact us</a>
                    </div>
                </div>
                <div class="profile-box">
                    <div class="login-logout-box">
                        <button class="login-btn">Login</button>
                        <button class="logout-btn">Logout</button>
                    </div>
                    <img src="img/profile.png" alt="profile">
                </div>
            </div>
        </div>

        <!-- code for welcome screen is stat from here -->

        <div class="welcome-box">
            <div class="welcome-page">
                <h2>Manage your Library from remote area</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias, dolorum ipsum. Nisi impedit quidem saepe vero eos dolorem nesciunt! Porro illum voluptas aspernatur harum quaerat. Dolor eius molestiae temporibus. Labore, libero consequatur?</p>
                <button>Get Started</button>
            </div>
        </div>

        <!-- code for service area  -->

        <div class="services">
            
        </div>
    </div>

    <!-- code for javascript -->
    <script src="javascript/index.js"></script>
</body>
</html>