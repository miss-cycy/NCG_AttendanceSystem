<?php
// tlogout_db.php
session_start();

// Destroy all session data
$_SESSION = [];
session_unset();
session_destroy();

// Redirect to login page
header('Location: /proto/Entrep_prototype/login_feature/login_as.php');
exit();
