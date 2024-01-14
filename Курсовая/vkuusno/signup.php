<?php
include("config_db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Используйте конкретные столбцы таблицы в запросе
    $sql = "INSERT INTO user (name, email, password, updated_at) VALUES ('$name', '$email', '$password', CURRENT_TIMESTAMP)";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $success = "Ваш аккаунт успешно создан! Пожалуйста, войдите";
        header('Location: index.php');
    } else {
        echo 'Ошибка запроса: ' . mysqli_error($conn);
    }
}
?>
