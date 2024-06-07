<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'tag_id',
        'user_id'
    ];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
