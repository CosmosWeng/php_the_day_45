<?php

namespace PhpTheDay;

class Health
{
    public function bmi(int $h, int $w)
    {
        //
        return $w / pow($h * 100.0, 2);
    }
}
