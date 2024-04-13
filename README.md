# Dogz

Dog image faker for PHP.

![Static Analysis](https://github.com/bradietilley/faker-dogz/actions/workflows/static.yml/badge.svg)
![Tests](https://github.com/bradietilley/faker-dogz/actions/workflows/tests.yml/badge.svg)


## Introduction

FakerDogz is a lightweight PHP package designed to generate fake dog images that can be used for a variety of purposes, like avatars and other placeholders.

All images are 1024*1024 60% quality JPEGs, resulting in 50-130KB per image.

![example](docs/example.png)


## Repositories

[Imagez](https://github.com/bradietilley/faker-imagez) available:

- [Catz](https://github.com/bradietilley/faker-catz)
- [Dogz](https://github.com/bradietilley/faker-dogz) You are here.
- [Foodz](https://github.com/bradietilley/faker-foodz)


## Installation

```
composer require bradietilley/faker-dogz
```


## Documentation

The documentation for this is the same as the base [Imagez](https://github.com/bradietilley/faker-imagez) documentation, except instead of `imagez()` you'll need to use `dogz()`.


**Quick example:**

```php
dogz()->path();                             // string path: /path/to/pics/dog_0037.jpg
dogz()->path();                             // string path: /path/to/pics/dog_0101.jpg
dogz()->all();                              // array of string paths
```


## Author

- [Bradie Tilley](https://github.com/bradietilley)
