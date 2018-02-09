<?php
//---------------------------------------------------------TASK-1------------------------------------------------------------------------------//
/*Use while loop to echo the numbers from 0 to 30 (each number in the next line).
The first 10 numbers (0 to 10) are going to be in regular type,

The second 10 numbers (11 to 20) are going to be bolded and

the third 10 numbers (21 to 30) are going to be italic.
*/

echo "<h1> TASK-1 </h1>";
$i=0;

while($i<=30){
    echo "<p>";
    if($i<=10){
        echo $i;
    }
    else if($i>10 && $i<=20){
        echo "<b>" . $i . "</b>" ;  
    }
    else if($i>20 && $i<=30){
        echo "<i>" . $i . "</i>" ;  
    }
    $i += 1;
    echo "</p>";
};

//---------------------------------------------------------TASK-2------------------------------------------------------------------------------//
/*Create array with elements: 2, 4, 6, 8, 10 and 12.
Loop through the array and divide each element by 3
Use number_format() function to format each array element to 2 decimals. Print formatted array elements (each number in the new line).
*/

echo "<br><br><h1> TASK-2 </h1>";
$array = [ 2, 4, 6, 8, 10, 12];

foreach( $array as $value){
    $value = $value / 3;
    echo "<p>" . number_format( $value, 2) . "</p>";
}; 

//for My understanding...Explaination:
//this is just like a for loop ...but instead of us using $i++, we use for"each"...so we dont have to add the additional ++ operator to increment the index every time.

//---------------------------------------------------------TASK-3------------------------------------------------------------------------------//
/*Classify the staff from $employee_numbers array using foreach loop.
$employee_numbers = [
   "Sam Jerry"=>"1849",
   "David Flint"=>"2274",
   "Lena Vincent"=>"2532",
   "Robert Vanny"=>"3471"
];
If the first digit of employee number is 1, it means employee's sector is management.

If the first digit of employee number is 2, it means employee's sector is technical department.

If the first digit of employee number is 3, it means employee's sector is accounting.

Use substr() to extract the part of the array element value (employee number) that you need in your conditional statement (if-else or switch).
You need to concatenate the expression in your foreach loop that will print the following statements in unordered list as it looks below:
Sam Jerry's employee number is: 1849 :: MANAGEMENT
David Flint's employee number is: 2274 :: TECHNICAL DEPARTMENT
Lena Vincent's employee number is: 2532 :: TECHNICAL DEPARTMENT
Robert Vanny's employee number is: 3471 :: ACCOUNTING
*/

echo "<br><br><h1> TASK-3 </h1>";
$employee_numbers = [
    "Sam Jerry"=>"1849",
    "David Flint"=>"2274",
    "Lena Vincent"=>"2532",
    "Robert Vanny"=>"3471"
];

foreach($employee_numbers as $key => $value){

    $first_element = substr($value , 0, 1);

    if($first_element == 1){
        echo("<p>" . $key ."'s employee number is: " . $value . " :: MAMAGEMENT</p>");  
    }
    elseif($first_element == 2){
        echo("<p>" . $key ."'s employee number is: " . $value . " :: TECHNICAL DEPARTMENT</p>");  
    }
    else{
        echo("<p>" . $key ."'s employee number is: " . $value . " :: ACCOUNTING</p>");  
    }
}
echo "<br><br>";


/* 
//other way of doing it is by using the index of the element in each $value array string....i.e. {0} is the first string character in the $value strign.
foreach($employee_numbers as $key => $value){
    $j=0;
    $first_char = $value[$j]{0};
    //echo $first_char; //it will echo all the first characters from the value when the loop is executed
    if($first_char == 1){
        echo("<p>" . $key ."'s employee number is: " . $value . " :: MAMAGEMENT</p>");  
    }
    elseif($first_char == 2){
        echo("<p>" . $key ."'s employee number is: " . $value . " :: TECHNICAL DEPARTMENT</p>");  
    }
    else{
        echo("<p>" . $key ."'s employee number is: " . $value . " :: ACCOUNTING</p>");  
    }
};
*/
//-------------------------------------------------------END-------------------------------------------------------------------------------//
