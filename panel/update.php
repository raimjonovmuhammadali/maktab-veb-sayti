<?php
include 'inc/db.php';
include 'inc/func.php';
if (isset($_SESSION['admin'])) {
    header('Location: login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' and isset($_GET['update'])) {
    $productid = $_GET['productid'];

    $stmt = $conn->prepare("SELECT * FROM courses WHERE id = '$productid'");
    $stmt->execute();
    $product = $stmt->fetch();
} else {
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['update'])) {
    $name = $_POST['name'];
    $teacher = $_POST['teacher'];
    $start = $_POST['start'];
    $description = $_POST['description'];

    $image_name = $_FILES['img']['name'];
    $target_file = "./courses/$image_name";
    $targetFileForItem = "courses/$image_name";

    move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
    $db = $conn;
    $id = $_GET['productid'];

    updateproduct($name, $teacher, $start, $description, $image_name, $db, $id);
}

?>

<?php include 'inc/header.php'; ?>

<div class="container" style="margin: 200px auto;">
    <div class="row" style="margin-bottom: 40px;">
        <h5 style="margin-bottom: 30px;">To'garakni yangilash</h5>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="To'garak nomi" name="name" value="<?= $product['name']; ?>" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="To'garak o'qituvchisi" name="teacher" value="<?= $product['teacher']; ?>" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="To'garak boshlanish sanasi" name="start" value="<?= $product['start']; ?>" required>
            </div>
            <div class="form-group">
                <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="To'garak haqida" name="description" rows="6" required><?= $product['description']; ?></textarea>
            </div>
            <div class="form-group">
                <input type="file" class="form-control" id="exampleInputPassword1" name="img" value="<?= $product['pic']; ?>" required>
                <img src="courses/<?= $product['pic']; ?>" alt="productimg" width="100px" height="100px">
            </div>
            <button type="submit" class="btn btn-primary" name="update">Yangilash</button>
            <a href="index.php"><button type="button" class="btn btn-success">Bekor qilish</button></a>
        </form>
    </div>
</div>