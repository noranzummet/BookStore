<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($author_id)
{
    return Book::where('author_id', $author_id)->get();
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $author_id)
{
    $data = $request->validate([
        'title' => 'required|string',
        'price' => 'required|decimel'
        'ISBN' => 'required|string|unique:books',
    ]);

    $data['author_id'] = $author_id;

    return Book::create($data);
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $author_id, $book_id)
{
    $book = Book::where('author_id', $author_id)
                ->where('id', $book_id)
                ->firstOrFail();

    $data = $request->validate([
        'title' => 'sometimes|string',
        'price' => 'sometimes|integer',
        'publish_year' => 'sometimes|digits:4',
        'ISBN' => 'sometimes|string',
    ]);

    $book->update($data);

    return $book;
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($author_id, $book_id)
{
    Book::where('author_id', $author_id)
        ->where('id', $book_id)
        ->firstOrFail()
        ->delete();

    return response()->json(['message' => 'Book deleted']);
}

}
