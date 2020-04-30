<?php

namespace App\Http\Controllers\API\V1\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\Forum as ForumResource;
use App\Models\Forum;

class ForumController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    $forums = Forum::paginate(15);

    return ForumResource::collection($forums);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id) {
    $forum = Forum::findByUuid($id);

    return new ForumResource($forum);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id) {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id) {

  }
}
