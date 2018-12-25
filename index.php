<?php

$text = 'какой-то текст, со... знаками! припинания!?';

function revertPunctuationMarks ($text)
{
    $pattern = "/[\.?!,;:]/";
    $filtered = [];
    preg_match_all($pattern, $text, $filtered);
    $response = preg_replace_callback(
        $pattern,
        function () use (&$filtered) {
            return array_pop($filtered[0]);
        },
        $text
    );
    return $response;
}

echo $text;
echo "\n";
echo revertPunctuationMarks($text);