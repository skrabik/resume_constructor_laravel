<html>
<head>
    <title>Главная страница</title>
    <style>
        * {
            margin: 0px;
            border-style: none;
            outline: 0;
            outline-offset: 0;

        }
        .header {
            background: #9fcdff;
            font-size: 3ex;
            height: 10vh;
        }
        .inner-header {
            text-align: left;
            margin: 23px;
        }
        .main-block {
            background: #80bdff;
            height: fit-content;
        }
        .footer {
            background: #2d3748;
            color: white;
            font-size: 1.2rem;
            text-align: end;
            min-height: 10vh;
        }
        .main-button {
            text-align: center;
            font-size: 20px;
            height: 50px;
            width: 300px;
            border-radius: 10px;
            background: #3869d4;
        }
        .container {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="inner-header">
                Создай своё резюме!
            </div>
        </div>
        <div class="main-block">
            @yield('central_section')
        </div>
        <div class="footer">Обратная связь: <a href="mailto:babenk00r@yandex.ru">babenk00r@yandex.ru</a></div>
    </div>
</body>
</html>
