<?php
$principal = 1000;                            //1
$rate = 0.05;
$time = 5;
$simpleInterest = ($principal * $rate * $time)/100;
echo "Simple Interest: $simpleInterest <br>";

$number = 17;                                 //2
$isPrime = true;
if($number <= 1)
{
    $isPrime = false;
}
else
{
    for($i = 2; $i < $number; $i++)
    {
        if($number % $i == 0)
        {
            $isPrime = false;
            break;
        }
    }
}
echo ($isPrime) ? "$number is a Prime Number.<br>" : "$number is Not a Prime Number.<br>";

$number = 5;                                   //3
$factorial = 1;
for($i = 1; $i <= $number; $i++)
{
    $factorial = $factorial * $i;
}

echo "Factorial of $number = $factorial<br>";

$numbers = array(10, 20, 30, 40, 50);          //4
$sum = 0;
for($i = 0; $i < count($numbers); $i++)
{
    $sum = $sum + $numbers[$i];
}

$average = $sum / count($numbers);

echo "Sum = $sum <br>";
echo "Average = $average<br>";

for($i = 1; $i <= 4; $i++)                     //5
{
    for($j = 1; $j <= $i; $j++)
    {
        echo "$i";
    }
    echo "<br>";
}
?>