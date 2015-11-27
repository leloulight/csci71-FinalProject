<?php namespace App\Http\Controllers;

use App\Category;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Input;
use Redirect;

class TasksController extends Controller {
    /**
     * @codeCoverageIgnore
     */
    public function index(Category $category)
    {
        return view('tasks.index', [
            'category' => $category,
            'name' => Auth::user()->name
        ]);
    }


    public function create(Category $category)
    {
        return view('tasks.create', [
            'category' => $category,
            'name' => Auth::user()->name
        ]);
    }


    protected $rules = [
        'name' => ['required', 'min:3'],
        'slug' => ['required'],
        'description' => ['required'],
    ];


    public function store(Category $category, Request $request)
    {
        $this->validate($request, $this->rules);

        $input = Input::all();
        $input['category_id'] = $category->id;
        Task::create( $input );

        return Redirect::route('home.show', $category->slug)->with('message', 'Task created.');
    }


    public function show(Category $category, Task $task)
    {
        return view('tasks.show', [
            'category' => $category,
            'task' => $task,
            'name' => Auth::user()->name
        ]);
    }


    public function edit(Category $category, Task $task)
    {
        return view('tasks.edit', [
            'category' => $category,
            'task' => $task,
            'name' => Auth::user()->name
        ]);
    }


    public function update(Category $category, Task $task, Request $request)
    {
        $this->validate($request, $this->rules);

        $input = array_except(Input::all(), '_method');
        $task->update($input);

        return Redirect::route('home.tasks.show', [$category->slug, $task->slug])->with('message', 'Task updated.');
    }


    public function destroy(Category $category, Task $task)
    {
        $task->delete();

        return Redirect::route('home.show', $category->slug)->with('message', 'Task deleted.');
    }

}