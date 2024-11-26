<?php
class Fruit
{
    public $name ='';
    public $description ='';

    public function __construct($name,$description)
    {
        $this->name = $name;
        $this-> description = $description;
        echo "This fruit is ". $name. "and the description is ". $description;
    }

}
$fruitone = new Fruit('orange',"this is a red or yellow fruit filled with orange juice it can be sucked directly or used to make juice");
$fruittwo = new Fruit('pineapple','this is a yellow fruit rich in vitamins and minerals');
$fruithree = new  Fruit('watermelon','this is a wine coloured fruit with a green back it has black seeds in it');
$fruitfour = new Fruit('apple',"this is a green or wine coloured fruit rich in vitamins and minerals");
$fruitfive = new Fruit('banana','this is a yellow or green coloured fruit it comes in clusters and its tasty and delicious')
?>