<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function selectProject() {
        $project = Project::all();

        return response()->json([
            'status'    => 200,
            'message'   => 'Project Berhasil diTampilkan',
            'data'      => $project
        ]);
    }
}
