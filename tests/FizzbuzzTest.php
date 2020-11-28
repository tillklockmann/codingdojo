<?php 
declare(strict_types=1);


use PHPUnit\Framework\TestCase;
use Statista\Fizzbuzz;

class FizzbuzzTest extends TestCase
{
    /**
     * @var Fizzbuzz
     */
    private $fzzbzz;

    protected function setUp() : void
    {
        $this->fzzbzz =  new Fizzbuzz;
    }    

    /** @test */
    public function it_can_set_numbers()
    {
        $this->fzzbzz->setNumbers(1,5);
        $this->assertSame([1,2,3,4,5], $this->fzzbzz->getNumbers() );
    }

    /** @test */
    public function it_can_print_numbers()
    {
        $this->fzzbzz->setNumbers(1,2);
        ob_start();
        $this->fzzbzz->printNumbers();
        $output = ob_get_contents();
        ob_end_clean();
        $this->assertMatchesRegularExpression('/1\n2\n/', $output);
    }

    /** @test */
    public function it_can_fizz_numbers_that_are_multiples_of_three()
    {
        $this->fzzbzz->setNumbers(1,3);
        
        $numbers = $this->fzzbzz->getNumbers();
        $fuzzNumber = $this->fzzbzz->fuzzNumber($numbers[2]);
        $this->assertEquals("Fizz", $fuzzNumber);
    }

    /** @test */
    public function it_can_buzz_numbers_that_are_multiples_of_five()
    {
        $this->fzzbzz->setNumbers(1,5);
        
        $numbers = $this->fzzbzz->getNumbers();
        $fuzzNumber = $this->fzzbzz->fuzzNumber($numbers[4]);
        $this->assertEquals("Buzz", $fuzzNumber);
    }

    /** @test */
    public function it_can_fizzbuzz_numbers_that_are_multiples_of_five_and_three()
    {
        $this->fzzbzz->setNumbers(11,15);
        
        $numbers = $this->fzzbzz->getNumbers();
        $fuzzNumber = $this->fzzbzz->fuzzNumber($numbers[4]);
        $this->assertEquals("FizzBuzz", $fuzzNumber);
    }
}
