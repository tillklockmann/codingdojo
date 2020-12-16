<?php
namespace CodingDojo;

class Fizzbuzz
{

    /**
     * convert numbers according to replacement rule:
     * 'Fizz' for multiples of three
     * 'Buzz' for multiples of five
     * 'FizzBuzz' for multiples of five && three
     * 
     * @param int $number 
     * @return string|int 
     */
    public static function fuzzNumber(int $number)
    {
        $result = '';
        if ($number % 3 === 0) {
            $result .= 'Fizz';
        } 
        if ($number % 5 === 0) {
            $result .= 'Buzz';
        }
        return $result;
    }
}
