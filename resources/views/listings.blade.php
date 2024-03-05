<!DOCTYPE html>

<h1>{{$title}}</h1>

@unless (count($data) == 0)
    
    @foreach ($data as $item)
        <h2>{{$item['title']}}</h2>
        <p>{{$item['description']}}</p>    
    @endforeach

@else
    <p>There is no list of ikan</p>

@endunless