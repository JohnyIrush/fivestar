<?php

namespace Softwarescares\Intelistaff\app\Http\Controllers;

use Softwarescares\Intelistaff\app\Http\Requests\StoreCategoryRequest;
use Softwarescares\Intelistaff\app\Http\Requests\UpdateCategoryRequest;
use Softwarescares\Intelistaff\app\Models\Category;


use Softwarescares\Inteli\app\Actions\Model\Store;
use Softwarescares\Inteli\app\Actions\Model\Update;
use Softwarescares\Inteli\app\Actions\Model\Delete;

use Softwarescares\Inteli\app\Plugins\Model\Form;
use Softwarescares\Inteli\app\Plugins\Model\Table;
use Softwarescares\Inteli\app\Plugins\Model\Card;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category, Table $table)
    {

        return $table->table(
            $category, 
            Category::all()
            ,
            [], 
            []
           , 
           ["icon" => "image"],
           [
            'store' => "staff/category/store",
            'update' => "staff/category/update",
            "delete" => "staff/category/destroy"
           ],
           ["created_at","updated_at"]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category, Form $form)
    {
        return $form->form($category, [],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "staff/category/store",
            'update' => "staff/category/update",
            "delete" => "staff/category/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request, Category $category, Store $store)
    {
        $category = $store->store($request, $category);

        return response()->json($category);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category, Update $update)
    {
        $category = $update->update($request, $category,["id" => $request->input("id")]);

        return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category, Delete $delete)
    {
        $category = $delete->delete($request, $category,["id" => $request->input("id")]);

        return response()->json($category);

    }
}
