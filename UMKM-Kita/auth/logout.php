<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
header("Location: ../index.php?page=home"); // Redirect to home page
exit();
?>