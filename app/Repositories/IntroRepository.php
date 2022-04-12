<?php

namespace App\Repositories;

use App\Models\Intro;

class IntroRepository implements TestInterface
{

    public function get($id)
    {
        return Intro::find($id);
    }


    public function all()

    {
        return Intro::all();
    }

    public function store(array $data)
    {

        return Intro::create($data);

    }

    public function update($id, array $data)
    {
        return Intro::find($id)->update($data);
    }


    public function delete($id)
    {
        return Intro::destroy($id);
    }


}
