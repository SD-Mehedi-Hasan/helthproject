<?php 

$key = $_GET['key'];

if (strpos($key, '113355') !== false) {
    // Key is valid; allow the app to continue
    echo "Access granted. App can continue.";
} else {
    // Key is invalid; deny access
    echo "Access denied. Invalid key.";
}

?>
