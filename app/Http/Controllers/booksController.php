<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\category;
use App\music;

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

  public function category($id) {
    $books = Book::find($id);

    return view("book", compact("books"));
  }

  public function search(Request $req) {
    $search = $req["search"];
    $books = book::where("titulo", "like", "%" . $search . "%")->get();
    $musics = music::where("titulo", "like", "%" . $search . "%")->get();
    return view("search", compact("books","musics" , "search"));
  }

  public function add() {
    $category = Category::all();

    return view("addbook", compact("category"));
  }

  public function store(Request $req) {
    $rules = [
      "titulo" => "required|string|min:3|max:255",
      "price" => "required|numeric|min:0|max:1000",
      "stock" => "required|integer|min:0|max:1000",
      "autor" => "required|string|min:3|max:255",
      "category_id" => "required|exists:categories_tabla,id",
      "avatar" => "required|image"
    ];

    $this->validate($req, $rules);

    $books = new Book();

    $books->titulo = $req->titulo;
    $books->price = $req->price;
    $books->stock = $req->stock;
    $books->autor = $req->autor;
    $books->category_id = $req->category;
    $books->avatar = $req->avatar;
    $books->save();


    return redirect("/book" . $books->id);
  }

  public function delete(Request $req) {
    $idbooks = $req["id"];

    $bok = Book::find($idbooks);

    $bok->delete();

    return redirect("/");
  }
}
