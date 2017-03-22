<?php
  class Palindrome
  {
      function methodpalindrome($input)
      {
          $lowercase_input = strtolower($input);
          $str_array = str_split($lowercase_input);
          $new_array = array();
          for($i=sizeof($str_array);$i>0;$i--)
          {
              array_push($new_array,$str_array[$i-1]);
          }
          if ($str_array == $new_array)
          {
              return true;
          } else {
              return false;
          }
      }
  }

?>
