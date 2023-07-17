<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // $projects = Project::all();
        $projects = Project::with('type', 'stacks')->paginate(2);
        $data = [
            'status' => true,
            'results' => $projects
        ];

        return response()->json($data);
    }
}
