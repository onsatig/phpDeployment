<?php
use PHPUnit\Framework\TestCase;

class GetCurrentYearTest extends TestCase
{
    public function testCurrentYear()
    {
        $this->assertEquals(date('Y'), date('Y'));
    }
}
