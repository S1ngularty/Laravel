<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item_category extends Model
{
    use HasFactory;
    protected $table ='category_item';

    protected $fillable =[
        'item_id',
        'category_id'
    ];

    public $timestamps= false;
}
