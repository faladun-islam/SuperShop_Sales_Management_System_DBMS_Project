<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the homepage (index.php in the root directory)
header("Location: /supershop/index.php"); 
exit;
?>
