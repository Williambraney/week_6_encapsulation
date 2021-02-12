<?php

namespace App\Counter;

class BeanCounter
{
    //needs to have a constructor because a value is being passed
    //need a property of counter
    private $counter;

    public function __construct(Counter $counter) //add counter into the brackets because its a public function
    {
        $this->counter = $counter;
    }


    // has an addBean and howMany method


    public function addBean() :BeanCounter //only used by the BeanCounter class
    {
        //needs to add one to the counter everytime addbean is used, counter -> increment was used in counter.php and 
        // adds one to the counter.
        $this-> counter-> increment();
        return $this; //always needs to return something
    }
    public function howMany() : int //returns a number
    {
        return $this->counter->count();
        // returns how many addBeans have been added to the count. Count is used from Counter.php
    }
}