@extends('base')
@section('central_section')
    <div>
        <h2>выбрать шаблон</h2>
            @foreach($templates as $template)
                <form method="get" action="{{route('create.main')}}">
                    <input type="hidden" name="template_id" value="{{ $template->id }}">
                    <button type="submit"><img src='{{ asset($template->image_url) }}' width="100" height="100"></button>
                </form>
            @endforeach
    </div>
@endsection
