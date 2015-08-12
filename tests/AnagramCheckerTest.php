<?php

    require_once "src/AnagramChecker.php";

    class AnagramCheckerTest extends PHPUnit_Framework_TestCase
    {

        function test_makeAnagram()
        {
            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $input = "dog";

            //Act
            $result = $test_AnagramChecker->makeAnagram($input);

            //Assert
            $this->assertEquals($input);
        }
    }
 ?>
