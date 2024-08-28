<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/add', function () {
    return view('add');
})->name('add');

Route::get('/add', [ContactController::class, 'add'])->name('add-new');

Route::get('/show', [ContactController::class, 'show'])->name('show-all');

Route::get('/contact', function () {
    return view('contact');
});

Route::post('contact/submit', function (){
    return 'Okey';
});



Route::post('/', function () {
    // Подключение к базе данных
    // ...

    // Обработка данных из формы
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
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
});

