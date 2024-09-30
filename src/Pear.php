<?php

class Pear extends Fruit
{
    public function __construct($treeId)
    {
        $minWeight = 130;
        $maxWeight = 170;
        $this->setWeight($minWeight, $maxWeight);
        $this->treeId = $treeId;
    }
}