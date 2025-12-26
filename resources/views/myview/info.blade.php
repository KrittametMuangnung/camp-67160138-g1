@extends('template.default')
@section('header','ตารางแม่สูตรคูณ')
@section('content')
    <form action = "/calculate" method="post">
        @csrf
        <?php //echo insset($_GET['mynumber']) ? $_GET['mynumber'] :""; ?>
        <input class="form-control" name="mynumber" type="number">
        <br>
        <button class="bth bth-success"> บันทึก </button>
    </form>
@endsection
