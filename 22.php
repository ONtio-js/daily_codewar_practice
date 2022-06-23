<?php

#task 01
/* function that take in array of words and construct a sentences
without a space at the end and beginning

*/
function smash(array $words): string {
  
  //using string trim function to remove the space at the beginning and end of the sentence
  // using string implode function to join the words together


  $sentence = trim(implode(' ',$words));
  return $sentence;
}


#task 02

/*Complete the function so that it finds the average of the three scores passed to it and returns the letter value associated with that grade. */

function getGrade($a, $b, $c) {
  // your code here
  $average = ($a +$b +$c)/3;
if($average >= 90 && $average <=100){
  return 'A';
}elseif($average >= 80 && $average <= 90){
  return 'B';
}elseif($average >= 70 && $average <= 80){
  return 'C';
}elseif($average >= 60 && $average <= 70){
  return 'D';
}else{
  return 'F';
}
}

#task 03

/**Your task is to create a function that does four basic mathematical operations.

The function should take three arguments - operation(string/char), value1(number), value2(number).
The function should return result of numbers after applying the chosen operation.

 */

function basicOp($op, $val1, $val2)
{
  // Solution
  switch($op){
      case '+':
            return $val1 + $val2;
            break;
      case '*':
            return $val1 * $val2;
            break;
      case '/':
            return $val1 / $val2;
            break;
      case '-':
            return $val1 - $val2;
            break;
      default:
            return 'operation not recognised';
            break;
      
  }
}