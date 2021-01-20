<?php require_once 'includes/page-header-start.php'; ?>
<?php require_once 'includes/page-header-close.php';?>
<link rel="stylesheet" href=assets/css/setting.css>
<?php require_once 'connect.php';?>

<?php
if (isset($_POST['save'])) {
    var_dump($_POST);
    var_dump($_FILES);
}

?>
<form method="post" enctype="multipart/form-data">
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
</form>

<?php require_once 'includes/page-close.php';?>

