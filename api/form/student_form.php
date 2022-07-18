<?php



$type = $_POST['type'];
if($type = 'add'){

    print("add");
}
else{
    print("edit");
}
?>









<form method="post">
  <p>班級<input type="number" name="classroom" id="classroom"></p>
  <p>座號<input type="number" name="seat_num" id="seat_num"></p>
  <p>姓名<input type="text" name="name" id="name"></p>
  <p>生日<input type="date" name="birthday" id="birthday"></p> -->
  <p><input type="button" value="new" onclick="create()"></p>
  <p><button type="button" class="btn btn-success" onclick="create()">新增</button></p>
  <p><button type="button" class="btn btn-success" onclick="$('#studentForm')">取消</button></p>
</form>