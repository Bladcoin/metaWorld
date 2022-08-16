<?php
    require 'includes/config.inc.php';
    require 'includes/Newsletter.class.php';
    
    if (!empty($_POST)) {
        $email = $_POST['signup-email'];
    
        Newsletter::register($email);
    }
?>