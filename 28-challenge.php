<?php

#task01

//Write a function named setAlarm which receives two
//parameters. 
//The first parameter, employed, is true whenever you are
//employed and the second parameter, vacation is true 
 //whenever you are on vacation.

//The function should return true if you are employed and not ///on vacation (because these are the circumstances under which //you need to set an alarm).

function setAlarm(bool $employed, bool $vacation): bool {
  // your code here
  if($employed && !$vacation){
    return  true;
  }else{
    return false;
  }
}
echo setAlarm(false,true)."<br>";
echo setAlarm(true,true)."<br>";
echo setAlarm(true,true)."<br>";
echo setAlarm(true,false)."<br>";




#task 02:

//Create a function that accepts 2 string arguments and returns an integer of the count of occurrences the 2nd argument is found in the first one.

//If no occurrences can be found, a count of 0 should be returned.

function strCount($word, $letter) {
  // code here
  if(strstr($word,$letter)){
   return substr_count($word,$letter);
  }
   else{
     return 1;
   }
}
echo strCount('','e')."<br>";
echo strCount('assignment','e')."<br>";
echo strCount('longetivety','t')."<br>";
echo strCount('goose','oo')."<br>";

#task 03
//Your task is to make function, which returns the sum of a sequence of integers.

//The sequence is defined by 3 non-negative values: begin, end, step (inclusive).

//If begin value is greater than the end, function should returns 0

function sequence_sum(int $begin, int $end, int $step): int {

  $result = 0;

  if($begin <= $end) {
    for($i = $begin; $i <= $end; $i += $step) {
      $result += $i;
    }
  }

  return $result;
}
echo sequence_sum(5,20,3)."<br>";
echo sequence_sum(5,50,3)."<br>";
echo sequence_sum(5,207,10)."<br>";
echo sequence_sum(5,20,3)."<br>";
echo sequence_sum(25,20,3)."<br>";