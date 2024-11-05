<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'instructions',
        'image_path',
    ];

    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function instructions(): string
    {
        return $this->instructions;
    }

    public function image_path(): string
    {
        return $this->image_path;
    }
}
