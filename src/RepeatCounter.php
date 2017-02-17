<?php
    class RepeatCounter
    {
        function CounterRepetition($single_word, $phrase)
        {

            $lower_word = strtolower($single_word);
            $lower_phrase = strtolower($phrase);
            $array_of_words = explode(" ", $lower_phrase);
            $counter = 0;
            foreach ($array_of_words as $word) {
                if ($lower_word == $word)
                {
                    $counter += 1;
                }
            }
            return $counter;
        }
    }

 ?>
