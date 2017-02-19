<?php
ini_set('display_errors','1'); error_reporting(E_ALL);

session_start();


if (isset($_GET['logout'])) {
    unset($_SESSION['user']);
    header('Location: '.$_SERVER['PHP_SELF']);
    die;
}
if (!empty($_POST['user'])) {
    $_SESSION['user'] = $_POST['user'];
}



$loggedin = !empty($_SESSION['user']);
if ($loggedin) {
    $user = htmlentities($_SESSION['user']);
}
?>

<html>
<title>
<?php
if ($loggedin) {
    echo "Welcome $user!";
} else {
    echo "Welcome!";
}
?>
</title>
<body>

<?php if (!$loggedin): ?>
    <form method="POST">
    <input type="text" name="user">
    <input type="submit" value="Login">
    </form>
<?php else: ?>
    <p>Welcome <?php echo $user; ?>!</p>
    <p><a href="?logout">Log out</a></p>
<?php endif; ?>


</body>
</html>