<?php

class PearTree extends Tree
{
    public function __construct()
    {
        $minFruitAmount = 0;
        $maxFruitAmount = 20;
        $this->setFruitAmount($minFruitAmount, $maxFruitAmount);
        $this->id = parent::$treeAmount;
        parent::$treeAmount++;
        for ($_ = 0; $_ < $this->fruitAmount; $_++) {
            $this->fruits[] = new Pear($this->id);
        }
    }
}