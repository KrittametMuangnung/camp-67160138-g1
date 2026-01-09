@extends('template.default')

@section('content')
    <h1>Flight Update</h1>
    <form action="{{ url('/flights/'.$flight_update->id) }}" method="post">
        @csrf
        @method('PUT')
        <lable for="name">Name</lable>
        <input class="form-control" type="text" name="name" id="name" value="{{$flight_update->name}}">
        <lable for="airline">Airline</lable>
        <input class="form-control" type="text" name="airline" id="airline" value="{{$flight_update->airline}}">
        <lable for="number_of_seats">Number of Seats</lable>
        <input class="form-control" type="number" name="number_of_seats" id="number_of_seats" value="{{$flight_update->number_of_seats}}">
        <lable for="price">Price</lable>
        <input class="form-control" type="decimal" name="price" id="price" value="{{$flight_update->price}}">
        <button class="btn btn-primary" type="submit">บันทึก</button>
    </form>
    @include('flights.table')
@endsection
