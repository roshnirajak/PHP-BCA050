<?php
    if (isset($_COOKIE['user'])) {
        $status = 1;
    }
    else{
        header('location:5)_login.php');
    }
?>
<!DOCTYPE html>

<head></head>

<body>
    <?php
    if($status == 1) {
        ?>
        <h2>Welcome to Homepage</h2>
        This is homepage of the orders website<br>
        You can view order from other page<br>
        by clicking on the button bellow...<br>
        <a href="5)_orders.php"><button>Orders Page</button></a>
        <?php
    }
    ?>
</body>

</html>