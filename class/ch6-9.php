<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ตัวอย่าง Control statement ที่ 9 </title></head>
</head>
<body>
<form method ="get">
Start Num <input type ="text" name ="num"><br>
End Num <input type ="text" name = "result"><br>
Dived num <input type = "text" name = "Divide"><br>
<input type ="submit" name = "sumbit">
<?php
    if(isset($_GET['sumbit'])){
    $start=$_GET['num'];
    $end=$_GET['result'];
    $div=$_GET['Divide'];
    $found = false;
    while ($start < $end){
        $start++;
        if ($start % $div == 0) {
         $found = true;
            break;
        }
    }
        if ($found)
            echo "เลขจำนวนเต็มที่อยู่ในช่วง 100 ถึง 200 ที่น้อยที่สุดและหารด้วย $div ลงตัวคือ $start <br>";
        else
            echo "ไม่มีเลขจำนวนเต็มที่อยู่ในช่วง 100 ถึง 200 ที่น้อยที่สุดและหารด้วย $div ลงตัว<br>";
}
    ?>
</body>
</html>