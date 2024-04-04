<!DOCTYPE html>
<html>
<head>
    <title>{{$title}}</title>
    <link rel="icon" href="{{ asset('static/images/icon.ico') }}" type="iamge/x-icon">
    <link href="{{ asset('static/css/styles.css') }}" rel="stylesheet">
</head>
<body>
        <div class="header">
            <div class="inner-header">
                <a href={{ route('main.render') }}>Создай своё резюме!</a>
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
