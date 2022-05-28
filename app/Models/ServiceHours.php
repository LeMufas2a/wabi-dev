<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TranslateAwareModel;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
// use Illuminate\Database\Eloquent\SoftDeletes;


class ServiceHours extends Model
{
    //use SoftDeletes;

    protected $table = 'hours_services';

    protected $fillable = ['day', 'service_from_time', 'service_from_to'];
    
    public function restorant()
    {
        return $this->belongsTo(\App\Restorant::class);
    }

    public function service_hour_item(){

        return $this->belongsTo(\App\Models\ServiceItem::class,'service_item_id','id');
    }



}
