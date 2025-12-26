@extends('template.default')
@section('title', 'ข้อมูลที่ส่งมา')
@section('content')
    <div class="alert alert-success">ถูกต้อง</div>
    <h1>ข้อมูลที่คุณกรอก:</h1>
    <p><strong>ชื่อ:</strong> {{ $fname }}</p>
    <p><strong>สกุล:</strong> {{ $lname }}</p>
    <p><strong>วันเกิด:</strong> {{ $birth }}</p>
    <p><strong>อายุ:</strong> {{ $age }}</p>
    <p><strong>เพศ:</strong> {{ $gender }}</p>
    <p><strong>ที่อยู่:</strong> {{ $address }}</p>
    <p><strong>สีที่ชอบ:</strong> {{ $color }}</p>
    <p><strong>เพลงที่ชอบ:</strong> {{ is_array($music) ? implode(', ', $music) : $music }}</p>
    <p><strong>ยินยอม:</strong> {{ $agree ? 'ใช่' : 'ไม่' }}</p>
    @if($photo)
        <p><strong>รูป:</strong> <img src="{{ Storage::url($photo) }}" alt="Photo" width="100"></p>
    @endif
@endsection
