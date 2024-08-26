
<body>
<h1>Контактная форма</h1>
<form action="/contact/submit" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Введите имя:</label><br>
        <input type="text"  name="name" placeholder="Введите имя" id="name" class="form-control">
    </div><br>

    <div class="form-group">
        <label for="email">Email:</label><br>
        <input type="text"  name="email" placeholder="Введите email" id="name" class="form-control">
    </div><br>

    <div class="form-group">
        <label for="subject">Тема сообщения:</label><br>
        <input type="text"  name="name" placeholder="Тема сообщения" id="subject" class="form-control">
    </div><br>

    <div class="form-group">
        <label for="message">Сообщение:</label><br>
        <textarea name="message" id="message" class="form-control"></textarea>
    </div><br>

    <button type="submit" class="btn btn-success">Отправить</button>
</form>
</body>

