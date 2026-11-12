
<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'Rabie' && $password == '106242400') {
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
    } else {
        echo "Invalid login. <a href='login.php'>Try again</a>.";
    }
?>
