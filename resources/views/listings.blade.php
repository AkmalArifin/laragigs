@extends('layout')

@section('content') 

<h1>{{$title}}</h1>

@unless (count($data) == 0)
    
    @foreach ($data as $item)
        <a href="/listings/{{$item['id']}}"><h2>{{$item['title']}}</h2></a>
        <p>{{$item['description']}}</p>    
    @endforeach

@else
    <p>There is no list of ikan</p>

@endunless

@endsection