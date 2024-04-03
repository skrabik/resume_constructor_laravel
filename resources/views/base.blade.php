<!DOCTYPE html>
<html>
<head>
    <title>Главная страница</title>
    <link href="{{ asset('static/css/styles.css') }}" rel="stylesheet">
</head>
<body>
        <div class="header">
            <div class="inner-header">
                Создай своё резюме!
            </div>
        </div>
        <div class="main-block">
            <div class="container">
                @yield('central_section')
            </div>
        </div>
        </div>
        <div class="footer">Обратная связь: <span><a class="mail_ref" href="mailto:babenk00r@yandex.ru">babenk00r@yandex.ru</a></span></div>
</body>
</html>
