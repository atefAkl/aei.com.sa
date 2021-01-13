<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta >
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AEICO-KSA</title>
    <link rel="icon" href="assets/icons/icon.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body>

<!--Start Header Section-->
<div class="header">

</div>
<!--End Header Section-->
<!--Navigation Section-->
<nav id="navbar">
    <div class="container">
        <div class="brand">
            <div id="brandIcon">
                <img src="assets/icons/icon.png" alt="">
            </div><h2>Aeicoksa</h2>
        </div>
        <div id="menu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/">About Us</a></li>
                <li><a href="/">Contact</a></li>
                <li><a href="/">Products</a></li>
                <li><a href="/">Projects</a></li>
                <li><a href="/">News</a></li>
                <li><a href="/">Jobs</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--Navigation Section-->

<!--Start Content Section-->
<div class="content">
    <div id="social" class="social">
        <i class="fa fa-facebook fa-2x"></i>
        <i class="fa fa-twitter fa-2x"></i>
        <i class="fa fa-youtube fa-2x"></i>
        <i class="fa fa-snapchat fa-2x"></i>
        <i class="fa fa-linkedin fa-2x"></i>
    </div>
    <div class="container">
        <section id="aboutUs">
            <h2>AEICO COMPANY</h2>

        </section>
        <section id="aboutUs">
            <h2>ABOUT US</h2>
        </section>
    </div>
</div>
<!--End Content Section-->

<script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
            social.classList.add('popout')
        } else {
            navbar.classList.remove("sticky");
            social.classList.remove('popout')
        }
    }
</script>
</body>
</html>