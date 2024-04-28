@extends('base')
@section('central_section')
        <div class="info_div">
            <div class="h_div">
                <h1>Онлайн</h1>
                <h1>Резюме</h1>
                <h1>Конструктор</h1>
            </div>
            <div>
                <a href="{{ route('create.main') }}"><button class="m_button">Создать резюме</button></a>
            </div>
        </div>
        <img class="main_image" src={{ asset('static/images/mainimage.jpg') }}>
@endsection
