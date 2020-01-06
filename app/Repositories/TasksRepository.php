<?php


namespace App\Repositories;


use App\Task;

class TasksRepository
{
    public function store($request)
    {
        Task::create([
            'name'=>$request->name,
            'completion'=>(int)false,
            'project_id'=>$request->projectID
        ]);
    }

    public function check($id)
    {
        $task = Task::findOrFail($id);
        $task->update([
            'completion'=>1
        ]);
    }

    public function update($request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update([
            'name'=>$request->name
        ]);
    }

    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
    }
}
