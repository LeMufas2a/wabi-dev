<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomStyle extends Model
{
    use HasFactory;

    protected  $primaryKey = 'id';

    protected $fillable = ['element_class', 'style', 'restaurant_id'];

    protected $table = 'custom_styles';
}
