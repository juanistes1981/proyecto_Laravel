<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
  public function all() {
    $books = books::paginate(20); //probar con music

    return view("books", compact("books"));
  }

  public function detail($id) {
    $books = Books::find($id);

    return view("books", compact("books"));
  }

  public function search(Request $req) {
    $search = $req["search"];

    $books = Books::where("name", "like", "%" . $search . "%")->get();

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

    $books = new BooksController();

    $books->titulo = $req->titulo;
    $books->price = $req->price;
    $books->stock = $req->stock;
    $books->autor = $req->autor;
    $books->category_id = $req->category;

    $books->save();

    return redirect("/books/" . $books->id);
  }

  public function delete(Request $req) {
    $idbooks = $req["id"];

    $books = Product::find($idbooks);

    $books->delete();

    return redirect("/");
  }
}
