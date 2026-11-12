<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>
<body>
    <?php include 'header.inc'; ?>

    <form method="post" action="process.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="hidden" name="token" value="R106242400">
        <input type="submit" value="Login">
    </form>

    <?php include 'footer.inc'; ?>
</body>
</html>