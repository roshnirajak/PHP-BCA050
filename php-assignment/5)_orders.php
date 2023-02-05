<?php
    if (isset($_COOKIE['user'])) {
        $status = 1;
    }
    else{
        header('location:5)_login.php');
    }
?>
<!DOCTYPE html>

<head>
    <style>
        .orBox {
            background-color: #ddd;
        }
    </style>
</head>

<body align=center>
    <?php
    if($status == 1){
        ?>
        <h2>Welcome to Orders Page</h2>
        <table align=center>
            <tr>
                <td>
                    <div class="orBox">
                        <h3>Order 1</h3>This is Order 1 of this site
                    </div>
                </td>
                <td>
                    <div class="orBox">
                        <h3>Order 2</h3>This is Order 2 of this site
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="orBox">
                        <h3>Order 3</h3>This is Order 3 of this site
                    </div>
                </td>
                <td>
                    <div class="orBox">
                        <h3>Order 4</h3>This is Order 4 of this site
                    </div>
                </td>
            </tr>
        </table>
        <?php
    }
    ?>
</body>

</html>