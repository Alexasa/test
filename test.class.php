<?php

// Test class

class Test 
{

    private $parentheses = [ '(', ')', '[', ']', '{', '}' ];
    private $parentheses_couples = [ '()', '[]', '{}' ];

    function __construct()
    {
        // reserved
    }

    /**
     * Check parentheses for balance
     * 
     * @param   string  $input
     * @return  bool
     */
    public function checkParentheses( string $input ): bool 
    {
        $output = '';
        $expect = true;
        $input_array = str_split( $input, 1 );
        foreach( $input_array as $key=>$value ) {
            if( in_array( $value, $this->parentheses ) ) $output .= $value;
        }
        while($expect) {
            $expect = false;
            foreach( $this->parentheses_couples as $couple ) {
                if( strpos( $output, $couple ) !== false ) {
                    $output = str_replace( $couple, '', $output );
                    $expect = true;
                }
            }
        }
        return $output == '' ? true : false;
    }

    /**
     * Multiply all members of the first argument by the second argument
     * 
     * @param   array  $input
     * @param   integer  $multiplier
     * @return  array
     */
    public function getMultiplied ( array $input, int $multiplier ): array 
    {
        array_walk_recursive( $input, function( &$value, $key ) use (&$multiplier) {
            $value *= $multiplier;
        } );
        return $input;
    }
}