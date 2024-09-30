<?php

abstract class Fruit
{
    public int $weight;
    public int $treeId;

    public function setWeight($minWeight, $maxWeight): void
    {
        $this->weight = rand($minWeight, $maxWeight);
    }
}