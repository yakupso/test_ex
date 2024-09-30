<?php
require_once 'Fruit.php';
require_once 'Apple.php';
require_once 'Pear.php';
require_once 'Tree.php';
require_once 'AppleTree.php';
require_once 'PearTree.php';
require_once 'Gardener.php';

$gardener = new Gardener();
$gardener->collectFruits();
$gardener->outputData();
