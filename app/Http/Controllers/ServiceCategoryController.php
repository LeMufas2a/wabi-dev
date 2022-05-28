<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ServiceCategory;
use App\ServiceItem;
use Image;
use Akaunting\Module\Facade as Module;
use App\Models\Allergens;

use Slim;


class ServiceCategoryController extends Controller
{
    
    private $imagePath = 'uploads/service_categories/';

    public function reorderCategories(ServiceCategory $up){
        $up->moveOrderUp();
        // return redirect()->route('items.index')->withStatus(__('Sort order updated'));
        return redirect()->route('service_items.index')->withStatus(__('Sort order updated'));
    }

    
}
