<?php
include 'inc/db.php';
if (isset($_SESSION['admin'])) {
    header('Location: login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['delete'])) {
    $orderid = $_POST['orderid'];

    $stmt = $conn->prepare("DELETE FROM ariza WHERE id = ?");
    $stmt->execute([$orderid]);

    header('Location: orders.php');
}
?>

<?php include 'inc/header.php'; ?>

<div class="container" style="margin-top: 200px;">
    <div class="row">
        <h5 style="margin-bottom: 30px;">Barcha buyurtmalar</h5>
        <table class="table" style="overflow: scroll;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ismi</th>
                    <th scope="col">Farzandining ismi</th>
                    <th scope="col">Farzandining yoshi</th>
                    <th scope="col">Telefon raqami</th>
                    <th scope="col">Izoh</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include './inc/db.php';

                $stmt = $conn->prepare("SELECT * from ariza ORDER BY id desc");
                $stmt->execute();
                $products = $stmt->fetchAll();


                $msg = '';
                if (count($products) == 0) {
                    $msg = "Arizalar mavjud emas";
                } else {
                    $i = 0;
                    foreach ($products as $row) {
                        $i = $i + 1;
                ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $row['name']; ?></td>
                            <td><?= $row['fname']; ?></td>
                            <td><?= $row['fage']; ?></td>
                            <td><?= $row['phone']; ?></td>
                            <td><?= $row['comment']; ?></td>
                            <td><a href="tel:<?=$row['phone']?>"><i class="fa-solid fa-phone"></i></a></td>
                            <td>
                                <form action="" method="POST">
                                    <input type="hidden" name="orderid" value="<?= $row['id']; ?>">
                                    <button class="btn btn-danger" title="Arizani o'chirish" name="delete"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        <?php } ?>

                        </tr>

                    <?php } ?>
            </tbody>
        </table>
        <span style="margin-bottom: 20px;"><?= $msg; ?></span>
    </div>
</div>