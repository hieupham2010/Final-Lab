<?php
require_once 'DatabaseAccess.php';
if (isset($_GET["Category"]) && !empty($_GET["Category"])) {
    $query = "SELECT * FROM products WHERE Category = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $_GET["Category"]);
    $stmt->execute();
    $result = $stmt->get_result();
} else if (isset($_GET["SearchKey"]) && !empty($_GET["SearchKey"])) {
    $key = $_GET["SearchKey"];
    $query = "SELECT * FROM products WHERE 
    ProductName LIKE BINARY '%$key%' OR Price LIKE BINARY '%$key%' OR Description LIKE BINARY '%$key%' OR Category LIKE BINARY '%$key%' OR 
    ProductName LIKE '%$key%' OR Price LIKE '%$key%' OR Description LIKE '%$key%' OR Category LIKE '%$key%'";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $query = "SELECT * FROM products";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
}
while ($row = $result->fetch_assoc()) {
?>
    <div class="card">
        <img src="<?php echo $row["ImageSrc"] ?>" alt="Avatar" width="100%" height="180px">
        <div class="price">
            <span><b><?php echo $row["Price"] ?>&#36;</b></span>
        </div>
        <div class="description">
            <h2 style="margin-left: 10px;"><b><?php echo $row["ProductName"] ?></b></h2>
            <p style="margin-left: 10px;"><?php echo $row["Description"] ?></p>
        </div>
        <form action="../Handle/AddProductToCartProcess" method="POST">
            <input type="hidden" name="ProductID" value="<?php echo $row["ProductID"] ?>">
            <button type="submit" id="AddToCart">Add to cart</button>
        </form>
    </div>
<?php } ?>