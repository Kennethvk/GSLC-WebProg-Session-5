<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/homePage');
});

Route::get('/online-courses',function() {
    $courses = [
        ['name' => 'Matematika', 'available' => true],
        ['name' => 'Fisika', 'available' => true],
        ['name' => 'Musik', 'available' => false],
        ['name' => 'Biologi', 'available' => true],
        ['name' => 'Kimia', 'available' => false]
    ];

    return view('pages/coursesPage')->with('courses', $courses);
});
