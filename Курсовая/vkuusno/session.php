<?php
include('config_db.php');
session_start();

if (isset($_SESSION['login_user'])) {
    $user_check = $_SESSION['login_user'];

    $ses_sql = mysqli_query($conn, "SELECT email, name, is_admin FROM user WHERE email = '$user_check' ");

    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

    $login_session = $row['email'];
    $login_session_name = $row['name'];
    $check_admin = $row['is_admin'];
    
    $is_admin = ($check_admin == 1) ? true : false;
}

?>
 