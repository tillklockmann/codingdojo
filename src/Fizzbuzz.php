<?php
namespace Statista;

class Fizzbuzz
{
    /**
     * data 
     * @var array
     */
    protected $numbers;

    /**
     * @param int $start 
     * @param int $end 
     * @return void 
     */
    public function setNumbers(int $start = 1, int $end = 100)
    {
        $this->numbers = range($start, $end);
    }

    /** @return array  */
    public function getNumbers() : array
    {
        return $this->numbers;
    }

    /**
     * check if multiple of three
     * @param int $number 
     * @return bool 
     */
    protected function fizzNumber(int $number) : bool
    {
        return ($number % 3) === 0;
    }


    /**
     * check if multiple of three
     * @param int $number 
     * @return bool 
     */
    protected function buzzNumber(int $number) : bool
    {
        return ($number % 5) === 0;
    }


    /**
     * check if multiple of three and five
     * @param int $number 
     * @return bool 
     */
    protected function fizzBuzzNumber(int $number) : bool
    {
        return $this->fizzNumber($number) && $this->buzzNumber($number);
    }


    /**
     * check if necessary to replace number
     * @param int $number 
     * @return string|int 
     */
    public function fuzzNumber(int $number)
    {
        if ($this->fizzBuzzNumber($number)) {
            return 'FizzBuzz';
        } elseif ($this->fizzNumber($number)) {
            return 'Fizz';
        } elseif ($this->buzzNumber($number)) {
            return 'Buzz';
        } else {
            return $number;
        }

    }
    
    /**
     * print out numbers acoording to replacement rule:
     * 'Fizz' for multiples of three
     * 'Buzz' for multiples of five
     * 'FizzBuzz' for multiples of five && three
     * 
     * @param string $eol 
     * @return void 
     */
    public function printNumbers(string $eol = PHP_EOL)
    {
        foreach ($this->numbers as  $number) {
            echo $this->fuzzNumber($number) . $eol;
        }
    }
}
