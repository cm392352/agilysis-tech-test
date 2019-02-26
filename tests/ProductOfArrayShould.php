<?php
use PHPUnit\Framework\TestCase;
include "..\src\ArrayProductGenerator.php";

class ProductOfArrayShould extends TestCase
{
    public function testFiveDigitArray()
    {
        //Arrange
        $values = [3, 5, 1, 5, 2];
        $sut = new ArrayProductGenerator($values);
        //Act
        $results = $sut->results();
        //Assert
        $expected = [50, 30, 150, 30, 75];
        $this->assertSame($results, $expected);
    }

    public function testEightDigitArray()
    {
        //Arrange
        $values = [1, 3, 2, 19, 12, 7, 15, 10];
        $sut = new ArrayProductGenerator($values);
        //Act
        $results = $sut->results();
        //Assert
        $expected = [1436400, 478800, 718200, 75600, 119700, 205200, 95760, 143640];
        $this->assertSame($results, $expected);
    }

    public function testReturnEmptyArrayIfInputContainsAnyNegativeValues()
    {
        //Arrange
        $values = [1, 3, 2, 19, -12, 7, 15, 10];
        $sut = new ArrayProductGenerator($values);
        //Act
        $results = $sut->results();
        //Assert
        $expected = [];
        $this->assertSame($results, $expected);
    }
}