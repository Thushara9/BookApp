<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\books;
use Illuminate\View\View;

class bookscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $books = books::paginate(05);
        return view ('books.index')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        books::create($input);
        return redirect('books')->with('flash_message', 'Book Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    {
        $books = books::find($id);
        return view('books.show')->with('books', $books);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $books = books::find($id);
        return view('books.edit')->with('books', $books);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $books = books::find($id);
        $input = $request->all();
        $books->update($input);
        return redirect('books')->with('flash_message', 'Book Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        books::destroy($id);
        return redirect('books')->with('flash_message', 'Book deleted!'); 
    }

    function search(Request $req)
    {
        $query = $req->input('query');
    
        $books = books::where(function ($queryBuilder) use ($query) {
                $queryBuilder->where('Title', 'LIKE', '%' . $query . '%')
                    ->orWhere('Author', 'LIKE', '%' . $query . '%')
                    ->orWhere('Genre', 'LIKE', '%' . $query . '%')
                    ->orWhere('Height', 'LIKE', '%' . $query . '%')
                    ->orWhere('Publisher', 'LIKE', '%' . $query . '%');
            })
            ->paginate(4); // Change the number 10 to the desired number of results per page
    
        return view('search', ['books' => $books]);
    }
    
}