<?php
# Get the values from the expenses CSV file and make an array from it
$expenses_array = explode("\n", file_get_contents('../expenses.txt'));

# Sort the array to make it ascending. This makes it easier to decide when to break the loops.
sort($expenses_array);

foreach ($expenses_array as $value_1) {
    foreach ($expenses_array as $value_2) {
        foreach ($expenses_array as $value_3) {
            $added_value = $value_1 + $value_2 + $value_3;

            if ($added_value > 2020) {
                break;
            }

            if ($value_1 == $value_2 || $value_1 == $value_3 || $value_2 == $value_3) {
                continue;
            }
        
            if ($added_value == 2020) {
                $multiplied_value = $value_1 * $value_2 * $value_3;
                print("{$value_1} * {$value_2} * {$value_3} = {$multiplied_value}");
                break 3;
            }
        }
    }
}

?>