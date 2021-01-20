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
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="assets/bg/header-bg.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pipes & Fittings</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="assets/bg/header-bg-0.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pumps & Motors</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/bg/header-bg-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Valves & Flow Control</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/bg/header-bg-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Instruments & Sensors</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/bg/header-bg-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Testing & Commissioning</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/bg/shal2.gif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welding & Installation</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
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
                <li><a href="/"id="home">Home</a></li>
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
            <h2 id="Riyas"></h2>

        </section>
        <section id="aboutUs">
            <h2>ABOUT US</h2>
        </section>
        <section id="Products">
            <h2>Products</h2>
        </section>
    </div>
</div>
<!--End Content Section-->

<script type="text/javascript">
    window.onload = function ()
    {
        var sliderItems = [];
        var imageSection = document.getElementById('imageSection');
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                sliderItems = Object.values(JSON.parse(this.responseText));
                let sliderImgs = document.querySelectorAll('.aqlSliderImage .img'), i = 0;
                for (; i < sliderImgs.length; i++) {
                    sliderImgs[i].style.background = 'url("' + sliderItems[0] + '")'
                    sliderImgs[i].classList.add("loaded");

                }
                //imageSection.style.animation = 'zoomIn 3s linear'
                //imageSection.innerText = sliderItems;
                setInterval(function () {

                    //imageSection.setAttribute('src', sliderItems[0])
                    //imageSection.style.animation = 'zoomIn 3s linear'
                    sliderItems.push(sliderItems.shift());
                }, 10000)

            }
        };
        xmlhttp.open("GET", "http://www.aeico.sa/slideImages.php", true);
        xmlhttp.send();

        let navbar = document.getElementById("navbar");
        let sticky = navbar.offsetTop;
        let social = document.getElementById('social');
        let home = document.getElementById('home');
        let aboutUs = document.getElementById('aboutUs')
        window.onscroll = function () {
            myFunction()
            //console.log(window.scrollY)

            home.innerHTML = window.pageYOffset - aboutUs.offsetTop


        };

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
                social.classList.add('popout')
            } else {
                navbar.classList.remove("sticky");
                social.classList.remove('popout')
            }
        }

        let sliderItemsArr = [], slides = sliderItems.length, i = 0;
        //

        document.addEventListener('scroll', console.log(window.pageYOffset))
    }

</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>