<?php
/*
    Document https://medium.com/@kapilchauhan/array-puzzles-ec08368c4c77
    Function to get Product of Array except itself
    @param array $array
    return array $product
*/
function productAray(array $array): array {
    // left_prod to hold product of left part of array from any element
    // right_prod to hold product of right part of array from any element
    // product to hold main output of function.
    $left_prod = $right_prod = $product = [];

    // iterate array to compute right part product
    for ($k = count($array) - 1;$k >= 0;$k--) {
        if ($k == count($array) - 1) {
            $right_prod[$k] = 1;
        } else {
            $right_prod[$k] = $array[$k + 1] * $right_prod[$k + 1];
        }
    }
    // iterate array to compute left part product
    for ($i = 0;$i < count($array);$i++) {
        if ($i == 0) {
            $left_prod[$i] = 1;
        } else {
            $left_prod[$i] = $array[$i - 1] * $left_prod[$i - 1];
        }
        // Store left * right product to current element in output array.
        $product[$i] = $left_prod[$i] * $right_prod[$i];
    }
    return $product;
}

// Calling productAray function with sample data.
$output = productAray([1, 2, 3, 4, 5]);
// Print output to CLI
print_r($output);
