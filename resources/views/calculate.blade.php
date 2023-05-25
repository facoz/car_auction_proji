@extends('layouts.base')
@section('title', 'Crear Orden')

@section('content')
<form method="POST" action="{{route('calculatePrice')}}">
    @csrf
    <input name="price" type="text" placeholder="Insert Vechicle Price">
    <select name="type" id="type">
        <option value="common">Common</option>
        <option value="luxury">Luxury</option>
    </select>
    <button type="submit">Crear pedido</button>
</form>
@endsection