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
</style>
<div class="form-container">
    <form method="post" action="{{route('check_resume.render')}}" class="data-form">
        @csrf
        <label for="first_name">Имя</label>
        <input type="text" name="first_name" placeholder="Иван">
        <label for="last_name">Фамилия</label>
        <input type="text" name="last_name" placeholder="Иванов">
        <label for="patronymic">Отчество</label>
        <input type="text" name="patronymic" placeholder="Иванович">
        <label for="date_of_birth">Дата рождения</label>
        <input type="date" name="date_of_birth" placeholder="2024-01-01" min="1985-01-01" max="2025-01-01" />
        <label for="email">Электронная почта</label>
        <input type="email" name="email" placeholder="myemail@example.com">
        <label for="phone">Телефон</label>
        <input type="tel" name="phone" placeholder="880088888">

        <label for="busyness">Занятость</label>
        <select name="busyness">
            <option>Полная</option>
            <option>Частичная</option>
        </select>
        <label for="business_trip">Готовность к коммандировкам</label>
        <select name="business_trip">
            <option>Готов</option>
            <option>Не готов</option>
        </select>

        <label for="sity">Город проживания</label>
        <input type="text" name="sity" placeholder="Например: Москва">

        <label for="gender">Пол</label>
        <select>
            <option>Мужской</option>
            <option>Женский</option>
        </select>

        <label for="education">Образование</label>
        <textarea name="education"></textarea>

        <label for="year">Год окончания</label>
        <input type="date" name="year" placeholder="2024-01-01" min="1985-01-01" max="2025-01-01" />

        <label for="languages">Владение иностранными язками</label>
        <input type="text" name="languages">

        <label for="about_me">Обо мне</label>
        <textarea name="about_me" type="text" cols="" rows="" placeholder="Студент российского университета дружбы народов"></textarea>


        <button class="submit-button" type="submit">Показать результат</button>
    </form>
</div>
@endsection


