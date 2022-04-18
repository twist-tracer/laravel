<?php

namespace App\Architecture\Patterns\Architectural\MVC;

class Model
{

    public string $string;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->string = "MVC + PHP = Awesome!";
    }

}
