<?php
    class RepeatCounter
    {
        function CounterRepetition($single_word, $phrase)
        {
            $array_of_words = explode(" ", $phrase);
            $counter = 0;
            foreach ($array_of_words as $word) {
                if ($word == $single_word)
                {
                    $counter += 1;
                }
            }
            return $counter;
        }
    }

 ?>
