<?php

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function() {
    return view('index', [
        'tasks' => \App\Models\Task::latest()/*->where('completed',false)*/->get()
    ]);
})->name('tasks.index');

Route::view('/task/create', 'create')->name('create');

Route::view('/task/create', 'create')->name('create');


Route::post('/tasks', function(Request $request){
    /*Si la validation ne passe pas, alors laravel  va rediriger l'utilisateur
    vers la page précédente et envoyer un object appelé errors afin que l'on puisse
    les afficher sur la page par la suite*/
    $data = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'long_description' => 'required',
    ]);

    $task = new Task;
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();

    return redirect()->route('tasks.show', ['task'=>$task->id])
        ->with('success', 'Task created successfully!');

})->name('tasks.store');


Route::get('/task/{task}', function (Task $task) {
    //$task = collect($tasks)->firstWhere('id','=',$id);
    return view('show', [
        'task' => $task
    ]);
})->name('tasks.show');

Route::get('/task/{task}/edit', function (Task $task) {
    //$task = collect($tasks)->firstWhere('id','=',$id);
    return view('edit', [
        'task' => $task
    ]);
})->name('tasks.edit');

Route::put('/tasks/{task}', function (Task $task, Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'long_description' => 'required',
    ]);

    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();

    return redirect()->route('tasks.show', ['task'=>$task->id])
        ->with('success', 'Task edited successfully!');
})->name('tasks.update');











Route::get('/hallo', function() {
    return redirect()->route('hello');
});

Route::get('/greet/{name}', function($name) {
    return $name;
});

//Si aucune route n'a été trouvée, ça redirige vers une page par défaut
Route::fallback(function() {
    return 'Still got somewhere';
});