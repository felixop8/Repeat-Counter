<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_word()
        {
            // Arrange
            $test_word = new RepeatCounter;
            $input_word = "fear";
            // Act
            $result = $test_word->compareWord($input_word);
            // Assert
            $this->assertEquals("fear", $result);
        }
    }
 ?>
