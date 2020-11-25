<?php 
declare(strict_types=1);


use PHPUnit\Framework\TestCase;
use Statista\Fizzbuzz;

class FizzbuzzTest extends TestCase
{
    /** @test */
    public function it_can_set_numbers()
    {
        $fzzbzz = new Fizzbuzz;
        $fzzbzz->setNumbers(1,5);
        $this->assertSame([1,2,3,4,5], $fzzbzz->getNumbers() );
    }

    /** @test */
    public function it_can_print_numbers()
    {
        $fzzbzz = new Fizzbuzz;
        $fzzbzz->setNumbers(1,2);
        ob_start();
        $fzzbzz->printNumbers();
        $output = ob_get_contents();
        ob_end_clean();
        $this->assertMatchesRegularExpression('/1\n2\n/', $output);
    }

    /** @test */
    public function it_can_fizz_numbers_that_are_multiples_of_three()
    {
        $fzzbzz = new Fizzbuzz;
        $fzzbzz->setNumbers(1,3);
        
        $numbers = $fzzbzz->getNumbers();
        $fuzzNumber = $fzzbzz->fuzzNumber($numbers[2]);
        $this->assertEquals("Fizz", $fuzzNumber);
    }

    /** @test */
    public function it_can_buzz_numbers_that_are_multiples_of_five()
    {
        $fzzbzz = new Fizzbuzz;
        $fzzbzz->setNumbers(1,5);
        
        $numbers = $fzzbzz->getNumbers();
        $fuzzNumber = $fzzbzz->fuzzNumber($numbers[4]);
        $this->assertEquals("Buzz", $fuzzNumber);
    }

    /** @test */
    public function it_can_fizzbuzz_numbers_that_are_multiples_of_five_and_three()
    {
        $fzzbzz = new Fizzbuzz;
        $fzzbzz->setNumbers(11,15);
        
        $numbers = $fzzbzz->getNumbers();
        $fuzzNumber = $fzzbzz->fuzzNumber($numbers[4]);
        $this->assertEquals("FizzBuzz", $fuzzNumber);
    }
}
