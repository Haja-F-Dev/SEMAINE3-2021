<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    public function testAddReturnsTheCorrectSum()
    {
        require 'functions.php';

        $this->assertEquals(4, ajout(2, 2));
        $this->assertEquals(8, ajout(3, 5));
    }

    public function testAddDoesNotReturnTheIncorrectSum()
    {
        $this->assertNotEquals(5, ajout(2, 2));
    }
}
