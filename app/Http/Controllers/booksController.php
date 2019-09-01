<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
use App\category;
class musicController extends Controller
{
  public function all() {
    $books = Book::paginate(20); //probar con music

    return view("book", compact("book"));
  }

  public function detail($id) {
    $books = Book::find($id);

    return view("book", compact("book"));
  }

  public function search(Request $req) {
    $search = $req["search"];

    $books = Book::where("name", "like", "%" . $search . "%")->get();

    return view("search", compact("book", "search"));
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

    $book = new Book();

    $book->titulo = $req->titulo;
    $book->price = $req->price;
    $book->stock = $req->stock;
    $book->autor = $req->autor;
    $book->category_id = $req->category;

    $book->save();

    return redirect("/book/" . $book->id);
  }

  public function delete(Request $req) {
    $idbooks = $req["id"];

    $books = Product::find($idbooks);

    $books->delete();

    return redirect("/");
  }
}
