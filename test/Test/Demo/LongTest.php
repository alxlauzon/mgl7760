<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Test\Demo;

use PHPUnit_Framework_TestCase;

/**
 * Description of CalculatorTest
 *
 * @group long
 * 
 * @author mpoirier
 */
class LongTest extends PHPUnit_Framework_TestCase
{
  public function testAdd()
  {
    sleep(60);
    $this->assertTrue(true);
  }
}
