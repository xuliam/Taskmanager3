<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Repositories\ProjectsRepository;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $repo;

    public function __construct(ProjectsRepository $repo)
    {
        $this->repo=$repo;
    }

    public function store(CreateProjectRequest $request)
    {
        $this->repo->create($request);
        return back();
    }

    public function destroy($id)
    {
        $this->repo->delete($id);
        return back();
    }

    public function update(Request $request, $id)
    {
        $this->repo->update($request, $id);
        return back();
    }


}
