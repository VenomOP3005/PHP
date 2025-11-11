<?php
//verify the user login info
    session_start();
    $_SESSION['username']="Vinay";
    $_SESSION['favpage']="forms";
    echo "We have saved your session";
?>