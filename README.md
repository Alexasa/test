# Parentheses&amp;multiply test
Test for two specific cases

## Using:
```
require( 'test.class.php' );
$test = new Test();

// Check parentheses for balance

$input = 'string with parentheses ()[]{}';
$output = $test->checkParentheses($input);
echo 'This is ' . ( $output ? 'balanced' : 'unbalanced' ) . ': ' . $input . PHP_EOL;

// Multiply all members of the first argument by the second argument

$input = [1, 2, [3, [4, 5], 6], 7, [8, 9]];
$multiplier = 2;
$output = $test->getMultiplied( $input, $multiplier );
echo json_encode( $output ) . PHP_EOL;
