<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

Route::get('routes', function () {
  return response()->json(Route::getRoutes()->getRoutes());
});

Route::group(['prefix' => 'v1', 'namespace' => 'API\V1'], function () {
  Route::apiResource('teachers', 'Teacher\TeacherController');
  Route::apiResource('students', 'Student\StudentController');
  Route::apiResource('forums', 'Forum\ForumController');
  Route::apiResource('posts', 'Post\PostController');
  Route::apiResource('students.ratings', 'Student\StudentRatingController');
  Route::apiResource('teachers.posts', 'Teacher\TeacherPostController')
    ->except(["show"])
    ->shallow();
  Route::apiResource('teachers.offered-classes', 'Teacher\TeacherOfferedClassController')
    ->shallow();
  Route::apiResource('teachers.degrees', 'Teacher\TeacherDegreesController')
    ->shallow();
});
