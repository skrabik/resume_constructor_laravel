<html>
    <head>
        <title>Просмотр результата</title>
        <style>

        </style>
    </head>
    <body>
        @yield('template')
        <div>
            <form method="post" action="{{route('check_resume.download')}}" class="data-form">
                @csrf
                <input type="hidden" name="first_name" placeholder="Иван" value="{{$first_name}}">
                <input type="hidden" name="last_name" placeholder="Иванов" value="{{$last_name}}">
                <input type="hidden" name="patronymic" placeholder="Иванович">
                <input type="hidden" name="date_of_birth" placeholder="2024-01-01" min="1985-01-01" max="2025-01-01" />
                <input type="hidden" name="email" placeholder="myemail@example.com">
                <input type="hidden" name="phone" placeholder="880088888">
                <select type="hidden" name="busyness">
                    <option>Полная</option>
                    <option>Частичная</option>
                </select>
                <select type="hidden" name="business_trip">
                    <option>Готов</option>
                    <option>Не готов</option>
                </select>
                <input type="hidden" name="sity" placeholder="Например: Москва">
                <select type="hidden">
                    <option>Мужской</option>
                    <option>Женский</option>
                </select>
                <textarea type="hidden" name="education"></textarea>
                <input type="hidden" name="year" placeholder="2024-01-01" min="1985-01-01" max="2025-01-01" />
                <input type="hidden" name="languages">
                <textarea type="hidden" name="about_me" cols="" rows="" placeholder="Студент российского университета дружбы народов"></textarea>
                <button class="submit-button" type="submit">Скачать в pdf</button>
            </form>
        </div>
    </body>
</html>
