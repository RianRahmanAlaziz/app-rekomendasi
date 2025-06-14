<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Usia extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];

    public function pupuk()
    {
        return $this->hasMany(Pupuk::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
}
