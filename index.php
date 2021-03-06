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
<body onload="loader()">
    <div class="loading">
        <span></span>
        <i></i>
    </div>
    <div class="container">

        <!-- code for navbar is stated from here -->
        <div class="navbar">
            <div class="logo-menu-toggle">
                <div class="logo">
                    <a href="index.html">
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
                <p>Setup your whole Library on cloud and access it from anywhere | anytime and manage your complete Library from remote area. And this whole services is completely free. Just setup on cloud and fly.</p>
                <button onclick="hideWelcome()"><a href="#services-heading-id">Get Started</a></button>
            </div>
        </div>

        <!-- code for service area  -->

        <div class="services-container">
            <div class="services-heading" id="services-heading-id">
                <h1>Services</h1>
            </div>
            <div class="services-cards-container" id="services-cards-container-id">
                <!-- <div class="back-btn-container">
                    <button>
                        <i class="fa fa-arrow-left"></i>
                        <span>&nbsp;Back</span>
                    </button>
                </div> -->

                <div class="services-main-cards-container">
                    <!-- <i class="data-loader">
                        <i></i>
                    </i> -->

                    <!-- code for card 1 -->
                    <div class="card">
                        <div class="card-image">
                            <img src="img/books1.jpg">
                        </div>
                        <div class="card-title">
                            <h3>Manage Students</h3>
                        </div>
                        <div class="card-desc">
                            <p>Manage your Students like Add, Remove, or Update Student details </p>
                        </div>
                        <div class="card-btn">
                            <button id="manage-student-id">Manage</button>
                        </div>
                    </div>

                    <!-- code for card 1 -->
                    <div class="card">
                        <div class="card-image">
                            <img src="img/books1.jpg">
                        </div>
                        <div class="card-title">
                            <h3>Manage Books</h3>
                        </div>
                        <div class="card-desc">
                            <p>Manage your books like Add, Remove, or Update books details </p>
                        </div>
                        <div class="card-btn">
                            <button id="manage-books-id">Manage</button>
                        </div>
                    </div>

                    <!-- code for card 1 -->
                    <div class="card">
                        <div class="card-image">
                            <img src="img/books1.jpg">
                        </div>
                        <div class="card-title">
                            <h3>Issue Books</h3>
                        </div>
                        <div class="card-desc">
                            <p>Issue the books to the students for his references</p>
                        </div>
                        <div class="card-btn">
                            <button id="issue-books-id">Issue</button>
                        </div>
                    </div>

                    <!-- code for card 1 -->
                    <div class="card">
                        <div class="card-image">
                            <img src="img/books1.jpg">
                        </div>
                        <div class="card-title">
                            <h3>View Issued Books</h3>
                        </div>
                        <div class="card-desc">
                            <p>Here you can see that which book is ocupied by which students</p>
                        </div>
                        <div class="card-btn">
                            <button id="view-issued-books-id">View</button>
                        </div>
                    </div>

                    <!-- code for card 1 -->
                    <div class="card">
                        <div class="card-image">
                            <img src="img/books1.jpg">
                        </div>
                        <div class="card-title">
                            <h3>Return Books</h3>
                        </div>
                        <div class="card-desc">
                            <p>Return back the books from students and make it available for other students.</p>
                        </div>
                        <div class="card-btn">
                            <button id="return-books-id">Return</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- code for dialog modal -->

        <div class="dialog-box-container">
           
        </div>

        <!-- code for footer are  -->
        <div class="footer-container">
            <div class="footer-box">
                <div class="footer-text">
                    <p>&copy; Library Management Pvt. Ltd. All rights reserved.</p>
                </div>
                <div class="social-media-box">
                    <div class="social-media-icon-box">
                        <a href="https://www.instagram.com">
                            <i class="fa fa-instagram icon-insta"></i>
                        </a> 
                    </div>
                    <div class="social-media-icon-box">
                        <a href="https://www.facebook.com">
                            <i class="fa fa-facebook icon-face"></i>
                        </a>
                    </div>
                    <div class="social-media-icon-box">
                        <a href="https://www.twitter.com">
                            <i class="fa fa-twitter icon-twit"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- code for javascript -->
    <script type="text/javascript" src="javascript/index.js"></script>
    <script type="text/javascript" src="javascript/jquery.js"></script>

    <script>
        function loader()
        {
            const load=document.querySelector(".loading");
            load.style.display="none";
            console.log("callled");
        }

        function hideDialog()
        {
            const dialog=document.querySelector(".dialog-box-container");
            dialog.style.display="none";
        }

        function showDialog()
        {
            const dialog=document.querySelector(".dialog-box-container");
            dialog.style.display="flex";
        }

        $(document).ready(function(){
            $(".dialog-box-container").hide();
            // $(".data-loader").hide();

            $(document).on("click", "#manage-student-id", function(e){
                var data = 'cardId='+ 'manage-student-btn';
                $.ajax({
                    url: "cardHandling.php",
                    type: "POST",
                    data: data,
                    // beforeSend: function()
                    // {
                    //     $(".data-loader").show();
                    // },
                    success: function(data){
                        // $(".data-loader").hide();
                        $("#services-cards-container-id").html(data);

                    }
                });
            });

            $(document).on("click", "#manage-books-id", function(e){
                var data = 'cardId='+ 'manage-book-btn';
                $.ajax({
                    url: "cardHandling.php",
                    type: "POST",
                    data: data,
                    success: function(data){
                        $("#services-cards-container-id").html(data);
                    }
                });
            });

            // ajax code for manage student 

            // add student code 
            $(document).on("click", "#add-student-btn-id" ,function(e){
                var add_flex_css = {display: 'flex'};
                $(".dialog-box-container").css(add_flex_css);
                // console.log("s a btn clicked");
                $(".dialog-box-container").show();
                
                var data = 'cardId='+ 'add-student-btn';
                $.ajax({
                    url: "manageStudentEvent.php",
                    type: "POST",
                    data: data,
                    success: function(data){
                        $(".dialog-box-container").html(data);
                    }
                });
            });

            // remove student code
            $(document).on("click", "#remove-student-btn-id" ,function(e){
                var add_flex_css = {display: 'flex'};
                $(".dialog-box-container").css(add_flex_css);
                // console.log("s a btn clicked");
                $(".dialog-box-container").show();
                
                var data = 'cardId='+ 'remove-student-btn';
                $.ajax({
                    url: "manageStudentEvent.php",
                    type: "POST",
                    data: data,
                    success: function(data){
                        $(".dialog-box-container").html(data);
                    }
                });
            });

            //code for view all the student
            $(document).on("click", "#student-details-btn-id" ,function(e){
                var add_flex_css = {display: 'flex'};
                $(".dialog-box-container").css(add_flex_css);
                // console.log("s a btn clicked");
                $(".dialog-box-container").show();
                
                var data = 'cardId='+ 'view-student-btn';
                $.ajax({
                    url: "manageStudentEvent.php",
                    type: "POST",
                    data: data,
                    success: function(data){
                        $(".dialog-box-container").html(data);
                    }
                });
            });

            // ajax code for back btn 

            $(document).on("click", "#back-btn-id" ,function(e){

                $.ajax({
                    url: "homeCard.php",
                    type: "POST",
                    success: function(data){
                        $(".services-cards-container").html(data);
                    }
                });
            });

            
            // form add student form  code 

            $(document).on("click", ".submit-btn" ,function(e){
                e.preventDefault();

                var name=$("#name-id").val();
                var fname=$("#fname-id").val();
                var dob=$("#dob-id").val();
                var regNo=$("#regNo-id").val();
                var mobile=$("#mobile-id").val();
                var email=$("#email-id").val();
                var course=$("#course-id").val();
                var branch=$("#branch-id").val();
                var profile=$("#profile-id").prop('files')[0];
                var address=$("#address-id").val();

                var form_data = new FormData();
                //form validation part of the form add student
                if (name=="") 
                {
                    alert("Name field can't be blank");
                    return;
                }
                else if (name.length>=20) 
                {
                    alert("name sholud be less than 200 character");
                    return;
                }
                else if (fname=="") 
                {
                    alert("father's name can't be blank");
                    return;
                }
                else if (fname.length>=20) 
                {
                    alert("father's name sholud be less than 200 character");
                    return;
                }
                else if (dob=="") 
                {
                    alert("please enter date of birth");
                    return;
                }
                else if (regNo=="") 
                {
                    alert("please enter Registration no");
                    return;
                }
                else if (regNo.length<10) 
                {
                    alert("please enter a valid registration number");
                    return;
                }
                else if (regNo.length>10) 
                {
                    alert("please enter a valid registration number");
                    return;
                }
                else if (mobile=="") 
                {
                    alert("please enter Mobile number");
                    return;
                }
                else if(!/^[0-9]+$/.test(mobile))
                {
                    alert("please enter a valid mobile number");
                    return;
                }
                else if (mobile.length<10) 
                {
                    alert("please enter a valid mobile number");
                    return;
                }
                else if (mobile.length>10) 
                {
                    alert("please enter a valid mobile number");
                    return;
                }
                else if (email=="") 
                {
                    alert("please enter email address");
                    return;
                }
                else if (email.length>=200) 
                {
                    alert("Email address sholud be less than 200 character");
                    return;
                }
                else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)))
                {
                    alert("please enter a valid email address");
                    return;
                }
                else if (course=="null") 
                {
                    alert("please select course");
                    return;
                }
                else if (branch=="null") 
                {
                    alert("please select branch");
                    return;
                }
                else if (course=="") 
                {
                    alert("please select course");
                    return;
                }
                else if (branch=="") 
                {
                    alert("please select branch");
                    return;
                }
                else if (address=="") 
                {
                    alert("please enter address");
                    return;
                }
                else if (address.length>=500) 
                {
                    alert("Address sholud be less than 500 character");
                    return;
                }
                // form validation end
                else
                {
                    form_data.append("name",name);
                    form_data.append("fname",fname);
                    form_data.append("dob",dob);
                    form_data.append("regNo",regNo);
                    form_data.append("mobile",mobile);
                    form_data.append("email",email);
                    form_data.append("course",course);
                    form_data.append("branch",branch);
                    form_data.append("profile",profile);
                    form_data.append("address",address);
                    // ajax call 
                    $.ajax({
                        url: "addStudent.php",
                        type: "POST",
                        data: form_data,
                        contentType: false,
                        processData: false,

                        success: function(data){
                            // $(".dialog-form-box").html(data);
                            alert(data)

                            $("#name-id").val("");
                            $("#fname-id").val("");
                            $("#dob-id").val("");
                            $("#regNo-id").val("");
                            $("#mobile-id").val("");
                            $("#email-id").val("");
                            // $("#course-id").val("");
                            // $("#branch-id").val("");
                            $("#profile-id").val("");
                            $("#address-id").val("");
                        }
                    });
                }
                
                //console.log(name, fname, dob, regNo, mobile, email, course, branch, profile, address);
            });

        });


    </script>

</body>
</html>