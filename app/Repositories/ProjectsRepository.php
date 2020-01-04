<?php


namespace App\Repositories;


use App\Project;

class ProjectsRepository
{

    public function create($request)
    {
        $request->user()->projects()->create([
            'name'=>$request->name,
            'thumbnail'=>$this->thumb($request),
        ]);
    }

    public function thumb($request)
    {
        if($request->hasFile('thumbnail')){
            $thumb = $request->thumbnail;
            $name = $thumb->hashName();
            $thumb->storeAs('public/thumbs',$name);

            return $name;
        }
    }

    public function delete($id)
    {
        $this->find($id)->delete();
    }

    public function find($id)
    {
        return Project::findOrFail($id);
    }

    public function update($request, $id)
    {
        $project= $this->find($id);

        $project->name = $request->name;
        if ($request->hasFile('thumbnail')){
            $project->thumbnail = $this->thumb($request);
        }
        $project->save();
    }

    public function todos($individual)
    {
        return $individual->tasks()->where('completion', 0)->get();
    }

    public function dones($individual)
    {
        return $individual->tasks()->where('completion', 1)->get();
    }
}
