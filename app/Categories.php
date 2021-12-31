<?php

namespace App;

use App\Models\TranslateAwareModel;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;


class Categories extends TranslateAwareModel implements Sortable
{

    use SortableTrait;
    use SoftDeletes;

    protected $table = 'categories';
    public $translatable = ['name'];

    protected $imagePath = '/uploads/categories/';

    public $sortable = [
        'order_column_name' => 'order_index',
        'sort_when_creating' => true,
    ];

    //Used for sort grouping
    public function buildSortQuery()
    {
        return static::query()->where('restorant_id', $this->restorant_id);
    }

    

    public function items()
    {
        return $this->hasMany(\App\Items::class, 'category_id', 'id');
    }

    public function aitems()
    {
        return $this->hasMany(\App\Items::class, 'category_id', 'id')->where(['items.available'=>1]);
    }

    public function restorant()
    {
        return $this->belongsTo(\App\Restorant::class);
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

}
