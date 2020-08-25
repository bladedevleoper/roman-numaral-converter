<?php

use PHPUnit\Framework\TestCase;

use App\Controllers\RomanNumeralConverter;

class RunTest extends TestCase
{
    protected $romanConverter;

    protected function setUp(): void
    {
        parent::setUp();
        //TODO import the class 
        $this->romanConverter = new RomanNumeralConverter();
    }

    /**
     * @test
     */
    public function test1YieldsI()
    {
        //arrange
        $startingArabic = 1;
        $expectedRoman = 'I';

        //act
        $receivedRoman = $this->romanConverter->arabicToRoman($startingArabic);

        //assert
        $this->assertEquals($expectedRoman, $receivedRoman);
    }
}