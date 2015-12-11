<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Input;
use Redirect;
use DB;
use Mail;

class CategoriesController extends Controller
{

    public function index()
    {
        //$categories = Category::all();
        $categories = Category::where('user_id', Auth::user()->id)->get();

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
        $input['user_id'] = Auth::user()->id;
        //print_r($input);
        Category::create( $input );


        /*$data = array(
            'name' => Auth::user()->name,
        );

        Mail::send('emails.category', $data, function ($message) {

            $message->from('taskrmastr@outlook.com', 'Category Created');

            $message->to(Auth::user()->email)->subject('Category Created');

        });*/

        return Redirect::route('categories.index')->with('message', 'Category created');
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

        return Redirect::route('categories.show', $category->slug)->with('message', 'Project updated.');
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return Redirect::route('categories.index')->with('message', 'Category deleted.');
    }
}
