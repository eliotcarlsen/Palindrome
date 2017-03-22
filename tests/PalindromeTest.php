<?php
  require_once "src/Palindrome.php";

  class PalindromeTest extends PHPUnit_Framework_TestCase
  {
    function test_palindrome()
      {
        $test_Palindrome = new Palindrome;
        $input = "dad";

        $result = $test_Palindrome->methodpalindrome($input);

        $this->assertEquals(true, $result);
      }
      function test_palindrome2()
        {
          $test_Palindrome = new Palindrome;
          $input = "tacocat";

          $result = $test_Palindrome->methodpalindrome($input);

          $this->assertEquals(true, $result);
        }
        function test_palindrome3()
          {
            $test_Palindrome = new Palindrome;
            $input = "hello olleh";

            $result = $test_Palindrome->methodpalindrome($input);

            $this->assertEquals(true, $result);
          }
        function test_palindrome4()
          {
            $test_Palindrome = new Palindrome;
            $input = "yo";

            $result = $test_Palindrome->methodpalindrome($input);

            $this->assertEquals(false, $result);
          }
          function test_palindrome5()
            {
              $test_Palindrome = new Palindrome;
              $input = "Hello olleh";

              $result = $test_Palindrome->methodpalindrome($input);

              $this->assertEquals(true, $result);
            }
  }
?>
