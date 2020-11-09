<?php 
require_once(__DIR__ . '/../src/is_straight.php');

use PHPUnit\Framework\TestCase;

final class IsStraightTest extends TestCase
{
    public function test_is_straight_1(): void
    {
        $this->assertEquals(is_s(['ah','2c','3d','4s','5c']), 1);
    }

    public function test_is_straight_2(): void
    {
        $this->assertEquals(is_s(['ah','jc','kd','qs','10c']), 1);
    }

    public function test_is_straight_3(): void
    {
        $this->assertEquals(is_s(['3h','4c','5d','6s','7c']), 1);
    }

    public function test_is_straight_4(): void
    {
        $this->assertEquals(is_s(['ah','2c','3d','qs','kc']), 0);
    }

    public function test_is_straight_5(): void
    {
        $this->assertEquals(is_s(['ah','2c','3d','10s','kc']), 0);
    }

    public function test_is_straight_6(): void
    {
        $this->assertEquals(is_s(['ah','5c','3d','7s','kc']), 0);
    }
}