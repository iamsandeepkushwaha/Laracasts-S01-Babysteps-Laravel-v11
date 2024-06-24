<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000'
            ],
        ];
    }

    public static function find(int $id): array
    {
        //return Arr::first(self::all(), fn($job) => $job['id'] == $id);
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if(! $job){
            return abort(403);
        }
        return $job;
    }
}