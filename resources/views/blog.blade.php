@extends('layouts.app')
@section('title','Blog')

@section('content')
<h1> Blog </h1>
<h2>
@foreach($posts as $post)

<h1>
    {{$post ->title}}
</h1> 

@endforeach
</h2>
{{--@dump($posts)--}}
@endsection