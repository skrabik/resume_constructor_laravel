@extends('base')
@section('central_section')
<div>
    <style>
        #start_button {
            text-align: center;
            font-size: 20px;
            height: 50px;
            width: 300px;
            border-radius: 10px;
            background: #3869d4;
        }
        #button-block {
            flex: 0 0 auto;
        }
    </style>
    <div class="button-block">
        <a href="{{route('select_template.render')}}"><button id="start_button">Создать резюме</button></a>
    </div>
</div>
@endsection
