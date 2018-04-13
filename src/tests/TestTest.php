<?php
use PHPUnit\Framework\TestCase;

class TestTest extends TestCase {

    public function testTestsWorking() {
        $testClass = new TestClass();
        $this->assertFalse($testClass->getFalse());
    }
}
