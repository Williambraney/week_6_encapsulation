<?php

namespace App\Counter;

class Counter
{
    //two methods - increment and count method
    //needs to have a proprety for increment, needs to be set to 0 because its being counted
    private $increment = 0;
    public function increment() : Counter //matches the class 
    {
       //needs to add an increment of one each time the method is called
       
       $this->increment += 1; 
       return $this; // needs to be return $this instead of return line 14 due to the encapsulation factor of the counter class
        
    }
    public function count() : int // needs to be an integer
    {
        //needs to add the increment total up after its been used
        return $this->increment;
    }
}