<?php
session_start();
unset($_SESSION['staff_id']);
unset($_SESSION['staff_userid']);
unset($_SESSION['log']);

session_destroy();

echo "<meta http-equiv=\"refresh\" content=\"2;url=index.html\">";
?>