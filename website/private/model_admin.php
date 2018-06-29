<?php
function process_login(){
    $username = $_POST['username'];
    $password = $_POST['password'];
    header('Location: admin.php?page=dashboard');
}