<?php

// http://php.net/manual/es/features.http-auth.php

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="domain"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Please, log in!';
    exit;
} else {
    echo "<p>User: {$_SERVER['PHP_AUTH_USER']}</p>";
    echo "<p>Password: {$_SERVER['PHP_AUTH_PW']}</p>";
}
?>
