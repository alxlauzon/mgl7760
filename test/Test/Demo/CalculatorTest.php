<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Test\Demo;

use PHPUnit_Framework_TestCase;
use Demo\Calculator;

require_once __DIR__ .  '/../../../src/Demo/Calculator.php';

/**
 * Description of CalculatorTest
 *
 * @author mpoirier
 */
class CalculatorTest extends PHPUnit_Framework_TestCase
{
  public function testAdd()
  {
    $c = new Calculator();
    $result = $c->add(5,10);
    $this->assertEquals(15, $result);
  }
  
  public function testFailure()
  {
    $this->assertTrue(false, 'This test need to fail');
  }
}

