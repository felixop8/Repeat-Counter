<?php
    class RepeatCounter
    {
        function CounterRepetition($single_word, $phrase)
        {

            $lower_word = strtolower($single_word);
            $lower_phrase = strtolower($phrase);
            $phrase_splited = str_split($lower_phrase);
            $punctuation_array= array('.', ',', ';', ':', '-', ' " ', ' \' ', '(', ')', '-', '?', '!' );


            foreach ($phrase_splited as $key => $value) {
                foreach ($punctuation_array as $punctuation) {
                    if ($value== $punctuation)
                    {
                        unset($phrase_splited[$key]);
                    }
                }
            }
            $phrase_splited = array_values($phrase_splited);

            $phrase_joined = join("", $phrase_splited);
            $array_of_words = explode(" ", $phrase_joined);
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
