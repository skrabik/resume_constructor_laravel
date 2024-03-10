@extends('base')
@section('central_section')
<style>
    .data-form {
        display: flex;
        flex-direction: column;
        font-size: 3ex;
    }
    .submit-button {
        text-align: center;
        font-size: 20px;
        height: 50px;
        width: 300px;
        border-radius: 10px;
        background: #3869d4;
        align-items: center;
    }
    .input_field {
        height: 50px;
        width: 250px;
    }
    .input_field:hover {
        background: #c2c7d1;
    }
    .date_field {
        width: 250px;
        height: 50px;
    }
    .date_field:hover {
        background: #c2c7d1;
    }
    .text_field{
        width: 400px;
        height: 180px;
    }
    .text_field:hover {
        background: #c2c7d1;
    }
    .select-field {
        width: 250px;
        height: 30px;
    }
    .select-field:hover {
        background: #c2c7d1;
    }
</style>
<div class="form-container">
    <form method="post" action="{{route('check_resume.render')}}" class="data-form">
        @csrf
        <input type="hidden" name="template_id" value="{{ $template_id }}">
        <label for="first_name">Имя</label>
        <input class="input_field" type="text" name="first_name" placeholder="Иван">
        <label for="last_name">Фамилия</label>
        <input class="input_field" type="text" name="last_name" placeholder="Иванов">
        <label for="patronymic">Отчество</label>
        <input class="input_field" type="text" name="patronymic" placeholder="Иванович">
        <label for="date_of_birth">Дата рождения</label>
        <input class="date_field" type="date" name="date_of_birth" placeholder="2024-01-01" min="1985-01-01" max="2025-01-01" />
        <label for="email">Электронная почта</label>
        <input class="input_field" type="email" name="email" placeholder="myemail@example.com">
        <label for="phone">Телефон</label>
        <input class="input_field" type="tel" name="phone" placeholder="880088888">

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

        <label for="city">Город проживания</label>
        <input class="input_field" type="text" name="city" placeholder="Например: Москва">

        <label for="gender">Пол</label>
        <select class="select-field" name="gender">
            <option>Мужской</option>
            <option>Женский</option>
        </select>

        <label for="education">Образование</label>
        <textarea class="text_field" name="education"></textarea>

        <label for="year">Год окончания</label>
        <input class="date_field" type="date" name="year" placeholder="2024-01-01" min="1985-01-01" max="2030-01-01" />

        <label for="languages">Владение иностранными язками</label>
        <textarea class="text_field" type="text" name="languages"></textarea>

        <label for="about_me">Обо мне</label>
        <textarea class="text_field" name="about_me" type="text" cols="" rows="" placeholder="Студент российского университета дружбы народов"></textarea>


        <button class="submit-button" type="submit">Показать результат</button>
    </form>
</div>
@endsection


