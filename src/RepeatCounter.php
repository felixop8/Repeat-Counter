<?php
    class RepeatCounter
    {
        function countRepeats($single_word, $phrase)
        {
            // Make word to find lowercase
            $user_word = strtolower($single_word);
            // Remove whitespaces
            $user_word = trim($user_word, " ");


            // Make sentence lowercase
            $user_phrase = strtolower($phrase);
            // Take user phrase and split in an array of words
            $user_phrase = explode(" ", $user_phrase);


            $special_chars = array(".", "," , ";" , ":" , "-",  '"' , "'", "(" , ")" , "-" , "?" , "!");


            $count = 0;
            foreach ($user_phrase as $word) {
                foreach ($special_chars as $character) {
                    $word = trim($word, $character);
                }
                $word = strtolower($word);
                // var_dump($word_in_text);

                if ($user_word == $word){
                    $count++;
                }
            }

            return $count;
        }
    }

 ?>
