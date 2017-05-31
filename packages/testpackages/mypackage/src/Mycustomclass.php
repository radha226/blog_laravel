<?php

namespace TestPackages\Mypackages;
use Illuminate\Support\Facades\Facade;

class Mycustomclass extends Facade
{

    public static function testing(){

    	return "Hello";
    }
}
