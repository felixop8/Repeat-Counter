<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_lower_case()
        {
            // Arrange
            $test_repetition = new RepeatCounter;
            $input_word = "fear";
            $input_string_of_words = "The only thing we should fear is fear itself";
            // Act
            $result = $test_repetition->countRepeats($input_word, $input_string_of_words);
            // Assert
            $this->assertEquals(2, $result);
        }

        function test_mismatching_word()
        {
            // Arrange
            $test_repetition = new RepeatCounter;
            $input_word = "crocodile";
            $input_string_of_words = "The only thing we should fear is fear itself";
            // Act
            $result = $test_repetition->countRepeats($input_word, $input_string_of_words);
            // Assert
            $this->assertEquals(0, $result);
        }

        function test_mix_lower_upper()
        {
            // Arrange
            $test_repetition = new RepeatCounter;
            $input_word = "FeAr";
            $input_string_of_words = "The only thing we should fEar is fear itself";
            // Act
            $result = $test_repetition->countRepeats($input_word, $input_string_of_words);
            // Assert
            $this->assertEquals(2, $result);
        }

        function test_words_with_punctuation()
        {
            // Arrange
            $test_repetition = new RepeatCounter;
            $input_word = "fear";
            $input_string_of_words = "The\" only (thing 'hola' 'fear' fear, is \"fear\" itself.";
            // Act
            $result = $test_repetition->countRepeats($input_word, $input_string_of_words);
            // Assert
            $this->assertEquals(3, $result);
        }

        function test_special_characters()
        {
            // Arrange
            $test_repetition = new RepeatCounter;
            $input_word = "fear ";
            $input_string_of_words = "The only thing we should fear is fear itself";
            // Act
            $result= $test_repetition->countRepeats($input_word, $input_string_of_words);
            // Assert
            $this->assertEquals(2, $result);
        }
    }
 ?>
