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
                <h1>Home Page Settings</h1>
                <form method="post" enctype="multipart/form-data">
                    <div class="formSection">
                        <h2>Add New Slide</h2>
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
<script type="text/javascript">
    $('#contents >ul > li').css({
        display: 'none',
        overflow: 'hidden'
    });
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

