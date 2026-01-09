@extends('template.default')

@section('content')
    <h1>Flight Create</h1>
    <form action="{{ url('/flights') }}" method="post">
        @csrf
        <lable for="name">Name</lable>
        <input class="form-control" type="text" name="name" id="name">
        <lable for="airline">Airline</lable>
        <input class="form-control" type="text" name="airline" id="airline">
        <lable for="number_of_seats">Number of Seats</lable>
        <input class="form-control" type="number" name="number_of_seats" id="number_of_seats">
        <lable for="price">Price</lable>
        <input class="form-control" type="decimal" name="price" id="price">
        <button class="btn btn-primary" type="submit">บันทึก</button>
    </form>
    @include('flights.table')
@endsection
