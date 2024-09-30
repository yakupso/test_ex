<?php

class AppleTree extends Tree
{
    public function __construct()
    {
        $minFruitAmount = 40;
        $maxFruitAmount = 50;
        $this->setFruitAmount($minFruitAmount, $maxFruitAmount);
        $this->id = parent::$treeAmount;
        parent::$treeAmount++;
        for ($_ = 0; $_ < $this->fruitAmount; $_++) {
            $this->fruits[] = new Apple($this->id);
        }
    }
}