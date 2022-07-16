@extends('layouts.base')

@section('page-content')
    <ul>
        <li>
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <h3>Title: {{$comic->title}}</h3>
            <p>Description: {{$comic->description}}</p>
            <h4>Series: {{$comic->series}}</h4>
            <h4>Tipology: {{$comic->type}}</h4>
            <h4>Selling by: {{$comic->sale_date}}</h4>
            <h4>Price: {{$comic->price}} €</h4>
            <a href="{{route('comics.edit', $comic->id)}}"><button class="add">modify</button></a>
            <form action="{{route('comics.destroy', $comic->id)}}" method="POST" onsubmit="return confirm('Confirm?')">
                @csrf
                @method('DELETE')
                <button class="danger" type="submit">Delete</button>
            </form>
        </li>
    </ul>
@endsection