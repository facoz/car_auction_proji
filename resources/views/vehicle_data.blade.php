@extends('layouts.base')
@section('title', 'Result')

@section('content')
<table class="table table-sm">
    <thead>
        <tr>
            <th>Price</th>
            <th>Vehicle Type</th>
            <th>Basic</th>
            <th>Special</th>
            <th>Association</th>
            <th>Storage</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$vehicle->price}}</td>
            <td>{{$vehicle->type}}</td>
            <td>{{$vehicle->basicFee}}</td>
            <td>{{$vehicle->specialFee}}</td>
            <td>{{$vehicle->association}}</td>
            <td>{{$vehicle->storage_fee}}</td>
            <td>{{$vehicle->newPrice}}</td>
        </tr>
    </tbody>
</table>
<a href="{{route('show')}}">Return</a>
@endsection