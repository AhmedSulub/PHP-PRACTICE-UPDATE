<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <?php
//Asignment one

 $a = 25;
$b = 10;
$c = 40;

// Find the greatest
if ($a >= $b && $a >= $c) {
    $greatest = $a;
} elseif ($b >= $a && $b >= $c) {
    $greatest = $b;
} else {
    $greatest = $c;
}

// Find the smallest
if ($a <= $b && $a <= $c) {
    $smallest = $a;
} elseif ($b <= $a && $b <= $c) {
    $smallest = $b;
} else {
    $smallest = $c;
}

echo "Greatest number is: " . $greatest . "<br>";
echo "Smallest number is: " . $smallest;


//Asigment two

$number = 15;

for ($i = 1; $i <= 1; $i++) {

    if ($number % 3 == 0 && $number % 5 == 0) {

        echo "$number is divisible by both 3 and 5.";
    } elseif ($number % 3 == 0) {
        echo "$number is divisible by 3.";
    } elseif ($number % 5 == 0) {
        echo "$number is divisible by 5.";
    } else {
        echo "$number is divisible by neither 3 nor 5.";
    }
}

//assignment three
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . "<br>";
    }
}

// Assignment four
for ($i = 50; $i >= 2; $i--) {

    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . "<br>";
    }

}


// Assignment five

$number = 12345;
$reverse = 0;

while ($number > 0) {
    $digit = $number % 10;
    $reverse = ($reverse * 10) + $digit;
    $number = (int)($number / 10);
}
echo "Reverse = " . $reverse;

// Assignment six

$a = 8;
$b = 12;

for ($i = 1; $i <= $a * $b; $i++) {

    if ($i % $a == 0 && $i % $b == 0) {
        echo "LCM = " . $i;
        break;
    }
}

// Assignment seven
$a = 18;
$b = 24;
$hcf = 1;

for ($i = 1; $i <= $a && $i <= $b; $i++) {

    if ($a % $i == 0 && $b % $i == 0) {
        $hcf = $i;
    }
}
echo "HCF = " . $hcf;

// Assignment eight
echo "<table border='1'>";

for ($i = 1; $i <= 12; $i++) {

    echo "<tr>";

    for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";


 ?>
</body>
</html>