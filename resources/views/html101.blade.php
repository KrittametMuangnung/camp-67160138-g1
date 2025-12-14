@extends('template.default')
@section('title', 'Workshop FORM')
@section('content')
<form>
  <div class="row">
    <label>ชื่อ</label>
    <input type="text" name="fname" id="fname"/>
    <div class="valid-feedback">
        ถูกต้อง
    </div>
    <div class ="invalid-feedback">
        โปรดระบุชื่อ
    </div>

  <div class="row">
    <label>สกุล</label>
    <input type="text" name="lname" />
  </div>

  <div class="row">
    <label>วัน/เดือน/ปีเกิด</label>
    <input type="date" name="birth" />
  </div>

  <div class="row">
    <label>อายุ</label>
    <input type="number" name="age" />
  </div>

  <div class="row">
    <label>เพศ</label>
    <label class="inline"><input type="radio" name="gender" value="male"> ชาย</label>
    <label class="inline"><input type="radio" name="gender" value="female"> หญิง</label>
  </div>

  <div class="row">
    <label>รูป</label>
    <input type="file" name="photo" />
  </div>

  <div class="row">
    <label>ที่อยู่</label>
    <textarea name="address"></textarea>
  </div>

  <div class="row">
    <label>สีที่ชอบ</label>
    <select name="color">
      <option>สีแดง</option>
      <option>สีน้ำเงิน</option>
      <option>สีเขียว</option>
      <option>สีเหลือง</option>
    </select>
  </div>

  <div class="row">
    <label>แนวเพลงที่ชอบ</label>
    <label class="inline"><input type="checkbox" name="music" value="เพื่อชีวิต"> เพื่อชีวิต</label>
    <label class="inline"><input type="checkbox" name="music" value="ลูกทุ่ง"> ลูกทุ่ง</label>
    <label class="inline"><input type="checkbox" name="music" value="อื่นๆ"> อื่นๆ</label>
  </div>

  <div class="row">
    <label></label>
    <label><input type="checkbox" name="agree"> ยินยอมให้เก็บข้อมูล</label>
  </div>

  <div class="row">
    <button class="btn btn-primary" type="reset">Reset</button>
    <button type="button" onclick="clickMe()"> Submit </button>
  </div>
</form>
@endsection

@push('scripts')
    <script>
        let clickMe = function(){
                let fname = document.getElementById('fname')
                // fname.value = "from ClickMe"
                // console.log(fname.value)

                if(fname.value == ""){
                    fname.classList.remove('is-valid')
                    fname.classList.add('is-invalid')
                }else{
                    fname.classList.remove('is-invalid')
                    fname.classList.add('is-valid')
                }
        }
        let myfunc = (callback)=>{
            callback("in Callback")
        }
        callMe = (param) =>{
            console.log(param)
        }

        myfunc(callMe)

        let myvar1 = 1
        let myvar2 = "1"
        myvar2 = parseInt(myvar2)

        console.log(myvar2 + myvar1 + "\n\n\n\nทดสอบ")
        console.log(1 === '1')
    </script>
@endpush
