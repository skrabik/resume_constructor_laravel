<html>
    <style>
        body {
            min-height: 100%;
            background: #eee;
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            color: #222;
            font-size: 14px;
            line-height: 26px;
            padding-bottom: 50px;
        }
        .download_button {
            width: 165px;
            height: 60px;
            border-radius: 14px;
            border: none;
            font-size: 21px;
            margin-left: 30px;
            margin-top: 10px;
        }
        .download_button:hover {
            background: #bbc0c4;
        }
    </style>
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
                <input type="hidden" name="template_id" value="{{ $template_id }}">
                <input type="hidden" name="first_name" value="{{ $first_name }}">
                <input type="hidden" name="last_name" value="{{ $last_name }}">
                <input type="hidden" name="patronymic" value="{{ $patronymic }}">
                <input type="hidden" name="age" value="{{ $age }}"/>
                <input type="hidden" name="position" value="{{ $position }}">
                <input type="hidden" name="email" value="{{ $email }}">
                <input type="hidden" name="phone" value="{{ $phone }}">
                <input type="hidden" name="description" value="{{ $description }}">
                <input type="hidden" name="busyness" value="{{ $busyness }}">
                <input type="hidden" name="business_trip" value="{{ $business_trip }}">
                <input type="hidden" name="city" value="{{ $city }}">
                <input type="hidden" name="gender" value="{{ $gender }}">
                <input type="hidden" name="education" value="{{ $education }}">
                <input type="hidden" name="year" value="{{ $year }}">
                <input type="hidden" name="languages" value="{{ $languages }}">
                <input type="hidden" name="about_me" value="{{ $about_me }}">


                @for($i = 0; $i<5; $i++)
                    <input type="hidden" name="skills[{{$i}}]" value="{{$skills[$i]}}">
                @endfor

                @for($i = 0; $i<3; $i++)
                    <input type="hidden" name="experience[{{$i}}][2]" value="{{ $experience[$i][2] }}">
                    <input type="hidden" name="experience[{{$i}}][3]" value="{{ $experience[$i][3] }}">
                    <input type="hidden" name="experience[{{$i}}][0]" value="{{ $experience[$i][0] }}">
                    <input type="hidden" name="experience[{{$i}}][1]" value="{{ $experience[$i][1] }}">
                @endfor

                @for($i=0;$i<2;$i++)
                    <input type="hidden" name="project[{{$i}}][name]" value="{{ $project[$i]['name'] }}">
                    <input type="hidden" name="project[{{$i}}][description]" value="{{ $project[$i]['description'] }}">
                @endfor

                <button class="download_button" type="submit">Скачать в pdf</button>

            </form>
        </div>
    </body>
</html>
