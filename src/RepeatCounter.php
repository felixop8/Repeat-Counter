<?php
    class RepeatCounter
    {
        function CounterRepetition($single_word, $phrase)
        {

            $user_word = strtolower($single_word);
            $user_phrase = strtolower($phrase);
            $phrase_splited = str_split($user_phrase);
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
            $array_style_phrase = array();
            foreach ($array_of_words as $word) {
                if ($user_word == $word)
                {
                    $counter += 1;
                    array_push($array_style_phrase, "🔎👉" . $word);
                } else {
                    array_push($array_style_phrase, $word);
                }
            }

            $phrase_style = implode(" ", $array_style_phrase);
            if ($counter == 0) {
              $counter = "❌ No word find in this text:";
            }
            return $final_result = array($counter, "📖 ".$phrase_style);

        }
    }

 ?>
