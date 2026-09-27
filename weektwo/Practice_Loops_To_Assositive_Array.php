<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice

    </title>
</head>
<body>
    

<?php
//practice loops to associative array

//while loop example

$Count = 1;
while($Count  <=12)
    {
        echo "$Count times 12" . ($Count * 12). "<br>";

        $Count++;
    }

    //another example of while loop

    $X = 0;
    while($X  <=20){
        echo "$X <br>";
        ++$X;
    }

    //do while loop example
    $Result = 1;
    $N = 5;
    do{
        $Result *= $N;
        echo "the value of N is: $N <br>";
        $N--;
    }while($N>0);
    echo $Result;

    //for loop example

    for($Y = 10; $Y >= 1; $Y--)
        {
            echo "$Y <br>";
        }
        //another example of for loop

        for($Count = 1; $Count <=12; ++$Count)
            {
                echo "$Count times 12" , ($Count *12) , "<br>";
            }


            //break code example
            $B = 10;
            while($B <= 20)
                {
                    echo "the value of B is: $B <br>";
                    $B++;
                    if($B==15)
                        {
                            break;
                        }
                }

 //continue code example
  $num1 = 1;
 do{
 ++$num1;
if($num1 == 5)   
continue;                       
echo "$num1,";
                      
}while($num1 <= 15); 
    
 //Nested loop
  for($i = 1; $i <= 12; $i++)
{
    for($j = 1; $j <= 12; $j++)
    {
        echo ($i * $j);
        echo "<br>";
    }
}

//ch3 Array

//create tow Array

$Month = Array("feb","jan","march");

 echo $Month[1] . "<br>";

 //two
//  $fruits = Array();
//   $fruits[0] = "Apple";
//   $fruits[1] = "Orange";
//   $fruits[2] = "Banana";
//   echo $fruits []

  //Adding items to an array without explicit

  $day[] = "saturday";
  $day[] = "sunday";
  $day[] = "monday";
  $day[] = "Tuesday";

  echo "<pre>";
  print_r($day);
   echo "</pre>";

   //arry using forloop

  $Info = array(
    "12",
    "Ahmed Sulub",
    20,
    "Hodan"

  ); 
 
  for($i = 0; $i< Count($Info); $i++)
    {
        echo $Info[$i]. "<br>";
    }


//initialize the array with values using foreach
 $collection = array();
$collection [0] = 2;
$collection [1] = "ahmed sulub";
$collection [2] = 10.6;

 foreach($collection as $value){
    echo "$value <br>";
}   
echo "$collection[0] <br>";
var_dump($collection);

//creat arry in one time

$numbers = array(3, "farah osmaan",20.4);
echo "<br>";
var_dump($numbers);
                
                
                    
                    
?>
</body>
</html>