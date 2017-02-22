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
            $user_phrase = explode(" ", $user_phrase);
            // var_dump($user_phrase);
            // $phrase_splited = str_split($user_phrase);
            $punctuation_array= array(".", "," , ";" , ":" , "-",  '"' , "'", "(" , ")" , "-" , "?" , "!");
            $count = 0;

            foreach ($user_phrase as $word) {
                foreach ($punctuation_array as $punctuation) {
                    $word = trim($word, $punctuation);
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
