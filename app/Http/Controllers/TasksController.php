<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTask;
use App\Http\Requests\UpdateTask;
use App\Task;
use Illuminate\Http\Request;
use App\Repositories\TasksRepository;

class TasksController extends Controller
{
    protected $repo;

    public function __construct(TasksRepository $repo )
    {
        $this->repo= $repo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todo = $this->repo->todos();
        $done = $this->repo->dones();
        //$tasks = request()->user()->tasks()->pluck('name', 'id');
        return view('tasks._index', compact('todo', 'done'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTask $request)
    {
        $this->repo->store($request);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTask $request, $id)
    {
        $this->repo->update($request, $id);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repo->destroy($id);
        return back();
    }

    public function check($id)
    {
     $this->repo->check($id);

        return back();
    }
}
