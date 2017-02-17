<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_string_of_words()
        {
            // Arrange
            $test_repetition = new RepeatCounter;
            $input_word = "fear";
            $input_string_of_words = "The only thing we should fear, is fear itself";
            // Act
            $result = $test_repetition->CounterRepetition($input_word, $input_string_of_words);
            // Assert
            $this->assertEquals(2, $result);
        }
    }
 ?>
