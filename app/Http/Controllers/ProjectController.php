<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectsRepository;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $repo;

    public function __construct(ProjectsRepository $repo)
    {
        $this->repo=$repo;
    }

    public function store(Request $request)
    {
        $this->repo->create($request);

        return back();
    }


}
