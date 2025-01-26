<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadImage extends Model
{
    use HasFactory;
    protected $table='customer_profiles';
    protected $fillable=[
        'customer_id',
        'image_path'
    ];
}
