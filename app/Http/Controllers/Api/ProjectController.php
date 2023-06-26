<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
  public function index() {
    $projects = Project::with('type', 'technologies')->get();

    return response()->json($projects);
  }

  public function getImage() {
    $url = 'http://' . $_SERVER['HTTP_HOST'] . '/storage/';

    return response()->json($url);
  }
}
