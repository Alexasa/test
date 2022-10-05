<?php
require( 'test.class.php' );

$test = new Test();

// Check parentheses for balance

$input = 'mary (had a [little] lamb)';
$output = $test->checkParentheses($input);
echo 'This is ' . ( $output ? 'balanced' : 'unbalanced' ) . ': ' . $input . PHP_EOL;

$input = 'mary (had a [little) lamb]';
$output = $test->checkParentheses($input);
echo 'This is ' . ( $output ? 'balanced' : 'unbalanced' ) . ': ' . $input . PHP_EOL;


// Multiply all members of the first argument by the second argument

$input = [1, 2, [10, [100, 200], 20, 30], 3, [40, 50]];
$multiplier = 2;
$output = $test->getMultiplied( $input, $multiplier );
echo json_encode( $output ) . PHP_EOL;