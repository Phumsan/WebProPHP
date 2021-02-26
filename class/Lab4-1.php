<html>
<head><title>การกำหนดค่าตัวแปร</title></head>
<body>
<?php
       $x = 100;
       $y = "200";
       $z = '300';
       $add = $x + $y;
       $sub = $z - $x;
       $multiply = $y * $z;
       $divice = $multiply / $z;
       $message = "Hello World";
       echo $x; echo "<br />";
       echo $y; echo "<br />";
       echo $z; echo "<br />";
       echo $x.' + '.$y.''.' = '.$add; echo "<br >";
       echo $z.' - '.$x.''.' = '.$sub; echo "<br />";
       echo $y.' x '.$z.''.' = '.$multiply; echo "<br />";
       echo $multiply.' / '.$z.''.' = '.$divice; echo "<br />";
       echo $message; echo "<br />";
?>
</body>
</html>