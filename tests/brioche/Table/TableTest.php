<?php
use Brioche\Table;
use PHPUnit\Framework\TestCase;

class TableTest extends TestCase
{
    public function testInitialize()
    {
        $t = new Table;
        $this->assertNotNull($t);
    }
}
