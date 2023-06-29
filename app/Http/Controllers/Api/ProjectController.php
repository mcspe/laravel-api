<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;

class ProjectController extends Controller
{
  public function index() {
    $projects = Project::with('type', 'technologies')->get();

    return response()->json($projects);
  }

  public function getProjectDetail($slug) {
    $project = Project::where('slug', $slug)->with('type', 'technologies')->first();

    return response()->json($project);
  }

  public function getTypes() {
    $types = Type::all();

    return response()->json($types);
  }

  public function getTechnologies() {
    $technologies = Technology::all();

    return response()->json($technologies);
  }

  public function getImage() {
    $url = 'http://' . $_SERVER['HTTP_HOST'] . '/storage/';

    return response()->json($url);
  }
}
