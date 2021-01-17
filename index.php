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
    <div class="aqlSlider">
        <div class="aqlSliderContainer">
            <div class="aqlSliderImage">

                <img src="assets/bg/header-bg-0.jpg" alt="">
                <img src="assets/bg/header-bg-1.jpg" alt="">
                <img src="assets/bg/header-bg-2.jpg" alt="">
                <img src="assets/bg/header-bg-3.jpg" alt="">
                <img src="assets/bg/header-bg.jpg" alt="">
                <img src="assets/bg/shal2.gif" alt="">
            </div>
            <div class="aqlSliderDescription">
                <div class="descItem">
                    <h2>My Slide Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis distinctio, dolore exercitationem fuga, id illo impedit ipsum maxime nihil possimus provident quam recusandae repudiandae sit suscipit, ullam. Mollitia, odit.</p>
                    <div class="btn btn-primary">See More ...</div>
                </div>

                <div class="descItem">
                    <h2>My Slide Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis distinctio, dolore exercitationem fuga, id illo impedit ipsum maxime nihil possimus provident quam recusandae repudiandae sit suscipit, ullam. Mollitia, odit.</p>
                    <div class="btn btn-primary">See More ...</div>
                </div>

                <div class="descItem">
                    <h2>My Slide Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis distinctio, dolore exercitationem fuga, id illo impedit ipsum maxime nihil possimus provident quam recusandae repudiandae sit suscipit, ullam. Mollitia, odit.</p>
                    <div class="btn btn-primary">See More ...</div>
                </div>

                <div class="descItem">
                    <h2>My Slide Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis distinctio, dolore exercitationem fuga, id illo impedit ipsum maxime nihil possimus provident quam recusandae repudiandae sit suscipit, ullam. Mollitia, odit.</p>
                    <div class="btn btn-primary">See More ...</div>
                </div>

                <div class="descItem">
                    <h2>My Slide Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis distinctio, dolore exercitationem fuga, id illo impedit ipsum maxime nihil possimus provident quam recusandae repudiandae sit suscipit, ullam. Mollitia, odit.</p>
                    <div class="btn btn-primary">See More ...</div>
                </div>

                <div class="descItem">
                    <h2>My Slide Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis distinctio, dolore exercitationem fuga, id illo impedit ipsum maxime nihil possimus provident quam recusandae repudiandae sit suscipit, ullam. Mollitia, odit.</p>
                    <div class="btn btn-primary">See More ...</div>
                </div>

            </div>
            <div class="aqlSliderControls">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
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
            <h2 id="Riyas"></h2>

        </section>
        <section id="aboutUs">
            <h2>ABOUT US</h2>
        </section>
    </div>
</div>
<!--End Content Section-->

<script type="text/javascript">
    var sliderItems = [];

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            sliderItems = JSON.parse(this.responseText);
            let sliderItemsArr = [], slides = sliderItems.length, i=0;
            setInterval(function() {
                let currentItem = sliderItems[0];
                let x =  sliderItemsArr.push(currentItem);
                sliderItemsArr.shift();
                console.log(sliderItemsArr[0]);
            }, 1000)

        }
    };
    xmlhttp.open("GET", "http://www.aei.co/slideImages.php", true);
    xmlhttp.send();

    window.onscroll = function() {myFunction()};

    let navbar = document.getElementById("navbar");
    let sticky = navbar.offsetTop;
    let social = document.getElementById('social');
    let Riyas = document.getElementById('Riyas');

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
            social.classList.add('popout')
        } else {
            navbar.classList.remove("sticky");
            social.classList.remove('popout')
        }
    }

    let sliderItemsArr = [], slides = sliderItems.length, i=0;
    //


</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>