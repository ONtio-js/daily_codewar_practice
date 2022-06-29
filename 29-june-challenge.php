<?php
//code_war task 29/06/2022


/*
*@param array $nums
*@return array
*@author ONtio
 */

#task 01:


//Finish the solution so that it sorts the passed in array of numbers. If the function passes in an empty array or null/nil value then it should return an empty array.



function solution($nums) {
//code here 
  if($nums == []){
    return [];
  }else{
    array_multisort($nums);
    return  $nums;
  }
  }

  print_r([20,4,5,7,8,90,45,67,8,2]);
  echo "<br>";
  print_r([20,4,5,7,8]);
  echo "<br>";
  print_r([]);


  #task 02

  /**
   * In mathematics, the factorial of a non-negative integer n, denoted by n!, is the product of all positive integers less than or equal to n. For example: 5! = 5 * 4 * 3 * 2 * 1 = 120. By convention the value of 0! is 1.

    *  Write a function to calculate factorial for a given input. If input is below 0 or above 12 throw an exception of type ArgumentOutOfRangeException (C#) or IllegalArgumentException (Java) or RangeException (PHP) or throw a RangeError (JavaScript) or ValueError (Python) or return -1 (C)
   */


  function factorial(int $n): int {
    // Your code here
    if($n <= 12 && $n >= 0){
      $factorial = 1;
      for($i =1;$i <= $n;$i++){
          $factorial*=$i;
       // $factorial *= $n[$i];
      }
      return $factorial;
    }else{
    return  -1;
    }

  }
  echo factorial(91)."<br>";
  echo factorial(11)."<br>";
  echo factorial(-91)."<br>";
  echo factorial(9)."<br>";

  #task 03

/**
 * Write a function to convert a name into initials. This kata 
 * strictly takes two words with one space in between them.
 *The output should be two capital letters with a dot separating them.
 * 
 */

  function abbrevName($names)
{
  //code here
  $n = strtoupper($names);
  $separateName = explode(' ',$n);
  for($i= 0;$i <= count($separateName);$i++){
    $point = '.';
    return substr($separateName[0],0,1).$point.substr($separateName[1],0,1);
  }
  return;
}
echo abbrevName('linus umoke')."<br>";
echo abbrevName('nkwuda jumoke')."<br>";
echo abbrevName('eni ozzi')."<br>";
echo abbrevName('ekene ijaw')."<br>";