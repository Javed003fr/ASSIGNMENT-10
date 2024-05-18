<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string){
  // count vowels
  $vowelCount = 0;
  $vowels = ['a', 'e', 'i', 'o', 'u'];
  foreach (str_split($string) as $char){
    if(in_array($char, $vowels)){
      $vowelCount++;
    }
  }

  // reversed string
  $reversedStr = strrev($string);

  // Output
  echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedStr<br>";


}

?>