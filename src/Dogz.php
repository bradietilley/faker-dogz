<?php

namespace BradieTilley\FakerDogz;

use BradieTilley\FakerImagez\Imagez;

class Dogz extends Imagez
{
    public static function basePath(): string
    {
        return dirname(__DIR__).DIRECTORY_SEPARATOR.'resources'.DIRECTORY_SEPARATOR.'images';
    }
}
