<?php

namespace Softwarescares\Intelilibrary\app\Http\Controllers;

use Softwarescares\Intelilibrary\app\Http\Requests\StoreAuthorRequest;
use Softwarescares\Intelilibrary\app\Http\Requests\UpdateAuthorRequest;
use Softwarescares\Intelilibrary\app\Models\Author;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Author $author, Card $card)
    {
        return $card->card($author, Author::with("books")->get() , ["profile_photo_path","firstname","lastname","email","phone"], ["profile_photo_path" => 'image'],
            [
            'store' => "library/author/store",
            'update' => "library/author/update",
            "delete" => "library/author/destroy"
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Author $author, Form $form)
    {
        return $form->form($author, [
        ],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "library/author/store",
            'update' => "library/author/update",
            "delete" => "library/author/destroy"
            ]
           ); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAuthorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuthorRequest $request, Author $author,Store $store)
    {
        $author = $store->store($request, $author);

        return response()->json($author);    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAuthorRequest  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAuthorRequest $request, Author $author,Update $update)
    {
        $author = $update->update($request, $author,["id" => $request->input("id")]);

        return response()->json($author);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Author $author,Delete $delete)
    {
        $author = $delete->delete($request, $author,["id" => $request->input("id")]);

        return response()->json($author);
    }
}
