<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;

class AdminProjectController extends Controller
{
    public function listProject() {
        $data = Project::all();

        return view('project_view',compact('data'));
    }

    public function formProject() {
        return view('inputproject_view');
    }

    public function createProject(Request $request) {
        $data = $this->validate($request,[
            'nama_project'      => 'required',
            'jenis_project'     => 'required',
            'lama_pengerjaan'   => 'required'
        ],[
            'required'  => ':attribute harus diisi'
        ],[
            'nama_project'      => 'Project Name',
            'jenis_project'     => 'Type of Project',
            'lama_pengerjaan'   => 'Deadline'
        ]);

        Project::create($data);

        return redirect()->to('/data-tables/project');
    }

    public function deleteProject(Project $project) {
        $project->delete();
        return redirect()->back();
    }
}
