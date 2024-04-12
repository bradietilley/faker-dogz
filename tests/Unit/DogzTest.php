<?php

use BradieTilley\FakerDogz\Dogz;
use Illuminate\Support\Collection;

test('dogz helper function loads a singleton instance of Dogz', function () {
    expect(dogz())->toBeInstanceOf(Dogz::class);
    expect(dogz())->toBe(dogz());
});

test('dogz can load all cat pics', function () {
    $min = 1;
    $max = 120;

    $expect = Collection::range($min, $max)
        ->map(fn (int $i) => 'dog_'.str_pad($i, 4, '0', STR_PAD_LEFT).'.jpg')
        ->map(fn (string $name) => Dogz::absolutePath($name))
        ->values()
        ->all();

    /**
     * All is representative of what's in the pics directory
     */
    $actual = dogz()->all();
    expect($actual)->toBe($expect);
});
