<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\category;

class BooksController extends Controller
{
  public function all() {
    $books = book::paginate(20); //probar con music

    return view("book", compact("books"));
  }

  public function detail($id) {
    $books = Book::find($id);

    return view("book", compact("books"));
  }

  public function search(Request $req) {
    $search = $req["search"];

    $books = Book::where("name", "like", "%" . $search . "%")->get();

    return view("search", compact("books", "search"));
  }

  public function add() {
    $categories = Category::all();

    return view("addBook", compact("categories"));
  }

  public function store(Request $req) {
    $rules = [
      "titulo" => "required|string|min:3|max:255",
      "price" => "required|numeric|min:0|max:1000",
      "stock" => "required|integer|min:0|max:1000",
      "autor" => "required|string|min:3|max:255",
      "category" => "required|exists:categories,id" //category puede ser
    ];

    $this->validate($req, $rules);

    $books = new BookController();

    $books->titulo = $req->titulo;
    $books->price = $req->price;
    $books->stock = $req->stock;
    $books->autor = $req->autor;
    $books->category_id = $req->category;

    $books->save();

    return redirect("/book/" . $books->id);
  }

  public function delete(Request $req) {
    $idbooks = $req["id"];

    $books = Product::find($idbooks);

    $books->delete();

    return redirect("/");
  }
}
