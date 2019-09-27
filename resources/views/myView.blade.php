@extends('template.base')



@section('title')
  <h1>{{ $title}}</h1>
@endsection

@section('content')
  <ul>

      @foreach ($arr as $value)
        <li class=" cube {{ $class}}">{{ $value}}</li>
      @endforeach

  </ul>

@endsection


@section('link')
  <a href="{{$link}}">link</a>

@endsection
