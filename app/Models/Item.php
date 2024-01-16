<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function group()
    {
        return $this->belongsTo(Itemgroup::class, "group_id");
    }
}
