<html>
    <head>
        <title>Просмотр результата</title>
        <style>

        </style>
    </head>
    <body>
        @yield('template')
        <div>
            <form method="post" action="{{ route('check_resume.download') }}" class="data-form">
                @csrf
                <input type="hidden" name="first_name" value="{{ $first_name }}">
                <input type="hidden" name="last_name" value="{{ $last_name }}">
                <input type="hidden" name="patronymic" value="{{ $patronymic }}">
                <input type="hidden" name="date_of_birth" value="{{ $date_of_birth }}"/>
                <input type="hidden" name="email" value="{{ $email }}">
                <input type="hidden" name="phone" value="{{ $phone }}">
                <input type="hidden" name="busyness" value="{{ $busyness }}">
                <input type="hidden" name="business_trip" value="{{ $business_trip }}">
                <input type="hidden" name="city" value="{{ $city }}">
                <input type="hidden" name="gender" value="{{ $gender }}">
                <input type="hidden" name="education" value="{{ $education }}">
                <input type="hidden" name="year" value="{{ $year }}">
                <input type="hidden" name="languages" value="{{ $languages }}">
                <input type="hidden" name="about_me" value="{{ $about_me }}">
                <button class="submit-button" type="submit">Скачать в pdf</button>
            </form>
        </div>
    </body>
</html>
