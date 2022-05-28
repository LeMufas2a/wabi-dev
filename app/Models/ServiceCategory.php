<?php

namespace App\Models;

use App\Models\TranslateAwareModel;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends TranslateAwareModel implements Sortable
{

    use SortableTrait;
    // use SoftDeletes;


    protected $table = 'service_categories';

    public $translatable = ['name'];

    public $sortable = [
        'order_column_name' => 'order_index',
        'sort_when_creating' => true,
    ];

    protected $imagePath = '/uploads/service_categories/';


    public function buildSortQuery()
    {
        return static::query()->where('restorant_id', $this->restorant_id);
    }

    protected function getImge($imageValue, $default = false, $version = '_large.jpg')
    {
        if ($imageValue == '' || $imageValue == null) {
            //No image
            return $default;
        } else {
            if (strpos($imageValue, 'http') !== false) {
                //Have http
                if (strpos($imageValue, '.jpg') !== false || strpos($imageValue, '.jpeg') !== false || strpos($imageValue, '.png') !== false) {
                    //Has extension
                    return $imageValue;
                } else {
                    //No extension
                    return $imageValue.$version;
                }
            } else {
                //Local image
                return ($this->imagePath.$imageValue).$version;
            }
        }
    }

    public function getLogomAttribute()
    {
        return $this->getImge($this->image);
    }


    public function restorant()
    {
        return $this->belongsTo(\App\Restorant::class,'restorant_id','id');
    }

    public function items()
    {
        return $this->hasMany(\App\Models\ServiceItem::class, 'service_category_id', 'id');
    }

    public function aitems()
    {
        return $this->hasMany(\App\Models\ServiceItem::class, 'service_category_id', 'id')->where(['service_items.available'=>1]);
    }
}
