<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'types';

    protected $fillable = [
        'name',
        'slug',
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
