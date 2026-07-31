<?php
$length = 10;                           //1
$width = 5;
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "Area: $area <br>";
echo "Perimeter: $perimeter <br>";

$amount = 1000;                         //2
$vat = $amount * 0.15;
$Total = $amount + $vat;
echo "Vat: $vat <br>";
echo "Total: $Total <br>";

$number = 15;                           //3
echo ($number % 2 == 0) ? "$number is Even<br>" : "$number is Odd<br>";

$a = 20;                                //4
$b = 45;
$c = 30;

if($a >= $b && $a >= $c)
{
    echo "Largest Number = $a<br>";
}
elseif($b >= $a && $b >= $c)
{
    echo "Largest Number = $b<br>";
}
else
{
    echo "Largest Number = $c<br>";
}

for($i = 10; $i <= 100; $i++)           //5
{
    if($i % 2 != 0)
    {
        echo "$i<br>";
    }
}

$numbers = array(10, 20, 30, 40, 50);   //6
$search = 40;
$found = false;

for($i = 0; $i < count($numbers); $i++)
{
    if($numbers[$i] == $search)
    {
        $found = true;
        break;
    }
}

if($found)
{
    echo "$search Found in the array.<br>";
}
else
{
    echo "$search Not Found.<br>";
}

for($i = 1; $i <= 3; $i++)              //7(a)
{
    for($j = 1; $j <= $i; $j++)
    {
        echo "*";
    }
    echo "<br>";
}

for($i = 3; $i >= 1; $i--)             //7(b)
{
    for($j = 1; $j <= $i; $j++)
    {
        echo "$j";
    }
    echo "<br>";
}

$a = 'A';                              //7(c)
for($i = 1; $i <= 3; $i++)
{
    for($j = 1; $j <= $i; $j++)
    {
        echo "$a";
        $a++;
    }
    echo "<br>";
}
?>

