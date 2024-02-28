@extends('base')
@section('central_section')
    <div>
        <h2>выбрать шаблон</h2>
        @foreach($templates as $template)
            <a href="{{$template->data}}"><img src="{{$template->url}}"></a>
        @endforeach
    </div>
@endsection
