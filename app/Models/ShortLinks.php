<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortLinks extends Model
{
    use HasFactory;

    protected $fillable = [
        'long_url',
        'title',
        'tags',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'tag_short_link');
    }

    public function statistics()
    {
        return $this->hasMany(Statistic::class);
    }
}
