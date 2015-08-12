<?php

    require_once "src/AnagramChecker.php";

    class AnagramCheckerTest extends PHPUnit_Framework_TestCase
    {

        function test_makeAnagram()
        {
            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $input = "dog";
            $words = "god june gdo";

            //Act
            $result = $test_AnagramChecker->makeAnagram($input, $words);

            //Assert
            $this->assertEquals("god: IS, june: IS NOT, gdo: IS", $result);
        }
    }
 ?>
