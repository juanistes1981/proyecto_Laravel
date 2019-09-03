<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\music;
use App\category;
class musicController extends Controller
{
  public function all() {
    $musics = Music::paginate(20); //probar con music

    return view("music", compact("music"));
  }

  public function detail($id) {
    $music = Music::find($id);

    return view("music", compact("music"));
  }

  public function search(Request $req) {
    $search = $req["search"];

    $musics = Music::where("name", "like", "%" . $search . "%")->get();

    return view("search", compact("music", "search"));
  }

  public function add() {
    $categories = Category::all();

    return view("addMusic", compact("categories"));
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

    $music = new Music();

    $music->titulo = $req->titulo;
    $music->price = $req->price;
    $music->stock = $req->stock;
    $music->autor = $req->autor;
    $music->category_id = $req->category;

    $music->save();

    return redirect("/music" . $music->id);
  }

  public function delete(Request $req) {
    $idmusic = $req["id"];

    $musics = Product::find($idmusic);

    $musics->delete();

    return redirect("/");
  }
}
