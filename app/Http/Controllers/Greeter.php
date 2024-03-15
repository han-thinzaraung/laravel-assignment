<?php declare(strict_types=1);
namespace App\Http\Controllers;
final class Greeter
{
    public function greet(string $name): string
    {
        return 'Hello, ' . $name . '!';
    }
}