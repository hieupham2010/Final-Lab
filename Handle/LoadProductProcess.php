<?php
require_once 'DatabaseAccess.php';
$query = "SELECT * FROM products";
$stmt = $connection->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
$id = 0;
while ($row = $result->fetch_assoc()) {
    include '../View/DialogDelete.php';
    include '../View/DialogUpdate.php';
?>
    <tr>
        <td style="width: 20%;"><img src="<?php echo $row["ImageSrc"] ?>" alt="image" width="100%" height="125px"></td>
        <td><?php echo $row["ProductName"] ?></td>
        <td><?php echo $row["Price"] ?>&#36;</td>
        <td><?php echo $row["Description"] ?></td>
        <td><a href="#DeleteProduct<?php echo $id ?>" data-toggle="modal">Delete</a> | <a data-toggle="modal" href="#UpdateProduct<?php echo $id ?>">Update</a></td>
    </tr>
<?php $id++;} ?>