<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Input;
use Redirect;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('categories.index', [
            'categories' => $categories,
            'name' => Auth::user()->name
        ]);

    }


    public function create()
    {
        return view('categories.create', [
            'name' => Auth::user()->name
        ]);
    }


    protected $rules = [
        'name' => ['required', 'min:3'],
        'slug' => ['required'],
    ];


    public function store(Request $request)
    {
        $this->validate($request, $this->rules);

        $input = Input::all();
        Category::create( $input );

        return Redirect::route('home.index')->with('message', 'Category created');
    }


    public function show(Category $category)
    {
        return view('categories.show', [
            'name' => Auth::user()->name,
            'category' => $category
        ]);
    }


    public function edit(Category $category)
    {
        return view('categories.edit', [
            'name' => Auth::user()->name,
            'category' => $category
        ]);
    }


    public function update(Category $category, Request $request)
    {
        $this->validate($request, $this->rules);

        $input = array_except(Input::all(), '_method');
        $category->update($input);

        return Redirect::route('home.show', $category->slug)->with('message', 'Project updated.');
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return Redirect::route('home.index')->with('message', 'Category deleted.');
    }
}
