<?php 
require_once __DIR__.'/../src/Math.php';

use PHPUnit\Framework\TestCase;
class MathTest extends TestCase {
    public function testAdd(){
        $math = new Math();
        $this->assertEquals(5, $math->add(2, 3));
    }
}