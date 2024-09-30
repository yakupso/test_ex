<?php

abstract class Tree
{
    static int $treeAmount = 0;
    public int $id;
    public int $fruitAmount;
    public array $fruits = [];

    public function setFruitAmount($minAmount, $maxAmount): void
    {
        $this->fruitAmount = rand($minAmount, $maxAmount);
    }
}