<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());


echo "Hello Dog";


// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laravel1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Обработка данных из формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"]; // Проверяем наличие поля subject
    $message = $_POST["message"];

    // Подготовка SQL-запроса
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Выполнение SQL-запроса
    if ($stmt->execute()) {
        echo "Сообщение отправлено успешно!";
    } else {
        echo "Ошибка: " . $stmt->error;
    }
    $stmt->close();
}

// Закрытие подключения
$conn->close();

?>





