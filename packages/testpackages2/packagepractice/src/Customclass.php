<?php

namespace testpackages2\packagepractice;
use Illuminate\Support\Facades\Facade;

class Customclass extends Facade
{

    public static function testing(){

    	return "welcome";
    }
}

