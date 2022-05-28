<?php

namespace App\Models;

use App\Models\TranslateAwareModel;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceItemLong extends Model
{
    protected $table = 'service_items_long';

    protected $imagePath = '/uploads/service_items/';


    public function service_category()
    {
        return $this->belongsTo(\App\ServiceCategory::class);
    }
}
