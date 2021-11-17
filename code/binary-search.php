<?php
function binary_search(array $list, int $item) :?int
{
    $low = 0;
    $high = count($list) - 1;

    while ($low <= $high) {
        $mid = ($low + $high) / 2;
        $guess = $list[$mid];
        // echo "<p>item: {$item}, low: {$low}, high: {$high}, mid: {$mid}, guess: {$guess}</p>";
        if ($guess === $item) {
            return $mid;
        }
        if ($guess > $item) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }
    return null;
}

$list = [1, 3, 4, 7, 9, 13, 15, 19, 22, 25, 35, 45, 55, 65, 76, 77, 89, 200];

var_dump(binary_search($list, 3));
echo "<br>";

var_dump(binary_search($list, 35));
var_dump(binary_search($list, 200));
