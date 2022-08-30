<?php

namespace Softwarescares\Intelilibrary\app\Http\Controllers;

use Softwarescares\Intelilibrary\app\Models\BookCategory;
use Softwarescares\Intelilibrary\app\Http\Requests\StoreBookCategoryRequest;
use Softwarescares\Intelilibrary\app\Http\Requests\UpdateBookCategoryRequest;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

class BookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BookCategory $bookCategory, Table $table)
    {
        return $table->table($bookCategory, BookCategory::with("books")->get(),
            [
            "book_id" => [
                "name" => "book",
                "value" => "title",
                "display" => "list"
            ],
        ]
            , [], ["image" => "image"],
           [
            'store' => "library/book/category/store",
            'update' => "library/book/category/update",
            "delete" => "library/book/category/destroy"
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(BookCategory $bookCategory, Form $form)
    {
        return $form->form($bookCategory, [
           "status" => ['Inactive', "Active"]
        ],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "library/book/category/store",
            'update' => "library/book/category/update",
            "delete" => "library/book/category/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookCategoryRequest $request, BookCategory $bookCategory,Store $store)
    {
        $bookCategory = $store->store($request, $bookCategory);

        return response()->json($bookCategory);  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookCategory  $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BookCategory $bookCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookCategory  $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BookCategory $bookCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookCategoryRequest  $request
     * @param  \App\Models\BookCategory  $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookCategoryRequest $request, BookCategory $bookCategory, Update $update)
    {
        $bookCategory = $update->update($request, $bookCategory,["id" => $request->input("id")]);

        return response()->json($bookCategory);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookCategory  $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, BookCategory $bookCategory, Delete $delete)
    {
        $bookCategory = $delete->delete($request, $bookCategory,["id" => $request->input("id")]);

        return response()->json($bookCategory);
    }
}
