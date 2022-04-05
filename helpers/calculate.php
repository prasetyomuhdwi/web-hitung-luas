<?php

// calculate the total data for each shape performed
function calculateTotalOfEachshape(array $arrays, string $shape)
{
    $total = 0;
    if (is_array($arrays)) {

        foreach ($arrays as $key => $values) {
            if (!empty($values["id_" . $shape])) {
                $total++;
            }
        }
    }
    return $total;
}

// calculate the percentage of data for each shape
function percentage(array $arrays, string $shape)
{
    if (is_array($arrays)) {
        $total_all = count($arrays);
    } else {
        $total_all = 0;
    }
    // save the total data for each shape performed
    $total_for_shape = calculateTotalOfEachshape($arrays, $shape);

    if (!empty($total_for_shape) && $total_for_shape !== 0) {
        $result = ($total_for_shape / $total_all) * 100;
        $result = round($result, 2);
    } else {
        $result = 0;
    }
    return $result;
}