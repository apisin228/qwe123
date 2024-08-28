<!DOCTYPE html>
<html>
<head>
    <title>Форма обратной связи</title>
</head>
<body>

<h2>Форма обратной связи</h2>

<form method="post" action="/">
    <label for="name">Имя:</label><br>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="subject">Тема:</label><br>
    <input type="text" id="subject" name="subject" required><br>

    <label for="message">Сообщение:</label><br>
    <textarea id="message" name="message" required></textarea><br><br>

    <input type="submit" value="Отправить">
</form>

</body>
</html>
