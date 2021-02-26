<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> โปรแกรมคำนวณเกรด </title>
</head>
<body>
<?php
$hw = $_GET['hw'];
$midterm = $_GET['midterm'];
$final = $_GET['final'];
if ($hw > 30) $hw = 30;
if ($midterm > 35) $midterm = 35;
if ($final > 35) $final = 35;

echo "<p>";
echo "<b>ข้อมูลคะแนน </b><br />";
echo "Homework : <i> $hw </i> <br/>";
echo "Midterm : <i> $midterm </i> <br/>";
echo "Final : <i> $final </i> <br/>";
$total = $hw + $midterm + $final;

echo "Total Score : $total <br>";
if ($total >= 80) echo "<img src=https://cdn.discordapp.com/attachments/740184438289465434/808881209068224552/A.jpg> <br>";
elseif ($total >= 70) echo "<img src=https://cdn.discordapp.com/attachments/740184438289465434/808881211694120960/B.jpg> <br>";
elseif ($total >= 60) echo "<img src=https://cdn.discordapp.com/attachments/740184438289465434/808881213246930984/C.jpg> <br>";
elseif ($total >= 50) echo "<img src=https://cdn.discordapp.com/attachments/740184438289465434/808881215159271444/D.jpg> <br>";
else echo "<img src=https://cdn.discordapp.com/attachments/740184438289465434/808881217020755998/F.jpg> <br>";
echo "<br>";
echo "<a href='lab6-11.php'> <big>Back </big></a>";
?>

</body>
</html>