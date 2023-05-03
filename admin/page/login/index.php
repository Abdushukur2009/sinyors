<?php
$sa = "";
if (isset($_POST['btn'])) {
    $password = $_POST['password'];
    $name = $_POST['text'];
    if ($password == "Abdushukur" && $name == "eng_zo'r") {
        $sa = '<a href="?al=hom.php">kirish</a>';
    } else {
        $sa = "not";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="csses/main.css">
</head>

<body>

    <div class="login-box">
        <h2>Login</h2>
        <form style="margin: 0 auto;" method="post">
            <div class="user-box">
                <input type="text" name="text">
                <label>username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password">
                <label>Password</label>
            </div>
            <button href="#" name="btn" style="margin: 0 auto;">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </button><br><br>
            <h2 style="color: red; margin: 0 ;">
                <?= $sa ?>
            </h2>
        </form>
    </div>
</body>

</html>