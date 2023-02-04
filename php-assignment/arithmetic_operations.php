<?php

if (isset($_POST['add'])) {
    $varA = $_POST['varA'];
    $varB = $_POST['varB'];
    $sol = $varA + $varB;
}
if (isset($_POST['sub'])) {
    $varA = $_POST['varA'];
    $varB = $_POST['varB'];
    $sol = $varA - $varB;
}
if (isset($_POST['divide'])) {
    $varA = $_POST['varA'];
    $varB = $_POST['varB'];
    $sol = $varA / $varB;
}
if (isset($_POST['product'])) {
    $varA = $_POST['varA'];
    $varB = $_POST['varB'];
    $sol = $varA * $varB;
}
?>
<!DOCTYPE html>

<head></head>

<body>
    <h2>Calculator</h2>
    <form method="post" onsubmit="retrun false">

        Enter var a:
        <input type="number" name="varA"><br>
        Enter var b:
        <input type="number" name="varB"><br>

        <input type="submit" name="add" value="Add">
        <input type="submit" name="sub" value="Subtract">
        <input type="submit" name="divide" value="Divide">
        <input type="submit" name="product" value="Multiply">

        <span>
            <?php
            if (isset($sol)) {
                echo ($sol);
            }
            ?>
        </span>

    </form>
</body>

</html>