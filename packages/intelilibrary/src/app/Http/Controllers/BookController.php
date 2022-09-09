<?php

namespace Softwarescares\Intelilibrary\app\Http\Controllers;

use Softwarescares\Intelilibrary\app\Models\Book;
use Softwarescares\Intelilibrary\app\Models\BookCategory;
use Softwarescares\Intelilibrary\app\Models\DeweyDecimal;
use Softwarescares\Intelilibrary\app\Models\Language;
use Softwarescares\Intelilibrary\app\Models\Binding;
use Softwarescares\Inteliportal\app\Models\Student;
use Softwarescares\Intelilibrary\app\Http\Requests\StoreBookRequest;
use Softwarescares\Intelilibrary\app\Http\Requests\UpdateBookRequest;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Illuminate\Http\Request;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Book $book, Card $card)
    {

        return $card->card($book, Book::with("authors",
            "publishers","bookCategory","binding","deweyDecimal","language")->get() , ["image","title","edition"], ["image" => 'image'],
                    [
                     'store' => "library/book/store",
                     'update' => "library/book/update",
                     "delete" => "library/book/destroy"
                     ]
    );
    }

    public function test()
    {
        return response()->json(Student::with([
            "section" =>[
                "stream",
                "level"
            ]
        ])->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Book $book,Form $form)
    {
        return $form->form($book, [
            "book_category_id" => [ 
                "book_category_id" => BookCategory::all(),
                "name" => "category",
                "value" => "id",
                "limit" => 1,
                 ],
            "dewey_decimal_id" => [
                "dewey_decimal_id" =>DeweyDecimal::all(),
                "name" => "dewey_decimal",
                "value" => "id",
                "limit" => 1,
                ],
            "binding_id" => [
                      "binding_id" => Binding::all(),
                      "name" => "binding",
                      "value" => "id",
                      "limit" => 1,
            ],
            "language_id" => [
                      "language_id" =>Language::all(),
                      "name" => "language",
                      "value" => "id",
                      "limit" => 1,
            ], 
            "status" => [
                "status" => [["id" => 0,"status" => "False"],["id" => 1, "status" =>"True"]],
                "name" => "status",
                "value" => "id",
                "limit" => 1,
            ]
        ],['id','created_at', 'updated_at'],
        [
            "store" => "library/book/store",
            "update" => "library/book/update",
            "delete" => "library/book/delete"
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request, Book $book,Store $store)
    {
        $book = $store->store($request, $book);

        return response()->json($book);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, Book $book, Update $update)
    {
        $book = $update->update($request, $book,["id" => $request->input("id")]);

        return response()->json($book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Book $book, Delete $delete)
    {
        $book = $delete->delete($request, $book,["id" => $request->input("id")]);

        return response()->json($book);
    }
}
