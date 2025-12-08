<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8" />
<title>Workshop HTML - FORM</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 40px;
  }
  h1{
    font-size:48px;
    font-weight:700;
    margin-bottom:30px;
  }
  label{
    display:inline-block;
    width:140px;
    font-size:20px;
    margin-bottom:10px;
    vertical-align:top;
    font-weight:bold;
  }
  input[type="text"],
  input[type="date"],
  input[type="number"],
  select{
    width:250px;
    padding:6px 8px;
    border:2px solid #888;
    border-radius:6px;
    font-size:18px;
  }
  input[type="file"]{
    font-size:16px;
  }
  textarea{
    width:350px;
    height:130px;
    padding:10px;
    border:2px solid #888;
    border-radius:6px;
    font-size:18px;
  }
  .row{
    margin-bottom:12px;
  }
  .inline{
    display:inline-block;
    margin-right:20px;
    font-size:18px;
  }
  button{
    margin-top:20px;
    padding:8px 20px;
    font-size:18px;
    border-radius:8px;
    border:2px solid #444;
    background:#eee;
    cursor:pointer;
  }
</style>
</head>
<body>

<h1>Workshop #HTML - FORM</h1>

<form>
  <div class="row">
    <label>ชื่อ</label>
    <input type="text" name="fname" />
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
    <button type="reset">Reset</button>
    <button type="submit">Submit</button>
  </div>
</form>

</body>
</html>