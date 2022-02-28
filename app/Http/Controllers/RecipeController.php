<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\Step;
use App\Models\Like;
use PhpParser\Node\Expr\FuncCall;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::orderBy('created_at', 'desc')->get();
        return view('index',['recipes' => $recipes]);
    }

    public function create()
    {
        return view('createRecipe');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|unique:recipes',
            'desc' => 'required',
            'ingredient' => 'required',
            'step' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'title.required' => 'Nama masakan tidak boleh kosong',
            'title.unique' => 'Nama masakan sudah tersedia masukan nama lain',
            'desc.required' => 'Deskripsi tidak boleh kosong',
            'ingredient.required' => 'Bahan tidak boleh kosong',
            'step.required' => 'Langkah tidak boleh kosong',
            'img.required' => 'gambar harus ada',
        ]);

        // dd($request->all());

        $imageName = time().'.'.$request->img->extension();
        
        $request->img->move(public_path('assets/img'), $imageName);

        Recipe::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'img' => $imageName,
            'user_id' => auth()->user()->id
        ]);

        foreach ($request->ingredient as $key => $value) {
            $name = $request->ingredient[$key];

            Ingredient::create([
                'name' => $name,
                'recipe_id' => Recipe::where('title', $request->title)->first()->id,
            ]);
        }

        foreach ($request->step as $key => $value) {
            $name = $request->step[$key];
            Step::create([
                'name' => $name,
                'recipe_id' => Recipe::where('title', $request->title)->first()->id,
            ]);
        }

        return redirect()->route('recipe.create')->with('status','Resep berhasil diterbitkan!');

        
    }

    public function show($id)
    {
        $recipes = Recipe::find($id);
        $ingredienes = Ingredient::where('recipe_id', $id)->get();
        $steps = Step::where('recipe_id', $id)->get();

        return view('showRecipe',[
            'recipes' => $recipes,
            'ingredienes' => $ingredienes,
            'steps' => $steps
            ]);
    }

    public function like($recipe_id){

        $recipe = Like::all()->where('user_id', auth()->user()->id)->where('recipe_id', $recipe_id)->count();

        if($recipe == 0){
            Like::create([
                'recipe_id' => $recipe_id,
                'user_id' => auth()->user()->id
            ]);
        } else {
            Like::where('user_id', auth()->user()->id)->where('user_id', auth()->user()->id)->delete();
        }

        return redirect()->back();

    }
}
