<?php
    if (isset($_COOKIE["user"])) {
        $status = 1;
    } 
    else {
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<head>
</head>
<body>
    <?php
    if ($status == 1) {
        include('nav.html');
        ?>
        
        <div class="content">
        <h2>Welcome to Homepage</h2><hr>
        <p>
            This is the homepage of a website which shows you the orders of the products which you have ordered<br>
            This website has all sorts of goods available for you.<br>
            Go checkout some amazing stuff from...<br>
            <a href="orders.php"><button type="submit">Orders Page</button></a>
        </p>

        </div>

        <?php
    }
    ?>

</body>

</html>