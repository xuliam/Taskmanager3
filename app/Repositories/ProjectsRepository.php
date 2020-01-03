<?php


namespace App\Repositories;


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
            $thumb->storeAs('thumbs',$name);
            
            return $name;
        }
    }
}
