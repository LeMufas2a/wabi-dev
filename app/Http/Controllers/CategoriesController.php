<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

// use App\slimcrop\SlimStatus;
use Slim;

class CategoriesController extends Controller
{
    private $imagePath = 'uploads/categories/';
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
        $images = new Slim();
        $images = $images->getImages('item_image');
        $image = $images[0];

        // dd($images);
        
        $category = new Categories;
        $category->name = strip_tags($request->category_name);
        $category->restorant_id = $request->restaurant_id;
        
        
        $ext = "jpg";
        
        $data = $image['output']['data'];


        // $data_large = $image['input']['data'];
        $uuid = Str::uuid()->toString();
        $uuid_large = $uuid."_large".".".$ext;
        $uuid_medium = $uuid."_medium".".".$ext;
        $uuid_thumbail = $uuid."_thumbnail".".".$ext;
        $category->image = $uuid;
        $count_for_sizes = 0;
        

        $file_large = Slim::saveFile($data, $uuid_large, public_path($this->imagePath));
        $file_medium = Slim::saveFile($data, $uuid_medium, public_path($this->imagePath));
        $file_thumbail = Slim::saveFile($data, $uuid_thumbail, public_path($this->imagePath));
            

        $category->save();

        if (auth()->user()->hasRole('admin')) {
            //Direct to that page directly
            return redirect()->route('items.admin', ['restorant'=>$request->restaurant_id])->withStatus(__('Category successfully created.'));
        }

        return redirect()->route('items.index')->withStatus(__('Category successfully created.'));
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
    public function update(Request $request, Categories $category)
    {
        $category->name = $request->category_name;

        if ($request->hasFile('item_image')) {
            $category->image = $this->saveImageVersions(
                $this->imagePath,
                $request->item_image,
                [
                    ['name'=>'large', 'w'=>1000, 'h'=>300],
                    //['name'=>'thumbnail','w'=>300,'h'=>300],
                    ['name'=>'medium', 'w'=>295, 'h'=>200],
                    ['name'=>'thumbnail', 'w'=>200, 'h'=>200],
                ]
            );
            // dd($category->image);
        }

        $category->update();

        return redirect()->back()->withStatus(__('Category info successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $category)
    {
        $category->delete();
        return redirect()->route('items.index')->withStatus(__('Category successfully deleted.'));
    }
}
