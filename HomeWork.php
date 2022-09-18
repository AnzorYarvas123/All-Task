

<?php

echo "--------------------------if statement--------------------------<br><br>";
//Q1
echo "Quastion 1 <br><br>";


echo "Quastion 2 <br>";
?>

<form action="#" method="post">
Put Temperature Here: <input type="number" name="temp">

</form>

<?php
//Q2


if( $_POST["temp"] > 20){
    echo "its Summer Time";
}
else{
    echo "its Winter Time";
}

//Q3
echo "<br><br>Quastion 3<br>";

$firstNumber = 2;
$secondNumber = 2;

if($firstNumber == $secondNumber){
    $sum = $firstNumber + $secondNumber;
    $Result = $sum*3;
    echo $Result;
}
else{
    $sum = $firstNumber + $secondNumber;
    echo $sum;

}


//Q4
echo "<br><br>Quastion 4<br>";

$firstNum = 15;
$secondNum = 16;
$Result = $firstNum + $secondNum;

if($Result == 30){
    echo "The Result is: True";
}else{
    echo "The Result is: False";
}



//Q5
echo "<br><br>Quastion 5<br>";

$Number = 11;

if($Number % 3 == 0){
    echo "$Number its True";
}
else{
    echo "$Number its False";
}

//Q6
echo "<br><br>Quastion 6<br>";

$Numb = 64;

if($Numb >=20 && $Numb <=50){
    echo "True";
}
else{
    echo "False";
}


//Q7
echo "<br><br>Quastion 7<br>";
$Num_1 = 24;
$Num_2 = 33;
$Num_3 = 45;

if($Num_1 >= $Num_2 && $Num_1 >= $Num_3){
    echo "$Num_1 its the high number";
}
elseif($Num_2 >= $Num_1 && $Num_2 >= $Num_3){
    echo "$Num_2 its the high number";
}
elseif($Num_3 >= $Num_1 && $Num_3 >= $Num_2){
    echo "$Num_3 its the high number";
}


//Q8
echo "<br><br>Quastion 8<br>";

$electric = 5;

if($electric <= 50 && $electric >= 0){
    echo "2.50 JOD/Unit";
}
elseif($electric > 50 && $electric <= 150){
    echo "5.00 JOD/Unit";
}
elseif($electric > 150 && $electric <= 250){
    echo " 6.20 JOD";
}
elseif($electric > 250){
    echo "7.50 JOD/Unit";
}



//Q9
echo "<br><br>Quastion 9<br>";
?>

<form action="#" method="post" >
    Number1: <input type="number" name="Number1">
    Number2: <input type="number" name="Number2">
    <br>
    Operation:
    <input type="submit" name="add" value="+">
    <input type="submit" name="sub" value="-">
    <input type="submit" name="mul" value="*">
    <input type="submit" name="div" value="/">
</form>

<?php

$Num_1 = $_POST["Number1"];
$Num_2 = $_POST["Number2"];

if($_POST["add"]){
  $r= $Num_1 + $Num_2;
  echo "$r";
}
elseif($_POST["sub"]){
    $r= $Num_1 - $Num_2;
    echo "$r";
}
elseif($_POST["mul"]){
    $r= $Num_1 * $Num_2;
    echo "$r";
}
elseif($_POST["div"]){
    $r= $Num_1 / $Num_2;
    echo "$r";
}


//Q10
echo "<br><br>Quastion 10<br>";

$EnterYourAge = 12;

if($EnterYourAge >=18){
echo "$EnterYourAge its eligible age to vote";
}else{
   echo "$EnterYourAge its not eligible age to vote";
}

//Q11
echo "<br><br>Quastion 11<br>";

$enterNumber = 0;

if($enterNumber > 0){
echo "$enterNumber Positive Number";
}
elseif($enterNumber < 0){
    echo "$enterNumber Nigative Number";
    }
    elseif($enterNumber == 0){
        echo "$enterNumber Zero Number";
        }



//Q12
echo "<br><br>Quastion 12<br>";


$Grad = 79 ;

if($Grad >=90 && $Grad <=100){
    echo "your grad is: $Grad and your average is A";
}
elseif($Grad >=80 ){
    echo "your grad is: $Grad and your average is B";
}
elseif($Grad >=70 ){
    echo "your grad is: $Grad and your average is C";
}
elseif($Grad >=60 ){
    echo "your grad is: $Grad and your average is D";
}
elseif($Grad >=50 ){
    echo "your grad is: $Grad and your average is E";
}
else{
    echo "your grad is: $Grad and your average is F";
}





echo "<br><br>--------------------------array--------------------------<br><br>";


//Q1
echo "<br><br>Quastion 1<br>";

$colors = array("white", "green", "red");

echo "The memory of that scene for me is like a frame of film forever frozen at that
 moment: the $colors[2] carpet, the $colors[1] lawn, the $colors[0] house, the leaden sky. 
 The new president and his first lady. - Richard M. Nixon";


//Q2
echo "<br><br>Quastion 2<br>";

$color = ['red', 'green', 'white'];
for($i=0; $i<count($color); $i++){
    echo "<li>$color[$i]</li>";
}


//Q3
echo "<br><br>Quastion 3<br>";

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
 "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
 "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
 "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 


echo "The capital of France is $cities[France]<br>";
echo "The capital of Finland is $cities[Finland]<br>";
echo "The capital of Spain is $cities[Spain]<br>";


//Q4
echo "<br><br>Quastion 4<br>";

$color = array (4 => 'white', 6 => 'green', 11=> 'red');

echo "$color[11]";


//Q5
echo "<br><br>Quastion 5<br>";


$newItem = array(4, 5, "a", 9, "c", 11, "p", 93);


//Q6 
echo "<br><br>Quastion 6<br>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
sort($fruits);

foreach($fruits as $key => $value){
 
    echo ($key. "=> $value");
    echo "<br>";
}
// for($i=0; $i<count($fruits); $i++){
//     print_r($fruits[$i]);
//     echo "<br>";
// }




//Q7 
echo "<br><br>Quastion 7<br>";

$calculate = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$totalNumber = count($calculate);

for($i=0; $i< $totalNumber; $i++){
    $New = $New + $calculate[$i];
}

 $average = $New / $totalNumber;
echo "Average Temperature is: ".round($average);
echo "<br>";

sort($calculate);


// array_push($value);

foreach($calculate as $value){
   echo $value." ";
}
echo "<br>List of seven lowest temperatures:";
echo "<br>List of seven highest temperatures:";
echo "<br>";

// array_splice($value, 5);
// echo $value;



//Q8 
echo "<br><br>Quastion 8<br>";

$array1 = array("color" => "red", 2, 4,);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
echo "<br>";
print_r(array_merge($array1, $array2));
echo "<br>";



//Q9 
echo "<br><br>Quastion 9<br>";


$colors = array("red","blue", "white","yellow");

echo "<br>";
foreach($colors as $value){
    print(strtoupper($value)."<br>");
}



//Q10 
echo "<br><br>Quastion 10<br>";

$colors = array("RED","BLUE", "WHITE","YELLOW");

echo "<br>";
foreach($colors as $value){
    echo strtolower($value)."<br>";
}




//Q11 
echo "<br><br>Quastion 11<br>";


$divNumber =  [200, 201, 202, 203,204,208,212,216, 217, 218, 219,220, 221, 222,224,228,232,236,240,244,248,250];

$divCount =  count($divNumber);

for($i=0; $i<$divCount; $i++){

    if($divNumber[$i]% 4 == 0){
        echo "this number $divNumber[$i] accept to divide on 4<br>";
    }
}



//Q12
echo "<br><br>Quastion 12<br>";

$words =  array("abcd","abc","de","hjjj","g","wer");

$wordsCount = count($words);

for($i=0; $i<$wordsCount; $i++){

    echo strlen($words[$i]);
    echo "<br>";
    // if(strlen($words[$i]) == 1 ){
    //     echo strlen($words[$i])." its the small number";
    //     echo "<br>";
    // }
    // elseif(strlen($words[$i]) >= 4 ){
    //     echo strlen($words[$i])." its the large number";
    // }

}
// echo min($new);


//Q13
echo "<br><br>Quastion 13<br>";

function Random($num1, $num2){
for($i=$num1; $i<$num2; $i++){
    // $numbers = range($num1, $num2);
    echo rand($num1, $num2)." ";

}
}
Random (10, 20);



//Q14
echo "<br><br>Quastion 14<br>";


$array1 = array( 2, 0, 10, 12, 6, 1); 
echo min(array_filter($array1));


echo "<br><br>--------------------------Loop--------------------------<br><br>";

//Q1
echo "<br><br>Quastion 1<br>";


for($i=1; $i<=10; $i++){
    if($i <10){
        echo $i."-";
    }
    else{
        echo $i;
    }
}


//Q2
echo "<br><br>Quastion 2<br>";

for($i=0; $i<=30; $i++){
    $new = $new + $i;
}

echo "The total number is: $new";


//Q3
echo "<br><br>Quastion 3<br>";


for($i=1; $i<=5; $i++){
    echo "<br>";
    for($x=5; $x>=1; $x--){
        echo "A";
    }

}



//Q4
echo "<br><br>Quastion 4<br>";


for($i=1; $i<=5; $i++){
    echo "<br>";
    for($x=5; $x>=1; $x--){
        echo "1";
    }

}


//Q5
echo "<br><br>Quastion 5<br>";


for($i=1; $i<=5; $i++){
    echo "<br>";
    for($x=5; $x>=1; $x--){
        echo "0";
    }

}

//Q6
echo "<br><br>Quastion 6<br>";

$n =1;
$l = 6;
for($q=1; $q<=$l; $q++){
    $n = $n * $q;
    // echo $n. "<br>";
}
echo $n. "<br>";

//Q7
echo "<br><br>Quastion 7<br>";


// $num11=0;
$x=0;
$m=1;

echo $x." ";
echo $m." ";

// while($num11 < 10){
//     $q = $m + $x;
//     echo $q. " ";

//     $x = $m;
//     $m = $q;

//     $num11++;
// }
for($i=0; $i<10; $i++){
    $q = $m + $x;
    echo $q." ";
    $x = $m;
    $m = $q;

}

//Q8
echo "<br><br>Quastion 8<br>";

$count_C = "Orange Coding Academy ";
$result = 0;

for($i=0; $i<=strlen($count_C); $i++){


    if($count_C[$i]== "c" || $count_C[$i] == "C"){
        $result++;
    }

}
echo $result;


//Q9
echo "<br><br>Quastion 9<br>";


echo "<table border=solid >";
for($i=1; $i<=6; $i++){
    echo "<tr >";
    for($x=1; $x<=6; $x++){
        echo "<td style= 'padding-right: 30px'>$x*$i=".$x*$i."</td>";
    }

}

echo "</table>";



//Q10
echo "<br><br>Quastion 10<br>";




//Q11
echo "<br><br>Quastion 11<br>";



//Q12
echo "<br><br>Quastion 12<br>";



echo "<br><br>--------------------------function--------------------------<br><br>";


//Q1
echo "<br><br>Quastion 1<br>";





//Q2
echo "<br><br>Quastion 2<br>";

echo strrev("Reverse");



//Q3
echo "<br><br>Quastion 3<br>";

function lowerCase($lower){
    for($i=0; $i<strlen($lower); $i++){
        if($lower>='a' && $lower<='z'){
            return "$lower its lower case";
        }
        else{
            return "$lower its upper case";
        }
    }
}

echo lowerCase("word");





//Q4
echo "<br><br>Quastion 4<br>";


function swap($num1, $num2){
    echo  "Num1=".$num1 .", ". "Num2=".$num2."<br>";
$num3 = $num1;
$num1 = $num2;
$num2 = $num3;
echo "Num1=".$num1 .", ". "Num2=".$num2;

}

swap(4, 9);



//Q5
echo "<br><br>Quastion 5<br>";



//Q6
echo "<br><br>Quastion 6<br>";



//Q7
echo "<br><br>Quastion 7<br>";

$array1 = array(2, 4, 7, 4, 8, 4);

print_r (array_unique($array1));



echo "<br><br>--------------------------Exercises in PHP Forms:--------------------------<br><br>";
//Q1
echo "<br><br>Quastion 1<br>";
?>

<form action="#" method="post">
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" name="submit"><br>

</form>

<?php
$email = $_POST["email"];
$password = $_POST["password"];

echo $email."<br>";
echo $password;




//Q2
echo "<br><br>Quastion 2<br>";

?>

<form action="#" method="post">
    Number1: <input type="number" name="number1">
    Number2: <input type="number" name="number2">
    Operation: <input type="text" name="operation">
    <input type="submit" name="submit">

</form>

<?php 
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
$operation = $_POST["operation"];

if($operation == "+"){
    echo $Result = $number1 + $number2;
}
elseif($operation == "-"){
    echo $Result = $number1 - $number2;
}
elseif($operation == "*"){
    echo $Result = $number1 * $number2;
}
elseif($operation == "/"){
    echo $Result = $number1 / $number2;
}


//Q3
echo "<br><br>Quastion 3<br>";


echo "<br><br>--------------------------Third home work:--------------------------<br><br>";

//Q1
echo "<br><br>Quastion 1<br>";

$letter = "stirrrng";
$circle = 0;

for($i=0; $i<strlen($letter); $i++){
    
    if($letter[$i] == "r"){
         $circle++;
}
}
echo $circle;


//Q2
echo "<br><br>Quastion 2<br>";



function lowerC($lower){
    for($i=0; $i<strlen($lower); $i++){
        if($lower>='a' && $lower<='z'){
            return "$lower its lower case";
        }
        else{
            return "$lower its upper case";
        }
    }
}

echo lowerC("Word");




//Q3
echo "<br><br>Quastion 3<br>";

echo "<table border= solid>";
for($i=1; $i<=10; $i++){
    echo"<tr>";
    for($z=1; $z<=10; $z++){
        echo "<td>".$i*$z."</td>";
    }

}

echo "</table>";


//Q4
echo "<br><br>Quastion 4<br>";

// $my_text = 'The quick brown [fox].';
// preg_match('#\[(.*?)\]#', $my_text, $match);
// print $match[1]."\n";
?>

