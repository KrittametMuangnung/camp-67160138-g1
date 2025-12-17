@extends('template.default')
@section('title', 'Workshop FORM')
@section('content')
    <form onsubmit="clickMe(event)">
        <div class="row">
            <label>ชื่อ</label>
            <input type="text" name="fname" id="fname" />
            <div class="valid-feedback">
                ถูกต้อง
            </div>
            <div class ="invalid-feedback">
                โปรดระบุชื่อ
            </div>

            <div class="row">
                <label>สกุล</label>
                <input type="text" name="lname" id="lname" />
                <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class ="invalid-feedback">
                    โปรดระบุสกุล
                </div>

                <div class="row">
                    <label>วัน/เดือน/ปีเกิด</label>
                    <input type="date" name="birth" id="birth" />
                    <div class="valid-feedback">
                        ถูกต้อง
                    </div>
                    <div class ="invalid-feedback">
                        โปรดระบุวัน/เดือน/ปีเกิด
                    </div>

                    <div class="row">
                        <label>อายุ</label>
                        <input type="number" name="age" id="age" />
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class ="invalid-feedback">
                            โปรดระบุอายุ
                        </div>

                        <div class="row" id="gender-group">
                            <label>เพศ</label>

                            <label class="inline">
                                <input type="radio" name="gender" id="Mgender">
                                ชาย
                            </label>

                            <label class="inline">
                                <input type="radio" name="gender" id="Fgender">
                                หญิง
                            </label>

                            <!-- error message -->
                            <div id="gender-error" class="text-danger d-none">
                                โปรดระบุเพศ
                            </div>
                        </div>


                        <div class="row">
                            <label>รูป</label>
                            <input type="file" name="photo" id="photo" />
                            <div class="valid-feedback">
                                ถูกต้อง
                            </div>
                            <div class ="invalid-feedback">
                                โปรดใส่รูป
                            </div>

                            <div class="row">
                                <label>ที่อยู่</label>
                                <textarea name="address" id="address"></textarea>
                                <div class="valid-feedback">
                                    ถูกต้อง
                                </div>
                                <div class ="invalid-feedback">
                                    โปรดระบุที่อยู่
                                </div>

                                <div class="row">
                                    <label>สีที่ชอบ</label>
                                    <select name="color" id="color">
                                        <option value="">select color</option>
                                        <option>สีแดง</option>
                                        <option>สีน้ำเงิน</option>
                                        <option>สีเขียว</option>
                                        <option>สีเหลือง</option>
                                    </select>
                                    <div class="valid-feedback">
                                        ถูกต้อง
                                    </div>
                                    <div class ="invalid-feedback">
                                        โปรดระบุสีที่ชอบ
                                    </div>

                                    <div class="row" id="music-group">
                                        <label>แนวเพลงที่ชอบ</label>

                                        <label class="inline">
                                            <input type="checkbox" name="music" value="เพื่อชีวิต"> เพื่อชีวิต
                                        </label>
                                        <label class="inline">
                                            <input type="checkbox" name="music" value="ลูกทุ่ง"> ลูกทุ่ง
                                        </label>
                                        <label class="inline">
                                            <input type="checkbox" name="music" value="อื่นๆ"> อื่นๆ
                                        </label>

                                        <div id="music-valid" class="text-success d-none">
                                            ถูกต้อง
                                        </div>

                                        <div id="music-error" class="text-danger d-none">
                                            โปรดระบุเพลงที่ชอบ
                                        </div>
                                    </div>


                                    <div class="row">
                                        <label></label>
                                        <label>
                                            <input type="checkbox" id="agree">
                                            ยินยอมให้เก็บข้อมูล
                                        </label>
                                        <div id="agree-valid" class="text-success d-none">
                                            ถูกต้อง
                                        </div>
                                        <div id="agree-error" class="text-danger d-none">
                                            โปรดทำการยืนยันข้อมูล
                                        </div>
                                    </div>


                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection

@push('scripts')
    <script>
        let clickMe = function(event) {
            event.preventDefault(); // กันไม่ให้ form reset / reload
            // validation ทั้งหมด

            let fname = document.getElementById('fname')
            let lname = document.getElementById('lname')
            let birth = document.getElementById('birth')
            let age = document.getElementById('age')

            let Mgender = document.getElementById('Mgender')
            let Fgender = document.getElementById('Fgender')
            let genderError = document.getElementById('gender-error')

            let photo = document.getElementById('photo')
            let address = document.getElementById('address')
            let color = document.getElementById('color')

            let musicList = document.querySelectorAll('input[name="music"]')
            let musicValid = document.getElementById('music-valid')
            let musicError = document.getElementById('music-error')
            let musicChecked = false

            let agree = document.getElementById('agree')
            let agreeValid = document.getElementById('agree-valid')
            let agreeError = document.getElementById('agree-error')


            // fname.value = "from ClickMe"
            // console.log(fname.value)

            if (fname.value == "") {
                fname.classList.remove('is-valid')
                fname.classList.add('is-invalid')
            } else {
                fname.classList.remove('is-invalid')
                fname.classList.add('is-valid')
            }

            if (lname.value == "") {
                lname.classList.remove('is-valid')
                lname.classList.add('is-invalid')
            } else {
                lname.classList.remove('is-invalid')
                lname.classList.add('is-valid')
            }

            if (birth.value == "") {
                birth.classList.remove('is-valid')
                birth.classList.add('is-invalid')
            } else {
                birth.classList.remove('is-invalid')
                birth.classList.add('is-valid')
            }

            if (age.value == "") {
                age.classList.remove('is-valid')
                age.classList.add('is-invalid')
            } else {
                age.classList.remove('is-invalid')
                age.classList.add('is-valid')
            }

            if (!Mgender.checked && !Fgender.checked) {
                genderError.classList.remove('d-none')
            } else {
                genderError.classList.add('d-none')
            }

            if (photo.value == "") {
                photo.classList.remove('is-valid')
                photo.classList.add('is-invalid')
            } else {
                photo.classList.remove('is-invalid')
                photo.classList.add('is-valid')
            }

            if (address.value == "") {
                address.classList.remove('is-valid')
                address.classList.add('is-invalid')
            } else {
                address.classList.remove('is-invalid')
                address.classList.add('is-valid')
            }

            if (color.value == "") {
                color.classList.remove('is-valid')
                color.classList.add('is-invalid')
            } else {
                color.classList.remove('is-invalid')
                color.classList.add('is-valid')
            }

            musicList.forEach(music => {
                if (music.checked) {
                    musicChecked = true
                }
            })
            if (!musicChecked) {
                musicError.classList.remove('d-none')
                musicValid.classList.add('d-none')
            } else {
                musicError.classList.add('d-none')
                musicValid.classList.remove('d-none')
            }

            if (!agree.checked) {
                agreeError.classList.remove('d-none')
                agreeValid.classList.add('d-none')
            } else {
                agreeError.classList.add('d-none')
                agreeValid.classList.remove('d-none')
            }

        }
        let myfunc = (callback) => {
            callback("in Callback")
        }
        callMe = (param) => {
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
