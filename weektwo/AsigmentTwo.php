<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// 1. Declare and initialize the array
$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

// 2. Print all elements of the array
echo "All elements of the array:<br>";

foreach ($numbers as $number) {
    echo $number . " ";
}

echo "<br><br>";

// 3. Calculate and print total of all elements
$total = 0;

foreach ($numbers as $number) {
    $total += $number;
}

echo "Total of all elements = $total<br>";

// 4. Calculate and print total of even elements
$evenTotal = 0;

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $evenTotal += $number;
    }
}

echo "Total of even elements = $evenTotal<br>";

// 5. Calculate and print total of odd elements
$oddTotal = 0;

foreach ($numbers as $number) {
    if ($number % 2 != 0) {
        $oddTotal += $number;
    }
}

echo "Total of odd elements = $oddTotal<br>";

// 6. Find minimum element and its positions
$min = min($numbers);

echo "Minimum element = $min<br>";
echo "Positions of minimum element: ";

foreach ($numbers as $position => $number) {
    if ($number == $min) {
        echo $position . " ";
    }
}

echo "<br>";

// 7. Find maximum element and its positions
$max = max($numbers);

echo "Maximum element = $max<br>";
echo "Positions of maximum element: ";

foreach ($numbers as $position => $number) {
    if ($number == $max) {
        echo $position . " ";
    }
}



//question 2
$colors = array(
    "Light" => array(
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ),

    "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ),

    "Dark" => array(
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    )
);

echo "<table border='1'>";

echo "<tr>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";

foreach ($colors as $row => $columns) {

    echo "<tr>";
    echo "<th>$row</th>";

    foreach ($columns as $value) {
        echo "<td>$value</td>";
    }

    echo "</tr>";
}

echo "</table>";




//question 3

$students = array(
    array(
        "ID" => "CA231112",
        "Name" => "Ahmed Sulub yusuf",
        "Phone" => "0648440403",
        "Address" => "xamarjadiid, WartaNabada"
    ),

    array(
        "ID" => "CA231213",
        "Name" => "Anas Ali Botan",
        "Phone" => "0647223201",
        "Address" => "Shirkoole, Hodan"
    ),

    array(
        "ID" => "CA238765",
        "Name" => "Yahye Ahmed mohamud",
        "Phone" => "0646990276",
        "Address" => "BarUbax, Howlwadag"
    )
);

echo "<table border='1'>";

echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

foreach ($students as $student) {

    echo "<tr>";
    echo "<td>" . $student["ID"] . "</td>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";
    echo "</tr>";
}

echo "</table>";


?>
</body>
</html>