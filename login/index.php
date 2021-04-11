<?php
if($_POST['submit']) {
    include_once $_SERVER['DOCUMENT_ROOT'] . "config.php";
    global $settings;
    // Create connection
    $conn = new mysqli($settings->db_host . ":" . $settings->db_port, $settings->db_user, $settings->db_password, $settings->db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/components/head.php" ?>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/components/header.php" ?>
        
        <section class="webcontainer">

            <section class="main">
                <form action="" method="POST">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <button name="submit" value="submit" type="submit">Log in</button>
                </form>
            </section>

        </section>

    </body>
</html>