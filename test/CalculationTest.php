<?php
use PHPUnit\Framework\TestCase; 
require_once __DIR__ . '/../src/Calculation.php'; // Add this line if not using Composer autoload

class CalculationTest extends TestCase
// class Calculation extends src\Calculation.php
{ 
//  public function testCanPerformUnitTest() 
//  { 
//  $this->assertTrue(true); 
//  }

// //  public function testCanSumInteger() 
// //  { 
// //  $cal = new Calculation; 
// //  $this->assertSame(10, $cal->sum(5,5)); 
// //  }

// // // public function testSumValidateFail() 
// // //     { 
// // //         $cal = $this->getMockBuilder('Calculation')
// // //                     ->onlyMethods(['checkType'])  // Use onlyMethods instead of setMethods
// // //                     ->getMock(); 

// // //         $cal->method('checkType')->willReturn(false); 

// // //         $this->assertNull($cal->sum(2, 3)); 
// // //     }

public function testSumWithNegativeNumbers() { 
    $cal = new Calculation(); 
    $this->assertSame(-5, $cal->sum(-2, -3)); 
}
public function testSumWithMixedNumbers() { 
    $cal = new Calculation(); 
    $this->assertSame(2, $cal->sum(5, -3)); 
}

public function testSumWithNonIntegerValues() { 
    $cal = new Calculation(); 
    $this->assertNull($cal->sum(5, 'string')); 
    $this->assertNull($cal->sum(5, 5.5)); 
    $this->assertNull($cal->sum('string', 'anotherString')); 
}

}
