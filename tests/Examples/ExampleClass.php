<?php

namespace LaravelTools\LazyDependency\Tests\Examples;

class ExampleClass
{
    public const string HELLO = 'hello';

    public function hello(): string
    {
        return self::HELLO;
    }
}