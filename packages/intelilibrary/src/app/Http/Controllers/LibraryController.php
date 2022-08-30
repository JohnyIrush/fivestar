<?php

namespace Softwarescares\Intelilibrary\app\Http\Controllers;


use Softwarescares\Intelilibrary\app\Http\Controllers\Controller;
use Softwarescares\Intelilibrary\app\Http\Requests\StoreLibraryRequest;
use Softwarescares\Intelilibrary\app\Http\Requests\UpdateLibraryRequest;
use Softwarescares\Intelilibrary\app\Models\Author;
use Softwarescares\Intelilibrary\app\Models\Book;
use Softwarescares\Intelilibrary\app\Models\BookIssue;
use Softwarescares\Intelilibrary\app\Models\BookCategory;
use Softwarescares\Intelilibrary\app\Models\Library;
use Softwarescares\Intelilibrary\app\Models\Publisher;
use Softwarescares\Inteliportal\app\Models\Student;
use App\Models\User;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Library $library, Table $table)
    {
        return $table->table($library, Library::all(), [], [], [],
            [
            'store' => "library/store",
            'update' => "library/update",
            "delete" => "library/destroy"
            ]);
    }

    public function librarian(User $user, Card $card)
    {
        $users = User::all()->reject(function ($user) {
            return !$user->hasRole('Librarian');
        })->map(function ($user) {
            return $user;
        });

        return $card->card($user, User::all(), ["profile_photo_path","name","phone"], ["profile_photo_path" => 'image'],
                        [
            'store' => "library/store",
            'update' => "library/update",
            "delete" => "library/destroy"
            ]
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Library $library,Form $form)
    {
        return $form->form($library, [],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "library/store",
            'update' => "library/update",
            "delete" => "library/destroy"
            ]
           );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function analytics()
    {
        return response()->json([
            'authors' => Author::count(),
            'publishers' => Publisher::count(),
            'categories' => BookCategory::count(),
            'books' => Book::count(),
            'students' => Student::count(),
            'issued_books' => BookIssue::count(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLibraryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLibraryRequest $request, Library $library, Store $store)
    {
        $library = $store->store($request, $library);

        return response()->json($library);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function show(Library $library)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function edit(Library $library)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLibraryRequest  $request
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLibraryRequest $request, Library $library, Update $update)
    {
        $library = $update->update($request, $library,["id" => $request->input("id")]);

        return response()->json($library); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Library $library, Delete $delete)
    {
        $library = $delete->delete($request, $library,["id" => $request->input("id")]);

        return response()->json($library);
    }
}
