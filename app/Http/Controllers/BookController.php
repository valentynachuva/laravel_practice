<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Messagges;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('pages.list', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required|unique:books',
        ]);

        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->isbn = $request->isbn;
        $book->save();
        $request->session()->flash('success', 'Книга добавлена успешно!');
        return redirect()->to('/books');

        //сохранение данных через фасад

        // Book::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('pages.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
  $book = Book::findOrFail($id);
  return view('pages.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return  $request. $id;
       //$book= Book::find($id);
      //  $book->title = $request->title;
      //  $book->author = $request->author;
     //   $book->isbn = $request->isbn;
    // //   $book->save();
    //    $request->session()->flash('success', 'Книга обновлена успешно!');
     //   return redirect()->to('/books');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        //  dd(__METHOD__,$id, request()->all());

     //  $book = Book::destroy($id)->delete();

  $book = Book::find($id);
  $book->delete();
  if ($book) {

   return redirect()->route('list_book')->with('success', 'Книга № ' . $id.' удалена успешно' );
       }
    }
}
