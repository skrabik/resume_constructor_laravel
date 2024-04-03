@extends('base')
@section('central_section')

<div class="form-container">
    <form method="post" action="{{route('select_template.render')}}" class="data-form">
        @csrf

        <div class='section_t2'>
            <label for="first_name">Имя</label>
            <input class="input_field" type="text" name="first_name" placeholder="Иван">
            <label for="last_name">Фамилия</label>
            <input class="input_field" type="text" name="last_name" placeholder="Иванов">
            <label for="patronymic">Отчество</label>
            <input class="input_field" type="text" name="patronymic" placeholder="Иванович">
        </div>

        <div class='section_t2'>  
            <label for="age">Возраст</label>
            <input class="input_field" placeholder='24' type="text" name="age">
            <label for="email">Электронная почта</label>
            <input class="input_field" type="email" name="email" placeholder="myemail@example.com">
            <label for="phone">Телефон</label>
            <input class="input_field" type="tel" name="phone" placeholder="880088888">
        </div>

        <div class='section_t1'>
            <label for="position">Должность</label>
            <input class="input_field" type="text" name="position" placeholder="developer">
            <label for="description">Краткое описание</label>
            <textarea class="text_field" name="description" placeholder="Хочу разрабатывать REST API на php"></textarea>
        </div>

        <div class='section_t1'>
            <label for="experience">Опыт</label>

            @for($i = 0; $i<3; $i++)
                <div style="padding: 10px">
                <label>Организация</label>
                <input class="input_field" name="experience[{{$i}}][2]">
                <label>Дата работы</label>
                <input class="input_field" name="experience[{{$i}}][3]">
                <label>Должность</label>
                <input class="input_field" name="experience[{{$i}}][0]">
                </div>
                <label>Описание</label>
                <textarea class="text_field" name="experience[{{$i}}][1]"></textarea>
            @endfor
        </div>

        <div class='section_t1'>
            <label>Проекты</label>
            @for($i=0;$i<2;$i++)
                <div style='padding: 10px'>
                <label>Название проекта</label>
                <input class="input_field" name="project[{{$i}}][name]">
                </div>
                <label>Описание проекта</label>
                <textarea class="text_field" name="project[{{$i}}][description]"></textarea>
            @endfor
        </div>


        <div class='section_t1'>
            <label for="skills">Ключевые навыки</label>
            @for($i = 0; $i<5; $i++)
                <input class='input_field' name="skills[{{$i}}]">
            @endfor
        </div>

        <div class='section_t2'>
            <label for="gender">Пол</label>
            <select class="select-field" name="gender">
                <option>Мужской</option>
                <option>Женский</option>
            </select>
            <label for="busyness">Занятость</label>
            <select class="select-field" name="busyness">
                <option>Полная</option>
                <option>Частичная</option>
            </select>
            <label for="business_trip">Готовность к коммандировкам</label>
            <select class="select-field" name="business_trip">
                <option>Готов</option>
                <option>Не готов</option>
            </select>
        </div>
        <div class='section_t2'>
            <label for="city">Город проживания</label>
            <input class="input_field" type="text" name="city" placeholder="Например: Москва">
        </div>

        <div class='section_t1'> 
            <label for="education">Образование</label>
            <textarea class="text_field" name="education"></textarea>

            <label for="year">Год окончания</label>
            <input class="date_field" type="date" name="year" placeholder="2024-01-01" min="1985-01-01" max="2030-01-01" />
        </div>

        <div class='section_t1'> 
            <label for="languages">Владение иностранными язками</label>
            <textarea placeholder='Английский B2, фрацузский A1' class="text_field" type="text" name="languages"></textarea>
        </div>

        <div class='section_t1'> 
            <label for="about_me">Обо мне</label>
            <textarea class="text_field" name="about_me" type="text" cols="" rows="" placeholder="Люблю котиков"></textarea>
        </div>

        <button class="submit-button" type="submit">Выбрать шаблон</button>
    </form>
</div>
@endsection


