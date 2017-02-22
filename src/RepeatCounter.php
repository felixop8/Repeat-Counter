<?php
    class RepeatCounter
    {
        function countRepeats($single_word, $phrase)
        {

            $user_word = strtolower($single_word);
            $user_phrase = strtolower($phrase);
            $phrase_splited = str_split($user_phrase);
            $punctuation_array= array(".", "," , ";" , ":" , "-",  '"' , "'", "(" , ")" , "-" , "?" , "!");

            // CHECK PUNCTUATION
            foreach ($phrase_splited as $key => $value) {
                foreach ($punctuation_array as $punctuation) {
                    if ($value == $punctuation)
                    {
                        // $phrase_splited = ltrim($valur, $special_char);
                        // $phrase_splited = rtrim($word_in_text, $special_char);
                        unset($phrase_splited[$key]);
                    }
                }
            }

            $phrase_splited = array_values($phrase_splited);
            $phrase_joined = join("", $phrase_splited);
            $array_of_words = explode(" ", $phrase_joined);

            $counter = 0;
            $array_style_phrase = array();
            // CHECK CONCORDANCE
            foreach ($array_of_words as $word) {
                if ($user_word == $word)
                {
                    $counter ++;
                    array_push($array_style_phrase, "🔎" . $word . "🔍");
                } else {
                    array_push($array_style_phrase, $word);
                }
            }

            // CHECK IF THERE IS A MATCH OR NOT
            // $phrase_style = implode(" ", $array_style_phrase);
            // if ($counter == 0) {
            //     $counter = "❌ No word find in this text:";
            // }

            // return $final_result = array($counter, $phrase_style);
            // FOR TESTING UNCOMMENT THIS RETURN ↙️ AND COMMENT THIS ONE ↖️
            return $counter;
        }
    }

 ?>
