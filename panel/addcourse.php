<?php
include 'inc/db.php';
include 'inc/func.php';
if (isset($_SESSION['admin'])) {
    header('Location: login.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['add'])){
    $name = $_POST['name'];
    $teacher = $_POST['teacher'];
    $start = $_POST['start'];
    $description = $_POST['description'];
    
    $image_name = $_FILES['img']['name'] ;
    $target_file = "./courses/$image_name";
    $targetFileForItem = "courses/$image_name";
    
    move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
    $db = $conn;

    insert_courses($name, $teacher, $image_name, $description, $start, $db);
}

?>

<?php include 'inc/header.php'; ?>

<div class="container" style="margin-top: 200px;">
    <div class="row">
        <h5 style="margin-bottom: 30px;">To'garak qo'shish</h5>
        <form action="" method="POST" enctype="multipart/form-data" autocomplete="on">
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="To'garak nomi" name="name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="To'garak o'qituvchisi" name="teacher">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="To'garak boshlanish sanasi" name="start">
                <small id="emailHelp" class="form-text text-muted">Namuna: 10.01.2023</small>
            </div>
            <div class="form-group">
                <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="To'garak haqida" name="description"></textarea>
            </div>
            <div class="form-group">
                <input type="file" class="form-control" id="exampleInputPassword1" name="img">
            </div>
            <button type="submit" class="btn btn-primary" name="add">Qo'shish</button>
        </form>
    </div>
</div>