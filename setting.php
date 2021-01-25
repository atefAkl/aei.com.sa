<?php require_once 'includes/page-header-start.php'; ?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css"
<link rel="stylesheet" type="text/css" href="assets/css/setting.css"
<?php require_once 'includes/page-header-close.php';?>
<link rel="stylesheet" href=assets/css/setting.css>
<?php require_once 'connect.php';?>

<?php
if (isset($_POST['save'])) {

    require_once ('Slider.php');
    $slider = new Slider($_FILES, $_POST);
    $sql = '';

        var_dump($slider);
}

?>
<div class="settingContainer">
    <div id="heads">
        <ul>
            <li id="si0">Home Page</li>
            <li id="si1">Setting Item 1</li>
            <li id="si2">Setting Item 2</li>
            <li id="si3">Setting Item 3</li>
            <li id="si4">Setting Item 4</li>
            <li id="si5">Setting Item 5</li>
            <li id="si6">Setting Item 6</li>
        </ul>

    </div>
    <div id="contents">
        <ul>
            <li id="si0Contents">
                <h2 class="text-center">Home Page Settings</h2>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Slider Options
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <form method="post" enctype="multipart/form-data">
                                    <div class="formSection">
                                        <h4>Indicators</h4>
                                        <div>
                                            <label for="it">Use Indicators</label>
                                            <input type="checkbox" name="indicator" id="it" value="true">
                                        </div>
                                    </div>
                                    <div class="formSection">
                                        <h4>Bullets</h4>
                                        <div>
                                            <label for="blts" class="fluid">Use Bullets</label>
                                            <input type="checkbox" name="bullets" id="blts" value="true">
                                        </div>
                                        <h4>Bullets Shape</h4>
                                        <div>
                                            <label for="square">Square Shape</label>
                                            <input type="radio" name="indicator" id="square" value="true">
                                            <label for="radial">Radial Shape+</label>
                                            <input type="radio" name="indicator" id="radial" value="true">
                                        </div>
                                        <h4>Bullets Fill</h4>
                                        <div>
                                            <i class="fa fa-angle-left"></i>
                                            <label for="color">Color</label>
                                            <input type="radio" name="indicator" id="color" value="true">
                                            <label for="thumb">Thumbnail</label>
                                            <input type="radio" name="fill" id="thumb" value="true">
                                        </div>
                                    </div>
                                    <div class="formSection">
                                        <h4>Slides</h4>
                                        <div>
                                            <label for="image">Select Slide Image</label>
                                            <input type="file" name="image" id="image">
                                        </div>
                                        <div>
                                            <label for="title">Slide Title</label>
                                            <input type="text" name="title" id="title">
                                        </div>
                                        <div>
                                            <label for="text">Slide Text</label>
                                            <input type="text" name="text" id="text">
                                        </div>
                                        <div>
                                            <label for="link">Slide Link</label>
                                            <input type="text" name="link" id="link">
                                        </div>
                                        <div>
                                            <input type="submit" value="Save" name="save">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
            </li>
            <li id="si1Contents">
                <form method="post" enctype="multipart/form-data">
                    <div class="formSection">
                        <h2>Setting Item 1 Contents</h2>

                        <div>
                            <label for="image">Select Slide Image</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <div>
                            <label for="title">Slide Title</label>
                            <input type="text" name="title" id="title">
                        </div>
                        <div>
                            <label for="text">Slide Text</label>
                            <input type="text" name="text" id="text">
                        </div>
                        <div>
                            <label for="link">Slide Link</label>
                            <input type="text" name="link" id="link">
                        </div>
                        <div>
                            <input type="submit" value="Save" name="save">
                        </div>
                    </div>
                </form>
            </li>
            <li id="si2Contents">
                <form method="post" enctype="multipart/form-data">
                    <div class="formSection">
                        <h2>Setting Item 2 Contents</h2>
                        <div>
                            <label for="image">Select Slide Image</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <div>
                            <label for="title">Slide Title</label>
                            <input type="text" name="title" id="title">
                        </div>
                        <div>
                            <label for="text">Slide Text</label>
                            <input type="text" name="text" id="text">
                        </div>
                        <div>
                            <label for="link">Slide Link</label>
                            <input type="text" name="link" id="link">
                        </div>
                        <div>
                            <input type="submit" value="Save" name="save">
                        </div>
                    </div>
                </form>
            </li>
            <li id="si3Contents">
                <form method="post" enctype="multipart/form-data">
                    <div class="formSection">
                        <h2>Setting Item 3 Contents</h2>
                        <div>
                            <label for="image">Select Slide Image</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <div>
                            <label for="title">Slide Title</label>
                            <input type="text" name="title" id="title">
                        </div>
                        <div>
                            <label for="text">Slide Text</label>
                            <input type="text" name="text" id="text">
                        </div>
                        <div>
                            <label for="link">Slide Link</label>
                            <input type="text" name="link" id="link">
                        </div>
                        <div>
                            <input type="submit" value="Save" name="save">
                        </div>
                    </div>
                </form>
            </li>
            <li id="si4Contents">
                <form method="post" enctype="multipart/form-data">
                    <div class="formSection">
                        <h2>Setting Item 4 Contents</h2>
                        <div>
                            <label for="image">Select Slide Image</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <div>
                            <label for="title">Slide Title</label>
                            <input type="text" name="title" id="title">
                        </div>
                        <div>
                            <label for="text">Slide Text</label>
                            <input type="text" name="text" id="text">
                        </div>
                        <div>
                            <label for="link">Slide Link</label>
                            <input type="text" name="link" id="link">
                        </div>
                        <div>
                            <input type="submit" value="Save" name="save">
                        </div>
                    </div>
                </form>
            </li>
            <li id="si5Contents">
                <form method="post" enctype="multipart/form-data">
                    <div class="formSection">
                        <h2>Setting Item 5 Contents</h2>
                        <div>
                            <label for="image">Select Slide Image</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <div>
                            <label for="title">Slide Title</label>
                            <input type="text" name="title" id="title">
                        </div>
                        <div>
                            <label for="text">Slide Text</label>
                            <input type="text" name="text" id="text">
                        </div>
                        <div>
                            <label for="link">Slide Link</label>
                            <input type="text" name="link" id="link">
                        </div>
                        <div>
                            <input type="submit" value="Save" name="save">
                        </div>
                    </div>
                </form>
            </li>
            <li id="si6Contents">
                <form method="post" enctype="multipart/form-data">
                    <div class="formSection">
                        <h2>Setting Item 6 Contents</h2>
                        <div>
                            <label for="image">Select Slide Image</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <div>
                            <label for="title">Slide Title</label>
                            <input type="text" name="title" id="title">
                        </div>
                        <div>
                            <label for="text">Slide Text</label>
                            <input type="text" name="text" id="text">
                        </div>
                        <div>
                            <label for="link">Slide Link</label>
                            <input type="text" name="link" id="link">
                        </div>
                        <div>
                            <input type="submit" value="Save" name="save">
                        </div>
                    </div>
                </form>
            </li>
        </ul>

    </div>
    <div class="widget">
        <ul>
            <li>Widget Item</li>
            <li>Widget Item</li>
            <li>Widget Item</li>
            <li>Widget Item</li>
            <li>Widget Item</li>
        </ul>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script type="text/javascript">
    $('li#si0Contents').slideDown();
    let settingItems = ["si0", "si1", "si2", "si3", "si4", "si5", "si6"];
    let settingContents = document.querySelectorAll("#contents li");
    let i = 0;
    $(document).on('click', function (e) {
        //siArray = Setting Items Array
        let siArray = ['si0', 'si1', 'si2', 'si3', 'si4', 'si5', 'si6'];
        //reset all items appearance;
        if (siArray.indexOf(e.target.id) === -1) {
            return true;
        } else {
            $('#contents >ul > li').slideUp(300);
            $('li#' + e.target.id + 'Contents').slideDown(100);
        }


    })


</script>

<?php require_once 'includes/page-close.php';?>

