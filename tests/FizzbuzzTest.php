<?php 
declare(strict_types=1);


use PHPUnit\Framework\TestCase;
use CodingDojo\Fizzbuzz;

class FizzbuzzTest extends TestCase
{

    /** @test */
    public function it_returns_fizz_for_multiples_of_three()
    {
        foreach ([3,6,9] as $num) {
            $this->assertEquals("Fizz", Fizzbuzz::fuzzNumber($num));
        }
    }

    /** @test */
    public function it_returns_buzz_for_multiples_of_five()
    {
        foreach ([5,10,20] as $num) {
            $this->assertEquals("Buzz", Fizzbuzz::fuzzNumber($num));
        }
    }

    /** @test */
    public function it_returns_fizzbuzz_for_multiples_of_five_and_three()
    {
        foreach ([15,30,45] as $num) {
            $this->assertEquals("FizzBuzz", Fizzbuzz::fuzzNumber($num));
        }
    }
}
