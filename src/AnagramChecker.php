<?php

    class AnagramChecker
    {
        function makeAnagram($input, $words)
        {
            //create blank array for result
            $result = array();

            //check if the user enters the input and words
            if ($input == null || $words == null) {
                array_push($result, "we need words");
                return $result;
            }

            //now the real test, we work with INPUT
            //lowercase the input
            $lowcase_input = strlower($input);

            //split input into array of letters
            $split_input = str_split($lowcase_input);

            //sorting the splitted input with built-in "sort" method
            sort($split_input);

            //now we work with WORDS
            //trip whitespace (or other characters) from the beginning and end of each word in words
            $nospace_words = trim($words);

            //Split a string by string in nospace_words with built-in "explode" method
            $explode_nospace_words = explode(" ", $nospace_words);

            //check every word in $explode_nospace_words with foreach loop
            foreach ($explode_nospace_words as $new_word) {
                //lowercase the new_word
                $low_new_word = strlower($new_word);

                //split $low_new_word  into array of letters
                $split_low_new_word = str_split($low_new_word);

                //sorting the splitted low_new_word with built-in "sort" method
                sort($split_low_new_word);
            }


    }
 ?>
