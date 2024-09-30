<?php

use PHPUnit\Framework\TestCase;

class TreeTest extends TestCase
{
    public function testAppleTree()
    {
        $tree = new AppleTree();
        $fruits = $tree->fruits;

        $this->assertGreaterThanOrEqual(40, count($fruits));
        $this->assertLessThanOrEqual(50, count($fruits));

        foreach ($fruits as $fruit) {
            $this->assertInstanceOf(Apple::class, $fruit);
            $this->assertGreaterThanOrEqual(150, $fruit->weight);
            $this->assertLessThanOrEqual(180, $fruit->weight);
        }
    }

    public function testPearTree()
    {
        $tree = new PearTree();
        $fruits = $tree->fruits;

        $this->assertGreaterThanOrEqual(0, count($fruits));
        $this->assertLessThanOrEqual(20, count($fruits));

        foreach ($fruits as $fruit) {
            $this->assertInstanceOf(Pear::class, $fruit);
            $this->assertGreaterThanOrEqual(130, $fruit->weight);
            $this->assertLessThanOrEqual(170, $fruit->weight);
        }
    }
}
