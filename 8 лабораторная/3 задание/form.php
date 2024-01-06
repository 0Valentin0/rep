<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $full_name = htmlspecialchars($_POST["full_name"]);
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $dob = $_POST["dob"];

    // Простейшие проверки (добавьте более сложные проверки при необходимости)
    if (empty($full_name) || empty($username) || empty($password) || empty($dob)) {
        echo "error: Пожалуйста, заполните все поля.";
    } else {
        // Ваши дальнейшие действия с данными, например, сохранение в базу данных

        // Выводим сообщение об успешной регистрации (замените на свою логику)
        echo "success: Регистрация успешна для $full_name. Добро пожаловать, $username!";
    }
} else {
    // Если кто-то попытается обратиться напрямую к этому файлу, выведем ошибку
    echo "error: Доступ запрещен.";
}
?>
