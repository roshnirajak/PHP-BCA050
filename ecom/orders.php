<?php
    if(isset($_COOKIE["user"])){
    $status = 1;
    }
    else{
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<head>
<style>
    .orBox{
        background-color:#19d6da33;
        height:100px;
        width:180px;
    }
</style>
</head>
<body>
    <?php
    if ($status == 1) {
        include('nav.html');
        ?>
        <div class="content">
        <h2>Welcome to Orders Page</h2>
        <hr>
        <table align=center>
            <tr>
                <td><div class="orBox"><h3>Charmandor</h3>The fire pokemon. I hate him</div></td>
                <td><div class="orBox"><h3>Pikachu</h3>Noone hates pikachu, i feel the same</div></td>
            </tr>
            <tr>
                <td><div class="orBox"><h3>Starmie</h3>She was weird idk why</div></td>
                <td><div class="orBox"><h3>Meowth</h3>He was so skilled why was he with team rocket?</div></td>
            </tr>
        </table>
    </div>
    <?php
    }
    ?>
</html>