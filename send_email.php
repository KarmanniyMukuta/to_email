<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Формируем содержимое письма
    $to = "nefechofgennadiy@gmail.com"; // Укажите вашу почту здесь
    $subject = "Новое сообщение от $name $surname";
    $body = "Отправитель: $name $surname\n";
    $body .= "Электронная почта: $email\n";
    $body .= "Сообщение:\n$message";

    // Отправляем письмо
    if (mail($to, $subject, $body)) {
        echo "Письмо успешно отправлено!";
    } else {
        echo "Ошибка при отправке письма.";
    }
}
?>