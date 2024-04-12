<?php

use BradieTilley\FakerDogz\Dogz;

if (!function_exists('dogz')) {
    function dogz(): Dogz
    {
        return Dogz::instance();
    }
}
