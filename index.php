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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body>

<!--Start Header Section-->
<div class="header">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="assets/bg/shal2.gif" class="d-block w-100" alt="...">
                <div class="slideContent">
                	<div class="slideText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ea eaque, expedita fugit in, maxime minima minus provident quisquam, repellendus saepe sed tenetur! Dolorem magni nobis quae ratione repellat! Dolorem molestias nobis quo?
                	<button class="cIBtn"><a href="#">See More . . . </a></button>
                	</div>
                	
                </div>
                
                <div class="slideTitle">Chemistry Treatment</div>
            </div>
            <div class="carousel-item" data-bs-interval="500">
                <img src="assets/bg/header-bg-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="500">
                <img src="assets/bg/header-bg-0.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>