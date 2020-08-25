<?php

use PHPUnit\Framework\TestCase;

use App\Controllers\RomanNumeralConverter;

class RunTest extends TestCase
{
    protected $romanConverter;

    protected function setUp(): void
    {
        parent::setUp();
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

    /**
     * @test
     */
    public function test2YieldV()
    {
        $startingArabic = 5;
        $expectedRoman = 'V';

        $receivedRoman = $this->romanConverter->arabicToRoman($startingArabic);

        $this->assertEquals($expectedRoman, $receivedRoman);
    }

    /**
     * @test
     */
    public function test3YieldX()
    {
        $startingArabic = 10;
        $expectedRoman = 'X';

        $receivedRoman = $this->romanConverter->arabicToRoman($startingArabic);
      
        $this->assertEquals($expectedRoman, $receivedRoman);
    }

    /** expected to receive XX
     * @test
     */
    public function test4YeildXX()
    {
        $startingArabic = 20;
        $expectedRoman = 'XX';

        $receivedRoman = $this->romanConverter->arabicToRoman($startingArabic);
        
        $this->assertEquals($expectedRoman, $receivedRoman);
    }

    /** to assert if 30 brings back XXX
     * @test
     */
    public function test5YieldXXX()
    {
        $startingArabic = 30;
        $expectedRoman = 'XXX';

        $receivedRoman = $this->romanConverter->arabicToRoman(30);
    
        $this->assertEquals($expectedRoman, $receivedRoman);
    }

     /** Roman numerals for 40 is XL
     * @test
     */
    public function test6YieldXXX()
    {
        $startingArabic = 40;
        $expectedRoman = 'XL';

        $receivedRoman = $this->romanConverter->arabicToRoman($startingArabic);
    
        $this->assertEquals($expectedRoman, $receivedRoman);
    }

       /** Roman numerals for 3999
     * @test
     */
    public function test7Yield3998()
    {
        $startingArabic = 3999;
        
       $expectedRoman = 'MMMCMXCIX';
        
        $receivedRoman = $this->romanConverter->arabicToRoman($startingArabic);
    
        $this->assertEquals($expectedRoman, $receivedRoman);
    }

          /** Roman numerals for 3999
     * @test
     */
    public function testZeroThrowsAnException()
    {
        
        $this->expectException(Exception::class);

        $this->romanConverter->arabicToRoman(0);
    
        //$this->assertEquals($expectedRoman, $receivedRoman);
    }
}