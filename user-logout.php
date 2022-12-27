<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['username']);
unset($_SESSION['log']);

session_destroy();

echo "<meta http-equiv=\"refresh\" content=\"2;url=index.html\">";
?>