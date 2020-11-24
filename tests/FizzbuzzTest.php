<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;


class FizzbuzzTest extends TestCase
{
    /** @test */
    public function it_can_print_numbers()
    {
        $fzzbzz = new Fizzbuzz(1,2);

        $this->assertEquals("1\n2", $fzzbzz->print());
    }
}
