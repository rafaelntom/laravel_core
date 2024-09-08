<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Jobs
{
    static function all(): array
    {
        return [
            ['id' => '1', 'title' => 'Director', 'salary' => '$100,000'],
            ['id' => '2', 'title' => 'Manager', 'salary' => '$80,000'],
            ['id' => '3', 'title' => 'Employee', 'salary' => '$50,000'],
        ];
    }

    static function find($id): array
    {
        return Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404, 'Job not found');
        }
    }
}
