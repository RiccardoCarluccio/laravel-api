<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {
            $projects = Project::with(["type"])->paginate(5);                                   //"technologies" non migra la tabella e di conseguenza non funziona
            return response()->json($projects);
    }
}