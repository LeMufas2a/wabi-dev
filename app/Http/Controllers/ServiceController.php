<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ServiceCategory;
use App\Models\ServiceItem;
use Image;
use Akaunting\Module\Facade as Module;
use App\Models\Allergens;
use Maatwebsite\Excel\Facades\Excel;
use App\Services\ConfChanger;


use Slim;

class ServiceController extends Controller
{

    private $imagePath = 'uploads/service_categories/';

    public function reorderCategories(ServiceCategory $up){
        $up->moveOrderUp();
        // return redirect()->route('items.index')->withStatus(__('Sort order updated'));
        return redirect()->route('service_items.index')->withStatus(__('Sort order updated'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $servicecategory = new ServiceCategory;
        $servicecategory->name = strip_tags($request->category_name);
        $servicecategory->restorant_id = $request->restaurant_id;

        // Storing image for category
        if($request['item_image']){
            $image_to_send = json_decode($request['item_image']);
            $image_to_send = $image_to_send->output->image;
        

            $servicecategory->image = $this->saveImageVersionsUsingSlim(
                $this->imagePath,
                $image_to_send,
                [
                        ['name'=>'large', 'w'=>1000, 'h'=>300],
                        ['name'=>'thumbnail','w'=>300,'h'=>300],
                        ['name'=>'medium', 'w'=>295, 'h'=>200],
                        ['name'=>'thumbnail', 'w'=>200, 'h'=>200],
                ]
            );
        }

        $servicecategory->save();

        if (auth()->user()->hasRole('admin')) {
            //Direct to that page directly
            return redirect()->route('serviceitems.admin', ['restorant'=>$request->restaurant_id])->withStatus(__('Service Category successfully created.'));
        }

        return redirect()->route('serviceitems.index')->withStatus(__('Service Category successfully created.'));

                
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $service_category = ServiceCategory::find($id);
        
        $service_category->name = strip_tags($request->category_name);

        if($request['item_image']){
            
            $image_to_send = json_decode($request['item_image']);
            $image_to_send = $image_to_send->output->image;
            
            
            $service_category->image = $this->saveImageVersionsUsingSlim(
                $this->imagePath,
                $image_to_send,
                [
                        ['name'=>'large', 'w'=>1000, 'h'=>300],
                        ['name'=>'thumbnail','w'=>300,'h'=>300],
                        ['name'=>'medium', 'w'=>295, 'h'=>200],
                        ['name'=>'thumbnail', 'w'=>200, 'h'=>200],
                ]
            );
        }
        else{
            $service_category->image = NULL;
        }

        $service_category->update();

        return redirect()->back()->withStatus(__('Service Category info successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $service_category = ServiceCategory::find($id);
        $service_category->delete();
        return redirect()->route('serviceitems.index')->withStatus(__('Service Category successfully deleted.'));
    }
}
