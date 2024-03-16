<?php

namespace LaravelTools\LazyDependency\Tests;

use LaravelTools\LazyDependency\Attributes\Dependency;
use LaravelTools\LazyDependency\Tests\Examples\ExampleClass;
use LaravelTools\LazyDependency\Traits\UseDependency;

test('dependency', function () {

    $class = new class {
        use UseDependency;

        #[Dependency]
        readonly protected ExampleClass $service;

        public function hello(): string
        {
            return $this->service->hello();
        }
    };

    expect($class->hello())->toBeString(ExampleClass::HELLO);
});
