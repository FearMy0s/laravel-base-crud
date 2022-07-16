@extends('layouts.base')
@section('page-content')
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{old('title')}}">        
        <label for="desc">Description</label>
        <input type="text" id="desc" name="description" value="{{old('description')}}">
        <label for="f-img">Immage</label>
        <input type="text" id="f-img" name="thumb" value="{{old('thumb')}}">
        <label for="price">Price</label>
        <input type="number" id="price" name="price" value="{{old('price')}}">
        <label for="serie">Series</label>
        <input type="text" id="serie" name="series" value="{{old('series')}}">
        <label for="type">Tipology</label>
        <input type="text" id="type" name="type" value="{{old('sale_date')}}">
        <label for="date">Data</label>
        <input type="text" id="date" name="sale_date" value="{{old('type')}}">
        <button type="submit" class="add">create</button>
    </form>

    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection