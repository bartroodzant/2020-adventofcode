<?php
# Get the values from the expenses CSV file and make an array from it
$expenses_array = explode("\n", file_get_contents('../expenses.txt'));

# Sort the array to make it ascending. This makes it easier to decide when to break the loops.
sort($expenses_array);

foreach ($expenses_array as $value_1) {
    foreach ($expenses_array as $value_2) {
        if($value_1 == $value_2) {
            continue;
        }

        $added_value = $value_1 + $value_2;

        if ($added_value > 2020) {
            break;
        }

        if ($added_value == 2020) {
            $multiplied_value = ($value1 * $value_2);
            print("{$value_1} * {$value_2} = {$multiplied_value}");
            break 2;
        }
    }
}

?>