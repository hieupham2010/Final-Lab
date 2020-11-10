<?php
require_once 'DatabaseAccess.php';
$query = "SELECT * FROM user WHERE Token = ? ";
$stmt = $connection->prepare($query);
$stmt->bind_param("s", $_COOKIE["UserToken"]);
$stmt->execute();
$result = $stmt->get_result();
$TotalPrice = 0;
$id = 0;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $query = "SELECT * FROM products WHERE ProductID = ? ";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("s", $row["ProductID"]);
        $stmt->execute();
        $resultProduct = $stmt->get_result();
        $rowProduct = $resultProduct->fetch_assoc();
        $TotalPrice += $rowProduct["Price"] * $row["Quantity"];
        require '../View/DialogDeleteItem.php';
        require '../View/DialogUpdateItem.php'
?>
        <tr>
            <td style="width: 20%;">
                <img src="<?php echo $rowProduct["ImageSrc"] ?>" alt="image" width="100%" height="125px">
                <div style="text-align: left; margin-left:8px">
                    <p>Name: <?php echo $rowProduct["ProductName"] ?></p>
                    <p>Description: <?php echo $rowProduct["Description"] ?></p>
                    <p>Price: <?php echo $rowProduct["Price"] ?></p>
                </div>
            </td>
            <td><?php echo $row["Quantity"] ?></td>
            <td><?php echo $row["Quantity"] * $rowProduct["Price"] ?>&#36;</td>
            <td><a href="#DeleteItem<?php echo $id ?>" data-toggle="modal">Remove</a> | <a data-toggle="modal" href="#UpdateItem<?php echo $id?>">Update</a></td>
        </tr>
<?php $id++; }
} ?>