<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

use function App\Implementations\set;
use function PHPUnit\Framework\assertEquals;

class SolutionSetTest extends TestCase
{
    private array $coll;

    public function setUp(): void
    {
        $this->coll = [
            'a' => [
                'b' => [
                    'c' => 3
                ]
            ]
        ];
    }

    public function testSet()
    {
        set($this->coll, ['a', 'b', 'c'], 4);
        $this->assertEquals([
            'a' => [
                'b' => [
                    'c' => 4
                ]
            ]
        ], $this->coll);
        set($this->coll, ['x', 'y', 'z'], 5);
        $this->assertEquals([
            'a' => [
                'b' => [
                    'c' => 4
                ]
            ],
            'x' => [
                'y' => [
                    'z' => 5
                ]
            ]
        ], $this->coll);
        set($this->coll, ['a', 'b', 'd'], 10);
        $this->assertEquals([
            'a' => [
                'b' => [
                    'c' => 4,
                    'd' => 10
                ]
            ],
            'x' => [
                'y' => [
                    'z' => 5
                ]
            ]
        ], $this->coll);
    }
}
