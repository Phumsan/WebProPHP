<?php
$x = 100;
$y = 10;
$opertor = '-';
function plus()
{
    echo "x + y = ",$GLOBALS['x']+$GLOBALS['y'];

}
function sub()
{
    echo "x - y = ",$GLOBALS['x']-$GLOBALS['y'] ;

}
function mul()
{
    echo "x * y = ",$GLOBALS['x']*$GLOBALS['y'] ;

}
function div()
{
    echo "x / y = ",$GLOBALS['x']/$GLOBALS['y'] ;

}
switch ($opertor) {
    case "+":
        plus();
      break;
    case "-":
        sub();
      break;
    case "*":
        mul();
      break;
    case "/":
        div();
      break;
      }
