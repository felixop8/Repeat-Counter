<?php
    class RepeatCounter
    {
        function countRepeats($single_word, $sentence)
        {
            if ($single_word == "" || $sentence == "") {
                return "You need to fill all the blanks.";
            } else {
                // Make word to find lowercase
                $user_word = strtolower($single_word);


                // Make sentence lowercase
                $user_sentence = strtolower($sentence);
                // Take user sentence and split in an array of words
                $user_sentence = explode(" ", $user_sentence);


                $special_chars = array(".", "," , ";" , ":" , "-",  '"' , "'", "(" , ")" , "-" , "?" , "!", " ");


                $count = 0;
                foreach ($user_sentence as $word_in_sentence) {
                    $word_in_sentece = strtolower($word_in_sentence);

                        foreach ($special_chars as $character) {
                            // remove special characters
                            $word_in_sentence = trim($word_in_sentence, $character);
                            $user_word = trim($user_word, $character);
                        }
                        if ($user_word == $word_in_sentence){
                            $count++;
                        }
                }
                return $count;
            }
        }
    }

 ?>
