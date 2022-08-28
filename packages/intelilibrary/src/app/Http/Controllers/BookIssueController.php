<?php

namespace Softwarescares\Intelilibrary\app\Http\Controllers;

use Softwarescares\Intelilibrary\app\Http\Requests\StoreBookIssueRequest;
use Softwarescares\Intelilibrary\app\Http\Requests\UpdateBookIssueRequest;
use Softwarescares\Intelilibrary\app\Models\Book;
use Softwarescares\Intelilibrary\app\Models\BookIssue;
use Softwarescares\Inteliportal\app\Models\Student;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Table;

use Illuminate\Http\Request;

class BookIssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(BookIssue $bookIssue, Table $table)
    {
        return $table->table($bookIssue, BookIssue::with("book","student")->get(),
            [
            "book_id" => [
                "name" => "book",
                "value" => "title",
                "display" => "list"
            ],
            "student_id" => [
                "name" => "studnt",
                "value" => "firstname",
                "display" => "list"
            ]
        ]
            , [], []);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.issueBook_add', [
            'students' => Student::latest()->get(),
            'books' => Book::where('status', 'Y')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storebook_issueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookIssueRequest $request, BookIssue $bookIssue, Store $store)
    {
        $bookIssue = $store->store($request, $bookIssue);

        return response()->json($bookIssue);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatebook_issueRequest  $request
     * @param  \App\Models\book_issue  $book_issue
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookIssueRequest $request, BookIssue $bookIssue, Update $update)
    {
        $bookIssue = $update->update($request, $bookIssue,["id" => $request->input("id")]);

        return response()->json($bookIssue); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book_issue  $book_issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, BookIssue $bookIssue, Delete $delete)
    {
        $bookIssue = $delete->delete($request, $bookIssue,["id" => $request->input("id")]);

        return response()->json($bookIssue);
    }
}
