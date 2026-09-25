<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php

  //loops practice

  //while loop Example
    // $i = 1;
    // while($i <= 15){
    //     echo "$i,  ";
    //     $i++;
    // }

    //do While loop


    // $Result =1;
    // $n=5;
    // do{
    //     $Result *=$n;
    //     echo "the word of n is: $n <br>";
    //     $n--;

    // }while ($n>0);
    // echo $Result;

    //break and continue

    //Nested Loop

    // for($i =1; $i<=3; $i++);
    //     for($j =1; $j<5; $j++);
    //   echo("$i * $j =" . "<br>");
  

//     for ($i = 1; $i <= 3; $i++) {

//     for ($j = 1; $j < 5; $j++) {
//         echo "$i * $j = " . ($i * $j) . "<br>";
//     }
// }


//for ech example

// for ($number = 1; $number <= 30; $number++) {

//     if ($number % 3 == 0 && $number % 5 == 0) {
//         echo "$number is divisible by both 3 and 5<br>";
//     }
//     elseif ($number % 3 == 0) {
//         echo "$number is divisible by 3<br>";
//     }
//     elseif ($number % 5 == 0) {
//         echo "$number is divisible by 5<br>";
//     }
//     else {
//         echo "$number is divisible by neither 3 nor 5<br>";
//     }
// }


 

//exaple index array

// $collection = array();
// //initialize the array with values

// $collection [0] = 2;
// $collection [1] = "ahmed sulub";
// $collection [2] = 10.6;

// print_r($collection);



// display arry usin var_dump


// echo "$collection[0] <br>";
// echo "$collection[1] <br>";
// var_dump($collection);


// foreach($collection as $value){
//     echo "$value <br>";
// }   
// echo "$collection[0] <br>";
// var_dump($collection);


//creat arry in one time

// $numbers = array(3, "farah osmaan",20.4);
// echo "<br>";
// var_dump($numbers);



// $info = array(
//     "name" => "ahmed sulub",
//     "age" => 20,
//     "grade" => 10.5
// );

$info = array(
     "id" => "101",
        "name" => "ahmed sulub",
        "age" => 20,
        "grade" => 10.5 
        
)



 ?>






</body>
</html>